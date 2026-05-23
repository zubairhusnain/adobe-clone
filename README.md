# Adobe.com local clone (Samsung-clon structure)

Offline mirror of [adobe.com](https://www.adobe.com/) using the same architecture as `samsung-clon/`.

## Structure

```
index.php              # Homepage only (PHP + asset rewriter; no index.html)
base-url.php           # Local base URL + HTML URL rewriting
router.php             # Front controller for Apache
.htaccess
pages/                 # Mirrored inner pages (one index.php per route)
upp/ libs/ marketingtech/ content/   # Adobe static roots (mirrored assets)
assets/
  css/ images/ js/ remote/   # Bundled + third-party assets
mirror-adobe.mjs       # Playwright crawler (pages + assets)
```

## Setup

1. Symlink Playwright (if `npm install` fails globally):

   ```bash
   ln -sf ../website-cloning-tool/node_modules ./node_modules
   ./node_modules/.bin/playwright install chromium
   ```

2. **Download front-page links + assets** (recommended — uses `curl`, no Playwright):

   ```bash
   cd /Applications/XAMPP/xamppfiles/htdocs/clon-adobe-website
   bash scripts/clone-front-pages.sh
   # or: npm run clone:front
   ```

   This creates `pages/<route>/index.php` for every `www.adobe.com` link in `index.php`, downloads CSS/JS/images into `upp/`, `libs/`, `marketingtech/`, and `assets/remote/`, and refreshes `index.php`.

   Optional: `PAGE_WORKERS=2 ASSET_WORKERS=8 bash scripts/clone-front-pages.sh`

3. Playwright mirror (alternative if curl fails):

   ```bash
   npm run mirror
   ```

4. Download remaining third-party assets referenced in HTML/CSS:

   ```bash
   npm run mirror:remote-assets
   ```

5. Open in XAMPP:

   `http://localhost/clon-adobe-website/`

## Important: real page content

Do **not** use `instant-pages.py` — it only pastes the homepage into every route.

**Download real HTML** (run in macOS Terminal, not a sandboxed agent):

```bash
bash scripts/clone-front-pages.sh
```

Each `pages/<route>/index.php` will contain the actual DOM from `https://www.adobe.com/<route>.html`.

On first visit, `router.php` also tries a one-time PHP/curl download if a route is still a stub.

## Notes

- Internal links like `https://www.adobe.com/foo.html` rewrite to `/foo/`.
- Analytics (GTM, DoubleClick, etc.) are stubbed or stripped for offline use.
- Some Adobe APIs (IMS, personalization JSON) may still call remote services unless stubbed in `router.php`.
