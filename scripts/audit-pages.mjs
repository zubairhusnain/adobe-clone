#!/usr/bin/env node
/**
 * Audit all mirrored routes: HTTP 200, no remote adobe asset URLs in served HTML,
 * critical CSS/JS present.
 */
import fs from 'node:fs/promises'
import path from 'node:path'
import { fileURLToPath } from 'node:url'

const ROOT = path.dirname(path.dirname(fileURLToPath(import.meta.url)))
const BASE = process.env.CW_BASE_URL || 'http://localhost/clon-adobe-website'

const REMOTE_ADOBE_ASSET = /https?:\/\/(?:www\.)?adobe\.com\/(?:upp|libs|marketingtech|homepage|federal|content|etc\.clientlibs|akam|cc-shared|creativecloud)\/[^\s"'<>]+/gi
const MILO_MARKERS = /global-navigation|libs\/styles\/styles\.css|upp\/styles\/styles\.css|acrobat\/styles\/styles\.css/
const COMMUNITY_MARKERS = /custom-header-container|creator resources/i
const GATSBY_MARKERS = /learn\/static\/s\//

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

async function auditRoute(route) {
  const url = `${BASE}${route === '/' ? '/' : route}`
  const issues = []
  let html = ''
  let status = 0
  try {
    const res = await fetch(url, { redirect: 'follow' })
    status = res.status
    html = await res.text()
  } catch (e) {
    return { route, status: 0, issues: [`fetch: ${e.message}`] }
  }
  if (status !== 200) issues.push(`HTTP ${status}`)
  if (html.length < 5000) issues.push(`short HTML (${html.length}b)`)
  const remote = [...html.matchAll(REMOTE_ADOBE_ASSET)]
  if (remote.length) issues.push(`${remote.length} remote adobe assets in served HTML`)
  const isGatsby = GATSBY_MARKERS.test(html)
  const isCommunity = COMMUNITY_MARKERS.test(html)
  const isMilo = MILO_MARKERS.test(html)
  if (isGatsby && /learn\/static\/s\//.test(html)) {
    /* Adobe Learn Gatsby app */
  } else if (isCommunity && html.length > 15000) {
    /* custom community layout — no milo styles.css */
  } else if (route.startsWith('/acrobat/online/') && html.length > 50000) {
    /* Acrobat online tools load /acrobat/styles/styles.css via JS */
  } else if (isMilo) {
    if (!/libs\/styles\/styles\.css|upp\/styles\/styles\.css|acrobat\/styles\/styles\.css/.test(html)) {
      issues.push('missing milo styles.css')
    }
    if (!/global-navigation/.test(html)) issues.push('missing global-navigation')
    if (!/global-footer/.test(html)) issues.push('missing global-footer')
    if (/body\s*\{\s*display:\s*none/.test(html) && !/display:block!important/.test(html)) {
      issues.push('body still hidden')
    }
  } else if (isGatsby) {
    if (!/learn\/static\/s\//.test(html)) issues.push('missing learn static bundle')
  } else if (html.length > 10000) {
    issues.push('unknown page type (no milo/gatsby markers)')
  }
  return { route, status, issues, len: html.length, remote: remote.length }
}

const routes = await collectRoutes()
console.log(`Auditing ${routes.length} routes at ${BASE}\n`)
const bad = []
for (const route of routes) {
  const r = await auditRoute(route)
  if (r.issues.length) {
    bad.push(r)
    console.log(`FAIL ${route} — ${r.issues.join('; ')}`)
  } else {
    console.log(`OK   ${route} (${r.len}b)`)
  }
}
console.log(`\n${bad.length} failed / ${routes.length} total`)
process.exitCode = bad.length ? 1 : 0
