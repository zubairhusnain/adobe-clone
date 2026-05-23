#!/usr/bin/env node
import { chromium } from 'playwright'

const BASE = 'http://localhost/clon-adobe-website'
const route = process.argv[2] || '/creativecloud/photography/'

const browser = await chromium.launch({ headless: true, channel: 'chrome' })
const page = await browser.newPage()
const failed = []
page.on('response', (r) => {
  const u = r.url()
  const s = r.status()
  if (s >= 400 && (u.includes('libs/') || u.includes('upp/') || u.includes('.js') || u.includes('.css'))) {
    failed.push({ status: s, url: u, type: r.headers()['content-type'] })
  }
})
await page.goto(`${BASE}${route}`, { waitUntil: 'networkidle', timeout: 60000 }).catch(() => {})
await page.waitForTimeout(2000)
failed.sort((a, b) => a.url.localeCompare(b.url))
for (const f of failed.slice(0, 40)) console.log(f.status, f.type, f.url)
console.log('total', failed.length)
await browser.close()
