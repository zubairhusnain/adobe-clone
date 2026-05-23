<?php
declare(strict_types=1);

/** Homepage HTML from root index.php (PHP-only mirror, samsung-clon style). */
function cw_load_home_template(): string
{
    static $cache = null;
    if ($cache !== null) {
        return $cache;
    }

    $path = dirname(__DIR__) . '/index.php';
    if (!is_file($path)) {
        return '';
    }

    $raw = file_get_contents($path);
    if ($raw === false) {
        return '';
    }

    $cache = preg_replace('/^<\?php.*?\?>\s*/s', '', $raw, 1) ?? $raw;
    return $cache;
}
