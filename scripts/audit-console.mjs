#!/usr/bin/env node
/**
 * Visit every mirrored route and collect console errors (exclude known noise).
 */
import fs from 'node:fs/promises'
import path from 'node:path'
import { fileURLToPath } from 'node:url'
import { chromium } from 'playwright'

const ROOT = path.dirname(path.dirname(fileURLToPath(import.meta.url)))
const BASE = (process.env.CW_BASE_URL || 'http://localhost/clon-adobe-website').replace(/\/$/, '')

const IGNORE = [
  /favicon\.ico.*404/i,
  /Failed to load resource.*favicon/i,
  /net::ERR_FAILED.*adobeid/i,
  /CORS.*adobeid/i,
  /CORS.*services\.adobe\.com/i,
  /Access to XMLHttpRequest.*adobeid/i,
  /Access to fetch.*adobeid/i,
  /GNAV: Error with IMS/i,
  /LANA Msg:/i,
  /googletagmanager/i,
  /facebook\.com/i,
  /doubleclick/i,
  /everest/i,
  /flashtalking/i,
  /commerce\.adobe\.com/i,
  /lana\/ll/i,
  /stage\.adobe\.com/i,
  /Could not fetch \.milo\/config/i,
  /page resources for.*not found/i,
  /Not rendering React/i,
  /ERR_HTTP2_PROTOCOL_ERROR/i,
  /net::ERR_FAILED 200/i,
  /dc-shared\/navigation/i,
  /seotech\/api\/json-ld/i,
]

async function collectRoutes() {
  const routes = ['/']
  const pagesDir = path.join(ROOT, 'pages')
  async function walk(dir, prefix = '') {
    const entries = await fs.readdir(dir, { withFileTypes: true })
    for (const e of entries) {
      if (e.name === 'samsung-clon' || e.name.startsWith('.')) continue
      const abs = path.join(dir, e.name)
      if (e.isDirectory()) await walk(abs, `${prefix}/${e.name}`)
      else if (e.name === 'index.php') routes.push(`${prefix}/` || '/')
    }
  }
  await walk(pagesDir)
  return [...new Set(routes)].sort()
}

function shouldIgnore(text) {
  return IGNORE.some((re) => re.test(text))
}

async function auditRoute(page, route) {
  const url = `${BASE}${route === '/' ? '/' : route}`
  const errors = []
  const onConsole = (msg) => {
    if (msg.type() !== 'error') return
    const text = msg.text()
    if (shouldIgnore(text)) return
    errors.push(text.slice(0, 200))
  }
  const onPageError = (err) => {
    const text = String(err)
    if (shouldIgnore(text)) return
    errors.push(text.slice(0, 200))
  }
  page.on('console', onConsole)
  page.on('pageerror', onPageError)
  try {
    await page.goto(url, { waitUntil: 'domcontentloaded', timeout: 45000 })
    await page.waitForTimeout(2500)
  } catch (e) {
    errors.push(`navigation: ${e.message}`)
  }
  page.off('console', onConsole)
  page.off('pageerror', onPageError)
  return { route, url, errors: [...new Set(errors)] }
}

const routes = await collectRoutes()
console.log(`Console audit: ${routes.length} routes at ${BASE}\n`)

let browser
try {
  browser = await chromium.launch({ headless: true, channel: 'chrome' })
} catch {
  browser = await chromium.launch({ headless: true })
}
const context = await browser.newContext({ ignoreHTTPSErrors: true })
const page = await context.newPage()

const results = []
for (const route of routes) {
  const r = await auditRoute(page, route)
  if (r.errors.length) {
    results.push(r)
    console.log(`FAIL ${route}`)
    for (const e of r.errors.slice(0, 5)) console.log(`  - ${e}`)
    if (r.errors.length > 5) console.log(`  ... +${r.errors.length - 5} more`)
  } else {
    console.log(`OK   ${route}`)
  }
}

await browser.close()

const summaryPath = path.join(ROOT, 'scripts', 'console-audit-summary.json')
await fs.writeFile(summaryPath, JSON.stringify({ base: BASE, failed: results }, null, 2))

const allTexts = results.flatMap((r) => r.errors)
const counts = {}
for (const t of allTexts) {
  const key = t.replace(/\d+/g, 'N').slice(0, 120)
  counts[key] = (counts[key] || 0) + 1
}
console.log(`\n${results.length} pages with errors / ${routes.length} total`)
console.log('Top error patterns:')
Object.entries(counts)
  .sort((a, b) => b[1] - a[1])
  .slice(0, 15)
  .forEach(([k, n]) => console.log(`  (${n}x) ${k}`))

process.exitCode = results.length ? 1 : 0
