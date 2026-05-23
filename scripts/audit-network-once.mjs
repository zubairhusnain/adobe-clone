#!/usr/bin/env node
import { chromium } from 'playwright'

const BASE = (process.env.CW_BASE_URL || 'http://localhost/clon-adobe-website').replace(/\/$/, '')
const routes = process.argv.slice(2).length ? process.argv.slice(2) : ['/', '/creativecloud/photography/', '/acrobat/online/compress-pdf/']

let browser
try {
  browser = await chromium.launch({ headless: true, channel: 'chrome' })
} catch {
  browser = await chromium.launch({ headless: true })
}
const page = await browser.newPage()

for (const route of routes) {
  const bad = []
  const onRes = (res) => {
    const s = res.status()
    if (s >= 400) bad.push(`${s} ${res.url()}`)
  }
  const onFail = (req) => bad.push(`fail ${req.url()} ${req.failure()?.errorText || ''}`)
  page.on('response', onRes)
  page.on('requestfailed', onFail)
  await page.goto(`${BASE}${route}`, { waitUntil: 'networkidle', timeout: 60000 }).catch(() => {})
  await page.waitForTimeout(1500)
  page.off('response', onRes)
  page.off('requestfailed', onFail)
  console.log(`\n=== ${route} (${bad.length} bad) ===`)
  ;[...new Set(bad)]
    .filter((u) => !/favicon|adobeid|googletagmanager|doubleclick|everest|flashtalking|typekit|prod\.adobeccstatic/i.test(u))
    .sort()
    .forEach((u) => console.log(u))
}

await browser.close()
