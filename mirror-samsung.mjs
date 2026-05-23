import fs from 'node:fs/promises'
import fsSync from 'node:fs'
import path from 'node:path'
import crypto from 'node:crypto'
import { chromium } from 'playwright'

function getArgValue(args, name, fallback) {
  const idx = args.indexOf(name)
  if (idx === -1) return fallback
  const value = args[idx + 1]
  if (!value || value.startsWith('--')) return fallback
  return value
}

function hasFlag(args, name) {
  return args.includes(name)
}

function sha1Short(input) {
  return crypto.createHash('sha1').update(input).digest('hex').slice(0, 10)
}

function trimUrlPunctuation(raw) {
  if (!raw) return raw
  return raw.replace(/(?:&quot;?|&amp;|[)\]}.,;])+$/g, '')
}

function normalizeScannedAbsoluteUrl(absolute) {
  if (!absolute) return null
  let s = absolute
  s = s.replace(/&amp;/g, '&')
  s = s.replace(/&quot;/g, '')
  if (s.includes('${')) return null
  if (s.includes('%7B') || s.includes('%7D')) return null
  if (s.includes('`') || s.includes('%60')) return null
  return s
}

const ADOBE_ROOT_PREFIXES = ['/upp/', '/libs/', '/marketingtech/', '/content/', '/homepage/', '/federal/', '/etc.clientlibs/']

function siteFromBaseUrl(baseUrl) {
  try {
    return new URL(baseUrl).hostname
  } catch {
    return 'www.samsung.com'
  }
}

function isAdobeSite(baseUrl) {
  return siteFromBaseUrl(baseUrl) === 'www.adobe.com'
}

function normalizePageUrl(rawHref, baseUrl) {
  if (!rawHref) return null

  const href = rawHref.trim()
  if (!href) return null
  if (href.startsWith('#')) return null
  if (href.startsWith('javascript:')) return null
  if (href.startsWith('mailto:')) return null
  if (href.startsWith('tel:')) return null

  let candidate = href

  if (candidate.startsWith('//')) candidate = `https:${candidate}`
  if (candidate.startsWith('/')) candidate = `${baseUrl}${candidate}`

  try {
    const url = new URL(candidate)
    if (url.hostname !== siteFromBaseUrl(baseUrl)) return null
    url.hash = ''
    return url.toString()
  } catch {
    return null
  }
}

function isAdobePageUrl(urlString) {
  try {
    const u = new URL(urlString)
    if (u.hostname !== 'www.adobe.com') return false
    const p = u.pathname.toLowerCase()
    if (!p || p === '/') return false
    if (/\.(js|css|json|jpg|jpeg|png|gif|webp|svg|ico|woff2?|webmanifest|xml|pdf|mp4)$/i.test(p)) {
      return false
    }
    if (p.includes('/favicons/') || (p.includes('/fragments/') && !p.endsWith('.html'))) {
      return false
    }
    if (p.startsWith('/federal/assets/data/')) return false
    if (p.startsWith('/uk/')) return false
    return true
  } catch {
    return false
  }
}

function toLocalFilePath(urlString) {
  const url = new URL(urlString)
  let pathname = url.pathname
  try {
    pathname = decodeURIComponent(pathname)
  } catch {}

  const hasExtension = path.posix.basename(pathname).includes('.')
  if (pathname.endsWith('/')) return `.${pathname}index.html`
  if (hasExtension) return `.${pathname}`
  return `.${pathname}/index.html`
}

function toLocalPagesPhpPath(urlString, baseUrl) {
  const url = new URL(urlString)
  let pathname = url.pathname
  try {
    pathname = decodeURIComponent(pathname)
  } catch {}

  if (isAdobeSite(baseUrl)) {
    if (pathname.endsWith('.html')) pathname = pathname.slice(0, -5)
    if (pathname.endsWith('/')) pathname = pathname.slice(0, -1)
    if (!pathname || pathname === '/') return null
    return `./pages${pathname}/index.php`
  }

  if (pathname.startsWith('/pk/')) pathname = pathname.slice('/pk'.length)
  if (pathname === '/pk') pathname = '/'
  if (!pathname.startsWith('/')) pathname = `/${pathname}`
  pathname = pathname.replace(/\/{2,}/g, '/')

  if (pathname === '/' || pathname === '') return './index.php'

  if (!pathname.endsWith('/')) pathname = `${pathname}/`
  return `./pages${pathname}index.php`
}

function isValidMirroredPage(outFile) {
  try {
    const abs = path.join(process.cwd(), outFile)
    const st = fsSync.statSync(abs)
    if (st.size < 8000) return false
    const head = fsSync.readFileSync(abs, 'utf8').slice(0, 8000)
    if (/<title>\s*Wayback Machine\s*<\/title>/i.test(head)) return false
    if (!/<html/i.test(head)) return false
    return true
  } catch {
    return false
  }
}

function phpHeaderForOutFile(outFile) {
  const absOut = path.resolve(process.cwd(), outFile)
  const root = process.cwd()
  const relDir = path.relative(root, path.dirname(absOut))
  const depth = relDir === '' || relDir === '.' ? 0 : relDir.split(path.sep).length
  if (depth === 0) {
    return `<?php
require_once __DIR__ . '/base-url.php';
cw_start_asset_url_rewrite();
?>
`
  }
  return `<?php
require_once dirname(__DIR__, ${depth}) . '/base-url.php';
cw_start_asset_url_rewrite();
?>
`
}

function guessAssetFolder(urlString, contentType) {
  const url = new URL(urlString)
  const pathname = url.pathname.toLowerCase()

  const ext = path.posix.extname(pathname)

  if (ext === '.css') return 'assets/css'
  if (ext === '.js' || ext === '.mjs') return 'assets/js'
  if (
    ext === '.png' ||
    ext === '.jpg' ||
    ext === '.jpeg' ||
    ext === '.gif' ||
    ext === '.webp' ||
    ext === '.avif' ||
    ext === '.svg' ||
    ext === '.ico'
  )
    return 'assets/images'
  if (ext === '.woff' || ext === '.woff2' || ext === '.ttf' || ext === '.otf' || ext === '.eot')
    return 'assets/fonts'
  if (ext === '.mp4' || ext === '.webm' || ext === '.m4v' || ext === '.mov') return 'assets/videos'
  if (ext === '.mp3' || ext === '.wav' || ext === '.m4a' || ext === '.aac') return 'assets/audio'
  if (ext === '.pdf') return 'assets/docs'
  if (ext === '.glb' || ext === '.gltf' || ext === '.usdz') return 'assets/models'

  const ct = (contentType || '').toLowerCase()
  if (ct.includes('text/css')) return 'assets/css'
  if (ct.includes('javascript')) return 'assets/js'
  if (ct.startsWith('image/')) return 'assets/images'
  if (ct.startsWith('video/')) return 'assets/videos'
  if (ct.startsWith('audio/')) return 'assets/audio'
  if (ct.includes('application/pdf')) return 'assets/docs'
  if (ct.includes('model/') || ct.includes('model/vnd')) return 'assets/models'
  if (ct.includes('font/') || ct.includes('application/font') || ct.includes('application/x-font'))
    return 'assets/fonts'

  return 'assets/misc'
}

function assetTargetPathFromUrl(urlString, contentType) {
  const url = new URL(urlString)
  let pathname = url.pathname
  try {
    pathname = decodeURIComponent(pathname)
  } catch {}

  if (url.hostname === 'www.adobe.com' && ADOBE_ROOT_PREFIXES.some((p) => pathname.startsWith(p))) {
    if (pathname.endsWith('/')) pathname = `${pathname}index`
    return pathname.startsWith('/') ? pathname.slice(1) : pathname
  }

  if (pathname.startsWith('/etc.clientlibs/') || pathname.startsWith('/aemapi/')) {
    let p = pathname
    if (p.endsWith('/')) p = `${p}index`
    return p.startsWith('/') ? p.slice(1) : p
  }

  const folder = guessAssetFolder(urlString, contentType)

  const base = path.posix.basename(pathname) || 'asset'
  let ext = path.posix.extname(base)
  const ct = (contentType || '').toLowerCase()
  if (!ext) {
    if (ct.startsWith('video/mp4')) ext = '.mp4'
    else if (ct.startsWith('video/webm')) ext = '.webm'
    else if (ct.startsWith('audio/mpeg')) ext = '.mp3'
    else if (ct.includes('application/pdf')) ext = '.pdf'
    else if (ct.includes('image/svg')) ext = '.svg'
    else if (ct.startsWith('image/png')) ext = '.png'
    else if (ct.startsWith('image/jpeg')) ext = '.jpg'
    else if (ct.includes('model/gltf-binary')) ext = '.glb'
    else if (ct.includes('model/vnd.usdz')) ext = '.usdz'
  }
  const stem = ext && base.endsWith(ext) ? base.slice(0, -ext.length) : base

  const needsHash = Boolean(url.search) || base === 'asset' || base.length > 180
  const suffix = needsHash ? `-${sha1Short(urlString)}` : ''
  const fileName = `${stem}${suffix}${ext || ''}`

  return `${folder}/${fileName}`
}

function remoteAssetTargetPathFromUrl(urlString, contentType) {
  const url = new URL(urlString)
  const hostname = url.hostname.toLowerCase()

  let pathname = url.pathname
  try {
    pathname = decodeURIComponent(pathname)
  } catch {}

  if (!pathname || pathname === '/') pathname = '/index'
  if (pathname.endsWith('/')) pathname = `${pathname}index`

  const baseName = path.posix.basename(pathname) || 'asset'
  let ext = path.posix.extname(baseName)
  const ct = (contentType || '').toLowerCase()
  if (!ext) {
    if (ct.includes('javascript')) ext = '.js'
    else if (ct.includes('text/css')) ext = '.css'
    else if (ct.includes('application/json')) ext = '.json'
    else if (ct.includes('image/svg')) ext = '.svg'
    else if (ct.startsWith('image/png')) ext = '.png'
    else if (ct.startsWith('image/jpeg')) ext = '.jpg'
    else if (ct.startsWith('image/webp')) ext = '.webp'
    else if (ct.startsWith('font/')) ext = '.woff2'
  }

  const stem = ext && baseName.endsWith(ext) ? baseName.slice(0, -ext.length) : baseName
  const needsHash = Boolean(url.search) || Boolean(url.hash)
  const suffix = needsHash ? `-${sha1Short(urlString)}` : ''
  const fileName = `${stem}${suffix}${ext || ''}`

  const dir = path.posix.dirname(pathname)
  const dirRel = dir === '/' ? '' : dir.replace(/^\//, '')

  return path.posix.join('assets/remote', hostname, dirRel, fileName)
}

function isAllowedAssetHost(hostname, baseUrl) {
  if (isAdobeSite(baseUrl)) {
    return (
      hostname === 'www.adobe.com' ||
      hostname === 'prod.adobeccstatic.com' ||
      hostname === 'use.typekit.net' ||
      hostname === 'client.messaging.adobe.com' ||
      hostname === 'commerce.adobe.com'
    )
  }
  return (
    hostname === 'www.samsung.com' ||
    hostname === 'images.samsung.com' ||
    hostname === 'cdn.samsung.com'
  )
}

function toPosixPath(p) {
  return p.split(path.sep).join(path.posix.sep)
}

function relFromDirToRootRelative(outDir, rootRelativePath) {
  const from = toPosixPath(outDir)
  const rel = path.posix.relative(from, rootRelativePath)
  return rel || '.'
}

async function extractLinksFromFile(inputFile, baseUrl) {
  let html = await fs.readFile(inputFile, 'utf8')
  if (inputFile.endsWith('.php')) {
    html = html.replace(/^<\?php[\s\S]*?\?>\s*/, '')
  }
  const links = new Set()

  for (const match of html.matchAll(/href=["']([^"']+)["']/gi)) {
    const normalized = normalizePageUrl(match[1], baseUrl)
    if (!normalized) continue
    if (isAdobeSite(baseUrl) && !isAdobePageUrl(normalized)) continue
    links.add(normalized)
  }

  return Array.from(links)
}

async function mapLimit(items, limit, mapper) {
  const results = new Array(items.length)
  let nextIndex = 0

  async function worker() {
    for (;;) {
      const current = nextIndex
      nextIndex += 1
      if (current >= items.length) return
      results[current] = await mapper(items[current], current)
    }
  }

  const workers = Array.from({ length: Math.max(1, limit) }, () => worker())
  await Promise.all(workers)
  return results
}

async function fileExists(filePath) {
  try {
    await fs.stat(filePath)
    return true
  } catch {
    return false
  }
}

function shouldIgnoreRelPath(relPosixPath) {
  return (
    relPosixPath === 'assets/remote' ||
    relPosixPath.startsWith('assets/remote/') ||
    relPosixPath === 'node_modules' ||
    relPosixPath.startsWith('node_modules/') ||
    relPosixPath === '.git' ||
    relPosixPath.startsWith('.git/') ||
    relPosixPath === '.history' ||
    relPosixPath.startsWith('.history/') ||
    relPosixPath === '.vscode' ||
    relPosixPath.startsWith('.vscode/') ||
    relPosixPath === '.idea' ||
    relPosixPath.startsWith('.idea/')
  )
}

async function collectExternalAssetUrlsFromDir(scanDir) {
  const root = path.resolve(process.cwd(), scanDir)
  const urls = new Set()
  const urlPattern = /(https?:\/\/[^\s"'<>]+|\/\/[^\s"'<>]+)/g

  async function walk(dir) {
    const entries = await fs.readdir(dir, { withFileTypes: true })
    for (const entry of entries) {
      const abs = path.join(dir, entry.name)
      if (entry.isDirectory()) {
        const relDir = toPosixPath(path.relative(root, abs))
        if (shouldIgnoreRelPath(relDir) || shouldIgnoreRelPath(entry.name)) {
          continue
        }
        await walk(abs)
        continue
      }
      if (!entry.isFile()) continue
      const ext = path.extname(entry.name).toLowerCase()
      if (ext !== '.php' && ext !== '.html' && ext !== '.css' && ext !== '.js' && ext !== '.mjs') continue

      let text = ''
      try {
        text = await fs.readFile(abs, 'utf8')
      } catch {
        continue
      }

      for (const match of text.matchAll(urlPattern)) {
        const raw = trimUrlPunctuation(match[0])
        if (!raw) continue
        const absolute0 = raw.startsWith('//') ? `https:${raw}` : raw
        const absolute = normalizeScannedAbsoluteUrl(absolute0)
        if (!absolute) continue
        if (!absolute.startsWith('http')) continue

        let u = null
        try {
          u = new URL(absolute)
        } catch {
          continue
        }

        if (!u.hostname) continue
        if (u.hostname === 'localhost' || u.hostname.startsWith('localhost:')) continue
        if (!isLikelyAssetUrl(u.toString())) continue

        urls.add(u.toString())
      }
    }
  }

  await walk(root)
  return Array.from(urls)
}

async function downloadRemoteAssetsFromScanDir(scanDir) {
  const urls = await collectExternalAssetUrlsFromDir(scanDir)
  const sorted = urls.sort()

  console.log(`Found ${sorted.length} external asset URLs in ${scanDir}`)

  const downloaded = []
  const failures = []

  const dlConcurrency = Number(process.env.CW_FETCH_WORKERS || '16')
  await mapLimit(sorted, dlConcurrency, async (urlString) => {
    try {
      const response = await fetch(urlString, {
        redirect: 'follow',
        headers: { 'user-agent': 'copy-website-local' },
      })
      if (!response.ok) throw new Error(`HTTP ${response.status} for ${urlString}`)

      const contentType = response.headers.get('content-type') || ''
      const ab = await response.arrayBuffer()
      const buffer = Buffer.from(ab)
      if ((contentType || '').toLowerCase().includes('text/html')) return

      const rootRel = remoteAssetTargetPathFromUrl(urlString, contentType)
      const absOut = path.join(process.cwd(), rootRel)
      if (!(await fileExists(absOut))) {
        await fs.mkdir(path.dirname(absOut), { recursive: true })
        await fs.writeFile(absOut, buffer)
      }
      downloaded.push(urlString)
    } catch (error) {
      failures.push({ url: urlString, error: String(error) })
    }
  })

  const listFile = path.join(process.cwd(), 'assets/remote/remote-asset-urls.txt')
  const failFile = path.join(process.cwd(), 'assets/remote/remote-asset-urls.failed.txt')
  await fs.writeFile(listFile, downloaded.sort().join('\n') + (downloaded.length ? '\n' : ''), 'utf8')
  await fs.writeFile(
    failFile,
    failures.map((f) => `${f.url}\t${f.error}`).join('\n') + (failures.length ? '\n' : ''),
    'utf8'
  )

  console.log(`Downloaded ${downloaded.length} external assets`)
  console.log(`Failed ${failures.length} external assets`)
  console.log(`List: ${listFile}`)
  console.log(`Failures: ${failFile}`)

  if (failures.length) process.exitCode = 1
}

async function rewriteRemoteAssetUrlsInCssFiles(scanDir) {
  const root = path.resolve(process.cwd(), scanDir)
  const urlWithSuffixPattern = /((?:https?:)?\/\/[^\s"'<>]+)([)\]}.,;]*)/g

  let changedFiles = 0
  let rewrittenUrls = 0

  async function walk(dir) {
    const entries = await fs.readdir(dir, { withFileTypes: true })
    for (const entry of entries) {
      const abs = path.join(dir, entry.name)
      if (entry.isDirectory()) {
        const relDir = toPosixPath(path.relative(root, abs))
        if (shouldIgnoreRelPath(relDir) || shouldIgnoreRelPath(entry.name)) {
          continue
        }
        await walk(abs)
        continue
      }
      if (!entry.isFile()) continue
      if (path.extname(entry.name).toLowerCase() !== '.css') continue

      let text = ''
      try {
        text = await fs.readFile(abs, 'utf8')
      } catch {
        continue
      }

      const fileRootRel = toPosixPath(path.relative(process.cwd(), abs))
      const fileDir = path.posix.dirname(fileRootRel)

      function findLocalRemoteAssetRelForUrl(urlString) {
        let u = null
        try {
          u = new URL(urlString)
        } catch {
          return null
        }

        const hostname = u.hostname.toLowerCase()
        let pathname = u.pathname
        try {
          pathname = decodeURIComponent(pathname)
        } catch {}

        if (!pathname || pathname === '/') pathname = '/index'
        if (pathname.endsWith('/')) pathname = `${pathname}index`

        const dir = path.posix.dirname(pathname)
        const dirRel = dir === '/' ? '' : dir.replace(/^\//, '')

        const baseName = path.posix.basename(pathname) || 'asset'
        const ext = path.posix.extname(baseName)
        const needsHash = Boolean(u.search) || Boolean(u.hash)

        if (ext) {
          const stem = baseName.slice(0, -ext.length)
          const fileName = needsHash ? `${stem}-${sha1Short(urlString)}${ext}` : baseName
          const rel = path.posix.join('assets/remote', hostname, dirRel, fileName)
          const absPath = path.join(process.cwd(), rel)
          if (fsSync.existsSync(absPath)) return rel
          return null
        }

        const prefix = `${baseName}${needsHash ? `-${sha1Short(urlString)}` : ''}`
        const localDirAbs = path.join(process.cwd(), 'assets/remote', hostname, dirRel)
        if (!fsSync.existsSync(localDirAbs)) return null

        let entries = []
        try {
          entries = fsSync.readdirSync(localDirAbs)
        } catch {
          return null
        }

        const candidates = entries.filter((name) => name.startsWith(`${prefix}.`)).sort()
        if (!candidates.length) return null

        return path.posix.join('assets/remote', hostname, dirRel, candidates[0])
      }

      let didChange = false
      const out = text.replace(urlWithSuffixPattern, (full, rawUrl, suffix) => {
        const raw = trimUrlPunctuation(rawUrl)
        if (!raw) return full
        const absolute0 = raw.startsWith('//') ? `https:${raw}` : raw
        const absolute = normalizeScannedAbsoluteUrl(absolute0)
        if (!absolute) return full
        if (!absolute.startsWith('http')) return full

        let u = null
        try {
          u = new URL(absolute)
        } catch {
          return full
        }
        if (!u.hostname) return full
        if (u.hostname === 'localhost' || u.hostname.startsWith('localhost:')) return full
        if (!isLikelyAssetUrl(u.toString())) return full

        const localRel = findLocalRemoteAssetRelForUrl(u.toString())
        if (!localRel) return full

        const relFromCss = path.posix.relative(fileDir, localRel) || '.'
        didChange = true
        rewrittenUrls += 1
        return `${relFromCss}${suffix || ''}`
      })

      if (didChange && out !== text) {
        await fs.writeFile(abs, out, 'utf8')
        changedFiles += 1
      }
    }
  }

  await walk(root)
  console.log(`Rewrote ${rewrittenUrls} CSS URL(s) in ${changedFiles} file(s) under ${scanDir}`)
}

async function downloadRemoteAssetsFromPages() {
  await downloadRemoteAssetsFromScanDir('pages')
}

async function downloadRemoteAssetsFromProject() {
  await downloadRemoteAssetsFromScanDir('.')
  await rewriteRemoteAssetUrlsInCssFiles('.')
}

function isLikelyAssetUrl(urlString) {
  try {
    const url = new URL(urlString)
    const pathname = url.pathname.toLowerCase()
    const ext = path.posix.extname(pathname)
    if (
      ext === '.css' ||
      ext === '.js' ||
      ext === '.mjs' ||
      ext === '.png' ||
      ext === '.jpg' ||
      ext === '.jpeg' ||
      ext === '.gif' ||
      ext === '.webp' ||
      ext === '.avif' ||
      ext === '.svg' ||
      ext === '.ico' ||
      ext === '.woff' ||
      ext === '.woff2' ||
      ext === '.ttf' ||
      ext === '.otf' ||
      ext === '.eot' ||
      ext === '.mp4' ||
      ext === '.webm' ||
      ext === '.m4v' ||
      ext === '.mov' ||
      ext === '.mp3' ||
      ext === '.wav' ||
      ext === '.m4a' ||
      ext === '.aac' ||
      ext === '.pdf' ||
      ext === '.glb' ||
      ext === '.gltf' ||
      ext === '.usdz'
    )
      return true

    if (ADOBE_ROOT_PREFIXES.some((p) => pathname.startsWith(p))) return true
    if (pathname.includes('/is/image/')) return true
    if (pathname.includes('/is/content/')) return true
    if (pathname.includes('/content/dam/')) return true
    if (pathname.includes('/etc.clientlibs/')) return true
    if (pathname.includes('/etc/designs/')) return true
    if (pathname.includes('/videos/')) return true
    if (pathname.endsWith('/js')) return true
    if (pathname.endsWith('/css')) return true
    return false
  } catch {
    return false
  }
}

function extractPotentialAssetUrlsFromHtml(html, pageUrl, baseUrl = 'https://www.samsung.com') {
  const found = new Set()
  const adobe = isAdobeSite(baseUrl)

  const rawUrlPattern = adobe
    ? /https?:\/\/(?:www\.adobe\.com|prod\.adobeccstatic\.com|use\.typekit\.net)\/[^\s"'<>),&]+/gi
    : /https?:\/\/(?:www|images|cdn)\.samsung\.com\/[^\s"'<>),&]+/g
  for (const match of html.matchAll(rawUrlPattern)) {
    const raw = match[0].trim()
    if (!raw) continue
    if (!isLikelyAssetUrl(raw)) continue
    found.add(raw)
  }

  const protocolRelativePattern = adobe
    ? /\/\/(?:www\.adobe\.com|prod\.adobeccstatic\.com)\/[^\s"'<>),&]+/gi
    : /\/\/(?:www|images|cdn)\.samsung\.com\/[^\s"'<>),&]+/g
  for (const match of html.matchAll(protocolRelativePattern)) {
    const raw = match[0].trim()
    if (!raw) continue
    let absolute = null
    try {
      absolute = new URL(raw, pageUrl).toString()
    } catch {
      continue
    }
    if (!isLikelyAssetUrl(absolute)) continue
    found.add(absolute)
  }

  const srcsetPattern = /srcset=(["'])([^"']+)\1/g
  for (const match of html.matchAll(srcsetPattern)) {
    const raw = match[2].trim()
    if (!raw) continue
    const parts = raw
      .split(',')
      .map((p) => p.trim())
      .filter(Boolean)
      .map((p) => p.split(/\s+/)[0])
      .filter(Boolean)

    for (const p of parts) {
      if (p.startsWith('data:')) continue
      let absolute = null
      try {
        absolute = new URL(p, pageUrl).toString()
      } catch {
        continue
      }
      if (!isLikelyAssetUrl(absolute)) continue
      found.add(absolute)
    }
  }

  const urlInAttr = /=[\s]*(['"])([^'"]+)\1/g
  for (const match of html.matchAll(urlInAttr)) {
    const raw = match[2].trim()
    if (!raw) continue
    if (raw.startsWith('data:')) continue
    if (adobe) {
      if (
        !raw.includes('adobe.com') &&
        !raw.startsWith('//') &&
        !raw.startsWith('/upp') &&
        !raw.startsWith('/libs') &&
        !raw.startsWith('/marketingtech') &&
        !raw.startsWith('/federal') &&
        !raw.startsWith('/homepage')
      ) {
        continue
      }
    } else if (
      !raw.includes('samsung.com') &&
      !raw.startsWith('//') &&
      !raw.startsWith('/etc') &&
      !raw.startsWith('/content') &&
      !raw.startsWith('/_next') &&
      !raw.startsWith('/assets')
    ) {
      continue
    }

    let absolute = null
    try {
      absolute = new URL(raw, pageUrl).toString()
    } catch {
      continue
    }

    if (!isLikelyAssetUrl(absolute)) continue
    found.add(absolute)
  }

  const urlInCss = /url\(\s*(['"]?)([^'")]+)\1\s*\)/g
  for (const match of html.matchAll(urlInCss)) {
    const raw = match[2].trim()
    if (!raw) continue
    if (raw.startsWith('data:')) continue

    let absolute = null
    try {
      absolute = new URL(raw, pageUrl).toString()
    } catch {
      continue
    }

    if (!isLikelyAssetUrl(absolute)) continue
    found.add(absolute)
  }

  return Array.from(found)
}

function rewriteHtmlAttributes(html, pageUrl, outDir, urlToRootRelativeAssetPath, baseUrlLocal = '') {
  function rewriteOneUrl(rawValue) {
    if (!rawValue) return rawValue
    if (rawValue.startsWith('data:')) return rawValue

    let absolute = null
    try {
      absolute = new URL(rawValue, pageUrl).toString()
    } catch {
      return rawValue
    }

    const rootRel = urlToRootRelativeAssetPath.get(absolute)
    if (rootRel) return relFromDirToRootRelative(outDir, rootRel)

    if (baseUrlLocal) {
      const u = new URL(absolute)
      if (u.hostname === 'www.adobe.com') {
        let p = u.pathname
        if (p.endsWith('.html')) p = p.slice(0, -5)
        const lastSeg = p.split('/').pop() || ''
        const dot = lastSeg.lastIndexOf('.')
        const ext = dot > 0 ? lastSeg.slice(dot + 1).toLowerCase() : ''
        const assetExts = new Set([
          'js', 'mjs', 'css', 'png', 'jpg', 'jpeg', 'gif', 'webp', 'avif', 'svg', 'ico',
          'woff', 'woff2', 'ttf', 'otf', 'eot', 'json', 'xml', 'webmanifest', 'mp4', 'webm', 'pdf', 'map',
        ])
        const isAssetPath = ext !== '' && assetExts.has(ext)
        if (!isAssetPath && !p.endsWith('/') && p !== '/') p += '/'
        if (p === '/') return `${baseUrlLocal}/`
        const q = u.search || ''
        return `${baseUrlLocal}${p}${q}`
      }
    }

    return rawValue
  }

  const srcsetPattern = /srcset=(["'])([^"']+)\1/g
  const stylePattern = /style=(["'])([^"']*)\1/g
  const anyAttrPattern = /([\w:-]+)=(["'])([^"']*)\2/g

  let out = html.replace(srcsetPattern, (full, quote, original) => {
    const parts = original
      .split(',')
      .map((p) => p.trim())
      .filter(Boolean)
      .map((p) => {
        const [u, ...rest] = p.split(/\s+/)
        const rewritten = rewriteOneUrl(u)
        return [rewritten, ...rest].join(' ')
      })
    return `srcset=${quote}${parts.join(', ')}${quote}`
  })

  out = out.replace(stylePattern, (full, quote, original) => {
    const rewritten = original.replace(/url\(\s*(['"]?)([^'")]+)\1\s*\)/g, (m, q, u) => {
      const replaced = rewriteOneUrl(u)
      return `url("${replaced}")`
    })
    return `style=${quote}${rewritten}${quote}`
  })

  out = out.replace(anyAttrPattern, (full, name, quote, original) => {
    const n = name.toLowerCase()
    if (n === 'srcset' || n === 'style') return full
    // Only page navigation and asset URLs — never lang, name, rel, type, etc.
    if (!['href', 'src', 'action'].includes(n)) return full
    const replaced = rewriteOneUrl(original)
    if (replaced === original) return full
    return `${name}=${quote}${replaced}${quote}`
  })

  const entries = Array.from(urlToRootRelativeAssetPath.entries())
    .map(([absoluteUrl, rootRel]) => {
      const rel = relFromDirToRootRelative(outDir, rootRel)
      const protocolRelative = absoluteUrl.replace(/^https?:/, '')
      return { absoluteUrl, protocolRelative, rel }
    })
    .sort((a, b) => b.absoluteUrl.length - a.absoluteUrl.length)

  for (const e of entries) {
    if (out.includes(e.absoluteUrl)) out = out.replaceAll(e.absoluteUrl, e.rel)
    if (out.includes(e.protocolRelative)) out = out.replaceAll(e.protocolRelative, e.rel)
  }

  if (baseUrlLocal) {
    out = out.replace(/https?:\/\/www\.adobe\.com\/([^"'\s>?#]+)\.html/gi, (_, p) => {
      const route = p.endsWith('/') ? p : `${p}/`
      return `${baseUrlLocal}/${route}`
    })
  }

  return out
}

async function downloadByRequest(context, urlString) {
  const response = await context.request.get(urlString, { timeout: 60000 })
  if (!response.ok()) throw new Error(`HTTP ${response.status()} for ${urlString}`)
  const headers = response.headers()
  const contentType = headers['content-type'] || ''
  const buffer = await response.body()
  return { buffer, contentType }
}

async function rewriteCssUrls(cssText, cssUrl, cssLocalRootRelativePath, context, urlToRootRelativeAssetPath) {
  const urlPattern = /url\(\s*(['"]?)([^'")]+)\1\s*\)/g
  const matches = Array.from(cssText.matchAll(urlPattern))

  if (!matches.length) return cssText

  let rewritten = cssText
  for (const match of matches) {
    const raw = match[2].trim()
    if (!raw) continue
    if (raw.startsWith('data:')) continue

    let absolute = null
    try {
      absolute = new URL(raw, cssUrl).toString()
    } catch {
      continue
    }

    const existing = urlToRootRelativeAssetPath.get(absolute)
    let rootRel = existing
    if (!rootRel) {
      const u = new URL(absolute)
      if (!isAllowedAssetHost(u.hostname)) continue
      const { buffer, contentType } = await downloadByRequest(context, absolute)
      rootRel = assetTargetPathFromUrl(absolute, contentType)
      const absOut = path.join(process.cwd(), rootRel)
      await fs.mkdir(path.dirname(absOut), { recursive: true })
      if (!(await fileExists(absOut))) await fs.writeFile(absOut, buffer)
      urlToRootRelativeAssetPath.set(absolute, rootRel)
    }

    const cssDir = path.posix.dirname(cssLocalRootRelativePath)
    const replacement = path.posix.relative(cssDir, rootRel) || '.'

    rewritten = rewritten.replaceAll(match[0], `url("${replacement}")`)
  }

  return rewritten
}

async function ensureAssetDownloaded(context, absoluteUrl, urlToRootRelativeAssetPath, baseUrl) {
  const existing = urlToRootRelativeAssetPath.get(absoluteUrl)
  if (existing) return existing

  const u = new URL(absoluteUrl)
  if (!isAllowedAssetHost(u.hostname, baseUrl)) {
    if (!isAdobeSite(baseUrl)) return null
    const rootRel = remoteAssetTargetPathFromUrl(absoluteUrl, '')
    urlToRootRelativeAssetPath.set(absoluteUrl, rootRel)
    const absOut = path.join(process.cwd(), rootRel)
    if (!(await fileExists(absOut))) {
      try {
        const { buffer, contentType } = await downloadByRequest(context, absoluteUrl)
        if ((contentType || '').toLowerCase().includes('text/html')) return null
        await fs.mkdir(path.dirname(absOut), { recursive: true })
        await fs.writeFile(absOut, buffer)
      } catch {
        return null
      }
    }
    return rootRel
  }

  const { buffer, contentType } = await downloadByRequest(context, absoluteUrl)
  if ((contentType || '').toLowerCase().includes('text/html')) return null

  const rootRel = assetTargetPathFromUrl(absoluteUrl, contentType)
  urlToRootRelativeAssetPath.set(absoluteUrl, rootRel)

  const absOut = path.join(process.cwd(), rootRel)
  if (!(await fileExists(absOut))) {
    await fs.mkdir(path.dirname(absOut), { recursive: true })
    await fs.writeFile(absOut, buffer)
  }

  if (rootRel.startsWith('assets/css/') && buffer.length) {
    const cssText = buffer.toString('utf8')
    const rewrittenCss = await rewriteCssUrls(cssText, absoluteUrl, rootRel, context, urlToRootRelativeAssetPath)
    if (rewrittenCss !== cssText) await fs.writeFile(absOut, rewrittenCss, 'utf8')
  }

  return rootRel
}

async function collectUrlsFromPagesDir(pagesDir, baseUrl) {
  const root = path.resolve(process.cwd(), pagesDir)
  const urls = []

  async function walk(dir) {
    const entries = await fs.readdir(dir, { withFileTypes: true })
    for (const entry of entries) {
      const abs = path.join(dir, entry.name)
      if (entry.isDirectory()) {
        await walk(abs)
        continue
      }
      if (!entry.isFile()) continue
      if (entry.name !== 'index.php') continue

      const rel = toPosixPath(path.relative(root, abs))
      const route = rel === 'index.php' ? '' : rel.replace(/\/index\.php$/, '')
      const normalizedBase = baseUrl.endsWith('/') ? baseUrl.slice(0, -1) : baseUrl
      urls.push(route ? `${normalizedBase}/pk/${route}/` : `${normalizedBase}/pk/`)
    }
  }

  await walk(root)
  return urls
}

async function main() {
  const args = process.argv.slice(2)

  if (hasFlag(args, '--download-remote-assets')) {
    await downloadRemoteAssetsFromPages()
    return
  }
  if (hasFlag(args, '--download-remote-assets-project')) {
    await downloadRemoteAssetsFromProject()
    return
  }

  const baseUrl = getArgValue(args, '--base', 'https://www.samsung.com')
  const inputFile = getArgValue(args, '--input', 'index.php')
  const singleUrlRaw = getArgValue(args, '--url', '')
  const fromPagesDir = getArgValue(args, '--from-pages', '')
  const pagesPhp = hasFlag(args, '--pages-php') || Boolean(fromPagesDir)
  const maxPagesRaw = getArgValue(args, '--max', '')
  const concurrency = Number(getArgValue(args, '--concurrency', '2'))
  const fastMode = hasFlag(args, '--fast') || (isAdobeSite(baseUrl) && !hasFlag(args, '--full'))
  const waitMs = Number(getArgValue(args, '--wait', fastMode ? '800' : '1000'))
  const forceRemirror = hasFlag(args, '--force')
  const dryRun = hasFlag(args, '--dry-run')

  const maxPages = maxPagesRaw
    ? Number(maxPagesRaw)
    : singleUrlRaw || fromPagesDir || pagesPhp
      ? null
      : 30

  const allLinks = fromPagesDir
    ? await collectUrlsFromPagesDir(fromPagesDir, baseUrl)
    : singleUrlRaw
      ? (() => {
          const u = normalizePageUrl(singleUrlRaw, baseUrl)
          return u ? [u] : []
        })()
      : await extractLinksFromFile(inputFile, baseUrl)

  const links = maxPages ? allLinks.slice(0, maxPages) : allLinks

  if (singleUrlRaw) console.log(`Mirroring single url: ${singleUrlRaw}`)
  else if (fromPagesDir) console.log(`Mirroring ${allLinks.length} local routes from ${fromPagesDir}`)
  else console.log(`Found ${allLinks.length} ${siteFromBaseUrl(baseUrl)} links in ${inputFile}`)
  if (maxPages) console.log(`Mirroring first ${links.length} links (--max ${maxPages})`)
  else console.log(`Mirroring ${links.length} links`)
  if (fastMode) {
    console.log('Fast mode: skip existing pages, no networkidle, minimal extra asset pass (use --full for complete mirror)')
  }

  const baseUrlLocal = isAdobeSite(baseUrl)
    ? (process.env.CW_BASE_URL || 'http://localhost/clon-adobe-website')
    : ''

  if (dryRun) {
    for (const url of links) {
      const out = pagesPhp ? toLocalPagesPhpPath(url, baseUrl) : toLocalFilePath(url)
      console.log(`${url} -> ${out}`)
    }
    return
  }

  const launchOpts = {
    headless: true,
    args: isAdobeSite(baseUrl)
      ? ['--disable-blink-features=AutomationControlled', '--disable-http2']
      : [],
  }
  if (isAdobeSite(baseUrl)) {
    try {
      launchOpts.channel = 'chrome'
    } catch {}
  }
  let browser
  try {
    browser = await chromium.launch(launchOpts)
  } catch {
    browser = await chromium.launch({ headless: true, args: launchOpts.args })
  }
  const context = await browser.newContext({
    userAgent:
      'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
    ignoreHTTPSErrors: isAdobeSite(baseUrl),
  })

  const failures = []
  const urlToRootRelativeAssetPath = new Map()

  let skipped = 0
  const startedAt = Date.now()

  await mapLimit(links, concurrency, async (url, index) => {
    const outFile = pagesPhp ? toLocalPagesPhpPath(url, baseUrl) : toLocalFilePath(url)
    if (!outFile) {
      console.log(`[${index + 1}/${links.length}] SKIP homepage ${url}`)
      return
    }

    if (!forceRemirror && isValidMirroredPage(outFile)) {
      skipped += 1
      console.log(`[${index + 1}/${links.length}] SKIP (exists) ${outFile}`)
      return
    }

    const outDir = path.dirname(outFile)
    await fs.mkdir(outDir, { recursive: true })
    const t0 = Date.now()
    console.log(`[${index + 1}/${links.length}] START ${url}`)

    const page = await context.newPage()
    try {
      page.on('response', async (response) => {
        try {
          if (fastMode) return

          const request = response.request()
          const resourceType = request.resourceType()
          if (
            resourceType !== 'stylesheet' &&
            resourceType !== 'script' &&
            resourceType !== 'image' &&
            resourceType !== 'font' &&
            resourceType !== 'media'
          )
            return

          if (!response.ok()) return

          const responseUrl = response.url()
          if (!responseUrl.startsWith('http')) return

          const u = new URL(responseUrl)
          if (!isAllowedAssetHost(u.hostname, baseUrl)) return

          const contentType = (await response.headerValue('content-type')) || ''
          const rootRel = assetTargetPathFromUrl(responseUrl, contentType)
          urlToRootRelativeAssetPath.set(responseUrl, rootRel)

          const absOut = path.join(process.cwd(), rootRel)
          if (await fileExists(absOut)) return

          await fs.mkdir(path.dirname(absOut), { recursive: true })
          const buffer = await response.body()
          await fs.writeFile(absOut, buffer)

          if (rootRel.startsWith('assets/css/') && buffer.length) {
            const cssText = buffer.toString('utf8')
            const rewrittenCss = await rewriteCssUrls(
              cssText,
              responseUrl,
              rootRel,
              context,
              urlToRootRelativeAssetPath
            )
            if (rewrittenCss !== cssText) await fs.writeFile(absOut, rewrittenCss, 'utf8')
          }
        } catch {}
      })

      let response = null
      let navError = null
      const navTimeout = fastMode ? 45000 : 60000
      try {
        response = await page.goto(url, { waitUntil: 'domcontentloaded', timeout: navTimeout })
      } catch (error) {
        navError = error
      }

      if (fastMode) {
        await page.waitForLoadState('load', { timeout: 8000 }).catch(() => {})
      } else {
        await page.waitForLoadState('load', { timeout: 15000 }).catch(() => {})
        await page.waitForLoadState('networkidle', { timeout: 15000 }).catch(() => {})
      }
      if (waitMs > 0) await page.waitForTimeout(waitMs)

      let content = null
      try {
        content = await page.content()
      } catch {}

      const finalUrl = page.url()
      const tooSmall = !content || content.length < 3000
      const badNav =
        finalUrl.includes('chrome-error') ||
        finalUrl.includes('about:blank') ||
        (tooSmall && !content?.toLowerCase().includes('<html'))

      if (badNav || tooSmall) {
        failures.push({
          url,
          outFile,
          error: navError ? String(navError) : `Bad page (${finalUrl}, len=${content?.length || 0})`,
        })
        console.log(`[${index + 1}/${links.length}] FAIL ${url} -> ${outFile}`)
        if (navError) console.log(String(navError))
        else console.log(`finalUrl=${finalUrl} len=${content?.length || 0}`)
        return
      }

      {
        const htmlAssetUrls = extractPotentialAssetUrlsFromHtml(content, url, baseUrl)
        const assetConcurrency = fastMode ? 12 : 6
        await mapLimit(htmlAssetUrls, assetConcurrency, async (assetUrl) => {
          if (!urlToRootRelativeAssetPath.has(assetUrl) && isLikelyAssetUrl(assetUrl)) {
            try {
              await ensureAssetDownloaded(context, assetUrl, urlToRootRelativeAssetPath, baseUrl)
            } catch {}
          }
        })
      }

      let rewrittenHtml = rewriteHtmlAttributes(content, url, outDir, urlToRootRelativeAssetPath, baseUrlLocal)
      if (isAdobeSite(baseUrl)) {
        rewrittenHtml = rewrittenHtml.replace(
          /body\s*\{\s*display:\s*none\s*;\s*\}/gi,
          'body{display:block!important;}'
        )
      }
      if (pagesPhp && isAdobeSite(baseUrl)) {
        rewrittenHtml = phpHeaderForOutFile(outFile) + rewrittenHtml
      }
      await fs.writeFile(outFile, rewrittenHtml, 'utf8')

      const status = response ? response.status() : null
      const meta = status ? `status=${status}` : 'status=?'
      const elapsed = ((Date.now() - t0) / 1000).toFixed(0)
      if (navError) {
        console.log(`[${index + 1}/${links.length}] SAVED (${meta}, ${elapsed}s) NAV_ERROR ${finalUrl} -> ${outFile}`)
      } else {
        console.log(`[${index + 1}/${links.length}] OK (${meta}, ${elapsed}s) ${finalUrl} -> ${outFile}`)
      }
    } catch (error) {
      failures.push({ url, outFile, error: String(error) })
      console.log(`[${index + 1}/${links.length}] FAIL ${url} -> ${outFile}`)
      console.log(String(error))
    } finally {
      await page.close()
    }
  })

  await context.close()
  await browser.close()

  const totalMin = ((Date.now() - startedAt) / 60000).toFixed(1)
  console.log(`Skipped ${skipped} already-mirrored page(s). Total time: ${totalMin} min`)

  if (failures.length) {
    console.log(`Done with ${failures.length} failures`)
    for (const f of failures) {
      console.log(`FAIL ${f.url} -> ${f.outFile}`)
    }
    process.exitCode = 1
  } else {
    console.log('Done with 0 failures')
  }
}

main().catch((error) => {
  console.error(error)
  process.exitCode = 1
})
