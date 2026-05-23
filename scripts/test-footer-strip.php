<?php
declare(strict_types=1);

require dirname(__DIR__) . '/base-url.php';

function load_page_body(string $path): string
{
    $raw = (string) file_get_contents($path);
    return preg_replace('/^<\?php.*?\?>\s*/s', '', $raw, 1) ?? $raw;
}

$_SERVER['REQUEST_URI'] = '/creativecloud/business/';
$inner = cw_rewrite_asset_urls_in_html(load_page_body(dirname(__DIR__) . '/pages/creativecloud/business/index.php'));
echo 'inner footer: ' . preg_match_all('/<footer\b/i', $inner) . PHP_EOL;
echo 'inner meta off: ' . (preg_match('/name=["\']footer["\']\s+content=["\']off/i', $inner) ? 'yes' : 'no') . PHP_EOL;

$_SERVER['REQUEST_URI'] = '/';
$home = cw_rewrite_asset_urls_in_html(load_page_body(dirname(__DIR__) . '/index.php'));
echo 'home footer: ' . preg_match_all('/<footer\b/i', $home) . PHP_EOL;
echo 'home cw-homepage: ' . (str_contains($home, 'cw-homepage') ? 'yes' : 'no') . PHP_EOL;
