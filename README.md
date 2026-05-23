# Adobe.com offline clone

Static PHP site for hosting on cPanel (or any Apache + PHP host). Upload the project as-is; no build step or download tools are required on the server.

## Requirements

- PHP 8.0 or newer (enable in cPanel → **Select PHP Version**)
- Apache with **mod_rewrite** enabled
- `.htaccess` allowed (`AllowOverride All` on the document root — default on most cPanel hosts)

## cPanel setup

### 1. Upload files

1. Sign in to cPanel → **File Manager** (or upload a ZIP via **File Manager** / FTP).
2. Upload the full project into one of these locations:
   - **Main domain:** `public_html/` (all files directly inside, including `index.php`, `router.php`, and `.htaccess`)
   - **Subdomain or subfolder:** e.g. `public_html/adobe/` (entire project inside that folder)

Make sure hidden files are visible when uploading so `.htaccess` is included.

### 2. Set the document root (if needed)

- If the site lives in `public_html/`, the domain’s document root should already point there — no change needed.
- For a **subdomain** pointing at a subfolder, use cPanel → **Domains** → **Subdomains** (or **Addon Domains**) and set the document root to the folder that contains `index.php`.

### 3. Check PHP and rewrite rules

1. cPanel → **Select PHP Version** → choose **8.0+** for the domain or directory.
2. Confirm `public_html/.htaccess` (or your subfolder’s `.htaccess`) exists and was not stripped by the upload.
3. Open the site in a browser:
   - Domain root: `https://yourdomain.com/`
   - Subfolder: `https://yourdomain.com/adobe/` (path must match the folder name under `public_html`)

### 4. Optional environment variables

Usually the app detects the URL from your domain automatically. Set these only if links or assets resolve to the wrong host/path:

**Subfolder install** (site at `https://example.com/adobe/`):

In `.htaccess` at the site root (above the existing `RewriteEngine On` line):

```apache
SetEnv CW_BASE_PATH /adobe
```

**Force a specific public URL** (e.g. behind a proxy or wrong scheme):

```apache
SetEnv CW_BASE_URL https://yourdomain.com/adobe
```

Use the path **without** a trailing slash. Omit `CW_BASE_PATH` when the site runs at the domain root (`public_html` only).

### 5. File permissions

Typical cPanel defaults are fine:

- Folders: `755`
- Files: `644`

Ensure `index.php` and `router.php` are readable by the web server.

## Verify the install

1. Homepage loads: `/`
2. An inner page loads, e.g. `/acrobat/generative-ai-pdf/`
3. Styles and images load (no broken layout; check the browser Network tab for 404s on `/libs/`, `/acrobat/`, or `/assets/`)

If you see **404** on every route except the homepage, mod_rewrite is off or `.htaccess` is ignored — contact your host or enable **AllowOverride** for that directory.

If assets point at `localhost`, set `CW_BASE_URL` as in step 4.

## Notes

- Internal links are rewritten for your install path; external Adobe commerce/sign-in URLs may still point to Adobe’s live site.
- Analytics and some third-party scripts are disabled or stubbed for offline use.
