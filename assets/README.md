# Local assets

Remote JS/CSS from `index.html` are mirrored under `assets/<hostname>/...` to preserve CDN path structure.

## Layout

```
assets/
  www.adobe.com/          Adobe UPP, libs, marketingtech
  prod.adobeccstatic.com/ Universal nav bundles
  use.typekit.net/        Adobe fonts CSS
  client.messaging.adobe.com/
  …                       Third-party trackers (optional for offline clone)
```

## Refresh missing files

Some Adobe files are served without the `/upp/` URL prefix. The manifest lists fetch URLs vs local paths:

```bash
bash scripts/download-missing.sh
```

Or re-run the full pipeline:

```bash
python3 scripts/localize-assets.py
python3 scripts/apply-local-paths.py
bash scripts/download-missing.sh
```

## Notes

- Marketing/analytics scripts (Google Ads, gtag query URLs) are session-specific and were not mirrored.
- `scripts.js` still loads Milo modules from `/libs` at runtime; those paths expect `www.adobe.com` or local proxy configuration for full offline behavior.
