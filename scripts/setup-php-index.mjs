/**
 * index.php is the canonical homepage (samsung-clon style). No index.html needed.
 */
import fs from 'node:fs/promises'
import path from 'node:path'

const root = path.resolve(path.dirname(new URL(import.meta.url).pathname), '..')
const phpPath = path.join(root, 'index.php')

if (await fs.stat(phpPath).catch(() => null)) {
  console.log('OK: index.php is the site entry point')
} else {
  console.error('Missing index.php')
  process.exit(1)
}
