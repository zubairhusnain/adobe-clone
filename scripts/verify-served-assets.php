#!/usr/bin/env php
<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$base = getenv('CW_BASE_URL') ?: 'http://localhost/clon-adobe-website';

$routes = ['/'];
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root . '/pages'));
foreach ($it as $f) {
    if ($f->isFile() && $f->getFilename() === 'index.php') {
        $rel = str_replace($root . '/pages', '', $f->getPathname());
        $rel = str_replace('/index.php', '', $rel);
        $routes[] = ($rel === '' ? '/' : $rel . '/');
    }
}

$assetExt = '~\.(?:css|js|mjs|json|svg|png|jpe?g|gif|webp|avif|ico|woff2?|ttf|otf|eot|webmanifest|mp4|webm)$~i';
$missing = [];
$checked = [];

foreach ($routes as $route) {
    $url = $base . ($route === '/' ? '/' : $route);
    $html = @file_get_contents($url);
    if ($html === false || strlen($html) < 1000) {
        echo "SKIP $route (fetch failed)\n";
        continue;
    }
    if (!preg_match_all('~(?:href|src)=["\']([^"\']+)["\']~i', $html, $m)) {
        continue;
    }
    foreach ($m[1] as $ref) {
        $ref = html_entity_decode($ref, ENT_QUOTES);
        if (!str_contains($ref, $base)) {
            continue;
        }
        $path = parse_url($ref, PHP_URL_PATH);
        if (!is_string($path) || $path === '') {
            continue;
        }
        $path = preg_replace('~^/clon-adobe-website~', '', $path) ?? $path;
        $path = strtok($path, '?') ?: $path;
        if (!preg_match($assetExt, $path)) {
            continue;
        }
        if (isset($checked[$path])) {
            continue;
        }
        $checked[$path] = true;
        $local = $root . $path;
        $size = is_file($local) ? filesize($local) : 0;
        $isStubCss = str_ends_with($path, '.css') && $size > 0 && $size < 80;
        if (!is_file($local) || ($size < 40 && !$isStubCss) || ($isStubCss && $size < 20)) {
            $missing[$path][] = $route;
        }
    }
}

ksort($missing);
echo count($routes) . " routes, " . count($checked) . " assets checked, " . count($missing) . " missing on disk\n\n";
$i = 0;
foreach ($missing as $path => $refs) {
    echo $path . "\n";
    if (++$i >= 60) {
        echo '... ' . (count($missing) - 60) . " more\n";
        break;
    }
}
file_put_contents($root . '/scripts/missing-served-assets.json', json_encode($missing, JSON_PRETTY_PRINT));
