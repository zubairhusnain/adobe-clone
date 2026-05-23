#!/usr/bin/env node
/**
 * Mirror one Adobe page from a Wayback snapshot (when live adobe.com is unreachable).
 */
import fs from 'node:fs/promises'
import path from 'node:path'
import { chromium } from 'playwright'

const waybackUrl =
  process.argv[2] ||
  'https://web.archive.org/web/20250501171137/https://www.adobe.com/acrobat/generative-ai-pdf.html'
const outFile =
  process.argv[3] ||
  'pages/acrobat/generative-ai-pdf/index.php'

function phpHeaderForOutFile(outFile) {
  const absOut = path.resolve(process.cwd(), outFile)
  const pagesRoot = path.join(process.cwd(), 'pages')
  const rel = path.relative(pagesRoot, path.dirname(absOut))
  const depth = rel === '' ? 1 : rel.split(path.sep).length + 1
  return `<?php\nrequire_once dirname(__DIR__, ${depth}) . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n`
}

function cleanWaybackHtml(html) {
  return html
    .replace(/<!-- BEGIN WAYBACK.*?END WAYBACK -->/gis, '')
    .replace(/<script[^>]*web\.archive\.org[^>]*>[\s\S]*?<\/script>/gi, '')
    .replace(/<link[^>]*web\.archive\.org[^>]*>/gi, '')
    .replace(/\/web\/\d+(?:im_|js_|cs_|jm_)\//g, '/')
    .replace(/https:\/\/web\.archive\.org\/web\/\d+\//g, '')
}

let browser
try {
  browser = await chromium.launch({
    headless: true,
    channel: 'chrome',
    args: ['--disable-blink-features=AutomationControlled'],
  })
} catch {
  browser = await chromium.launch({
    headless: true,
    args: ['--disable-blink-features=AutomationControlled'],
  })
}
const context = await browser.newContext({
  userAgent:
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
})
const page = await context.newPage()
console.log('Loading', waybackUrl)
await page.goto(waybackUrl, { waitUntil: 'domcontentloaded', timeout: 120000 })
await page.waitForTimeout(8000)
try {
  await page.waitForSelector('.hero-marquee[data-block-status="loaded"]', { timeout: 60000 })
} catch {
  console.log('Hero not fully decorated; saving partial HTML')
}
let html = await page.content()
html = cleanWaybackHtml(html)
if (!/<html/i.test(html) || html.length < 5000) {
  console.error('Captured HTML too small:', html.length)
  process.exit(1)
}
await fs.mkdir(path.dirname(outFile), { recursive: true })
await fs.writeFile(outFile, phpHeaderForOutFile(outFile) + html, 'utf8')
console.log('Wrote', outFile, '(' + html.length + ' bytes html)')
await browser.close()
