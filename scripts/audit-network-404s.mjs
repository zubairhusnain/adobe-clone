#!/usr/bin/env node
/** Log 404 asset URLs per route (Playwright). */
import fs from 'node:fs/promises'
import path from 'node:path'
import { fileURLToPath } from 'node:url'
import { chromium } from 'playwright'

const ROOT = path.dirname(path.dirname(fileURLToPath(import.meta.url)))
const BASE = (process.env.CW_BASE_URL || 'http://localhost/clon-adobe-website').replace(/\/$/, '')

async function collectRoutes() {
  const routes = ['/']
  const pagesDir = path.join(ROOT, 'pages')
  async function walk(dir, prefix = '') {
    for (const e of await fs.readdir(dir, { withFileTypes: true })) {
      if (e.name.startsWith('.')) continue
      const abs = path.join(dir, e.name)
      if (e.isDirectory()) await walk(abs, `${prefix}/${e.name}`)
      else if (e.name === 'index.php') routes.push(`${prefix}/` || '/')
    }
  }
  await walk(pagesDir)
  return [...new Set(routes)].sort()
}

const routes = process.argv[2] ? [process.argv[2]] : await collectRoutes()
const browser = await chromium.launch({ headless: true })
const page = await browser.newPage()
const report = {}

for (const route of routes) {
  const url = `${BASE}${route === '/' ? '/' : route}`
  const bad = []
  const handler = (res) => {
    if (res.status() !== 404) return
    const u = res.url()
    if (!u.includes('localhost')) return
    if (/favicon|akam|adobeid|ims|marketingtech|googletagmanager/i.test(u)) return
    bad.push(u.replace(BASE, '') || u)
  }
  page.on('response', handler)
  try {
    await page.goto(url, { waitUntil: 'domcontentloaded', timeout: 60000 })
    await page.waitForTimeout(2000)
  } catch (e) {
    bad.push(`nav: ${e.message}`)
  }
  page.off('response', handler)
  if (bad.length) {
    report[route] = [...new Set(bad)].sort()
    console.log(`FAIL ${route} (${bad.length} 404s)`)
    for (const u of report[route].slice(0, 8)) console.log(`  ${u}`)
    if (report[route].length > 8) console.log(`  ... +${report[route].length - 8}`)
  } else {
    console.log(`OK   ${route}`)
  }
}

await browser.close()
await fs.writeFile(path.join(ROOT, 'scripts', 'network-404-report.json'), JSON.stringify(report, null, 2))
console.log(`\nWrote scripts/network-404-report.json (${Object.keys(report).length} routes with 404s)`)
