# Page fix status (offline mirror)

Base URL: **http://localhost/clon-adobe-website/**

## Audit summary

| Check | Result |
|-------|--------|
| HTTP / structure (`npm run audit:adobe`) | **65/65 OK** |
| Missing served assets | **2** (tracking GIF optional; 1 CC buy hero may still 404 on Adobe CDN) |
| Console audit | Run `node scripts/audit-console.mjs` after hard refresh |

## Fixes applied

1. **Hero images** — Downloaded `/sign/` and route-specific `media_*` files into `assets/images/` and page folders.
2. **Router** — Serves bare `/media_*.png` and nested `/…/media_*.png` via `cw_serve_resolved_asset()`.
3. **URL rewriting** — `base-url.php` + `cw-offline-shim.js` rewrite `src`/`srcset` and relative `howtobuy/…` paths.
4. **Acrobat online tools** — Restored broken `import('/acrobat/scripts/dcLana.js')` on 5 pages.
5. **Footer** — Stopped JS from duplicating footer; dedupe script + CSS.
6. **Learn** — Removed alloy pre-hiding, prefixed `/learn/static/s/*`, injected site header/footer.

## If a page still looks broken

1. Hard refresh: **Cmd+Shift+R**
2. Open only: `http://localhost/clon-adobe-website/...` (not `http://localhost/creativecloud/...`)
3. Repair assets: `npm run repair:assets`
