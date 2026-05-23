#!/usr/bin/env php
<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$prefixes = ['libs/', 'upp/', 'homepage/', 'federal/', 'cc-shared/', 'marketingtech/', 'acrobat/', 'creativecloud/', 'assets/', 'learn/', 'etc.clientlibs/', 'content/'];

$pat = '~(?:href|src|content|data-src|data-desktop-src)=["\']([^"\']+)["\']~i';
$pat2 = '~url\(["\']?([^"\')\s]+)["\']?\)~i';
$pat3 = '~https?://(?:www\.)?adobe\.com/((?:' . implode('|', array_map('preg_quote', $prefixes)) . ')[^"\'\s<>]+)~i';

$files = [$root . '/index.php'];
foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root . '/pages')) as $f) {
    if ($f->isFile() && $f->getFilename() === 'index.php') {
        $files[] = $f->getPathname();
    }
}

$missing = [];
$remote = [];
$seen = [];

foreach ($files as $file) {
    $html = (string) file_get_contents($file);
    $html = preg_replace('/^<\?php.*?\?>\s*/s', '', $html) ?? $html;
    foreach ([$pat, $pat2] as $p) {
        if (!preg_match_all($p, $html, $m)) {
            continue;
        }
        foreach ($m[1] as $u) {
            collect_asset($u, $root, $prefixes, $missing, $remote, $seen);
        }
    }
    if (preg_match_all($pat3, $html, $m)) {
        foreach ($m[1] as $p) {
            $remote['adobe.com/' . strtok($p, '?#')] = true;
        }
    }
}

ksort($missing);
ksort($remote);
echo 'Pages scanned: ' . count($files) . "\n";
echo 'Missing local assets: ' . count($missing) . "\n";
echo 'Still pointing at adobe.com paths: ' . count($remote) . "\n\n";
echo "--- Missing (first 40) ---\n";
$i = 0;
foreach ($missing as $path => $refs) {
    echo $path . ' (' . count($refs) . " pages)\n";
    if (++$i >= 40) {
        break;
    }
}
if (count($missing) > 40) {
    echo '... and ' . (count($missing) - 40) . " more\n";
}
file_put_contents($root . '/scripts/missing-assets.json', json_encode(['missing' => $missing, 'remote' => array_keys($remote)], JSON_PRETTY_PRINT));

function collect_asset(string $u, string $root, array $prefixes, array &$missing, array &$remote, array &$seen): void
{
    $u = html_entity_decode(trim($u), ENT_QUOTES);
    if ($u === '' || str_starts_with($u, '#') || str_starts_with($u, 'data:') || str_starts_with($u, 'javascript:')) {
        return;
    }
    if (preg_match('~^https?://(?!www\.adobe\.com|creativecloud\.adobe\.com)~i', $u)) {
        return;
    }
    if (preg_match('~^https?://(?:www\.)?adobe\.com/(.+)$~i', $u, $m)) {
        $u = '/' . strtok($m[1], '?#');
        $remote[$u] = true;
    }
    if (str_contains($u, 'localhost')) {
        $u = parse_url($u, PHP_URL_PATH) ?: $u;
    }
    if (preg_match('~^/clon-adobe-website/(.+)$~', $u, $m)) {
        $u = '/' . $m[1];
    }
    if (!str_starts_with($u, '/')) {
        return;
    }
    $path = strtok($u, '?#') ?: $u;
    $path = rtrim($path, '/');
    if ($path === '') {
        return;
    }
    $ok = false;
    foreach ($prefixes as $pre) {
        if (str_starts_with(ltrim($path, '/'), $pre)) {
            $ok = true;
            break;
        }
    }
    if (!$ok) {
        return;
    }
    if (isset($seen[$path])) {
        return;
    }
    $seen[$path] = true;
    $local = $root . $path;
    if (is_file($local) && filesize($local) > 30) {
        return;
    }
    if (str_starts_with($path, '/assets/www.adobe.com/')) {
        $alt = $root . substr($path, strlen('/assets/www.adobe.com'));
        if (is_file($alt) && filesize($alt) > 30) {
            return;
        }
    }
    $missing[$path][] = 1;
}

function is_asset_path(string $path): bool
{
    return (bool) preg_match('~\.(css|js|mjs|json|svg|png|jpe?g|gif|webp|avif|ico|woff2?|ttf|otf|eot|webmanifest|map|mp4|webm|pdf)$~i', $path);
}
