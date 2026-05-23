#!/usr/bin/env php
<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$base = getenv('CW_BASE_URL') ?: 'http://localhost/clon-adobe-website';
$routes = $argv[1] !== '' ? [($argv[1][0] === '/' ? $argv[1] : '/' . $argv[1])] : [];

if ($routes === []) {
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root . '/pages'));
    foreach ($it as $f) {
        if ($f->isFile() && $f->getFilename() === 'index.php') {
            $rel = str_replace($root . '/pages', '', $f->getPathname());
            $rel = str_replace('/index.php', '', $rel);
            $routes[] = ($rel === '' ? '/' : $rel . '/');
        }
    }
    array_unshift($routes, '/');
}

$ext = '~\.(?:css|js|mjs|json|svg|png|jpe?g|gif|webp|avif|ico|woff2?|ttf|otf|eot|webmanifest)$~i';
$report = [];

foreach ($routes as $route) {
    $url = $base . ($route === '/' ? '/' : $route);
    $html = @file_get_contents($url);
    if ($html === false || strlen($html) < 500) {
        $report[$route] = ['fetch_failed'];
        continue;
    }
    if (!preg_match_all('~(?:href|src)=["\']([^"\']+)["\']~i', $html, $m)) {
        continue;
    }
    $bad = [];
    $seen = [];
    foreach ($m[1] as $ref) {
        $ref = html_entity_decode($ref, ENT_QUOTES);
        if (str_starts_with($ref, 'data:') || str_starts_with($ref, '#')) {
            continue;
        }
        if (str_starts_with($ref, '/')) {
            $assetUrl = 'http://localhost/clon-adobe-website' . strtok($ref, '?');
        } elseif (str_contains($ref, $base)) {
            $assetUrl = strtok($ref, '?');
        } else {
            continue;
        }
        $path = parse_url($assetUrl, PHP_URL_PATH);
        if (!is_string($path) || !preg_match($ext, $path)) {
            continue;
        }
        if (isset($seen[$path])) {
            continue;
        }
        $seen[$path] = true;
        $local = $root . preg_replace('~^/clon-adobe-website~', '', $path);
        if (is_file($local) && filesize($local) > 40) {
            continue;
        }
        $ctx = stream_context_create(['http' => ['method' => 'HEAD', 'timeout' => 8, 'ignore_errors' => true]]);
        $hdrs = @get_headers($assetUrl, false, $ctx);
        $code = 0;
        if (is_array($hdrs) && isset($hdrs[0]) && preg_match('~\s(\d{3})\s~', $hdrs[0], $mm)) {
            $code = (int) $mm[1];
        }
        if ($code === 404 || !is_file($local) || filesize($local) < 40) {
            $bad[] = $path;
        }
    }
    if ($bad !== []) {
        $report[$route] = $bad;
    }
}

file_put_contents($root . '/scripts/route-404-report.json', json_encode($report, JSON_PRETTY_PRINT));
foreach ($report as $route => $paths) {
    echo "FAIL $route (" . count($paths) . ")\n";
    foreach (array_slice($paths, 0, 6) as $p) {
        echo "  $p\n";
    }
    if (count($paths) > 6) {
        echo '  ... +' . (count($paths) - 6) . "\n";
    }
}
echo "\n" . count($report) . " routes with missing/404 assets\n";
