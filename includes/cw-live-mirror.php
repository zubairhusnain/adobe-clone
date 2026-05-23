<?php
declare(strict_types=1);

/** Download a www.adobe.com page and save under pages/<route>/index.php (raw HTML + PHP wrapper). */
function cw_route_to_adobe_url(string $route): string
{
    $route = '/' . trim($route, '/') . '/';
    if ($route === '//') {
        return 'https://www.adobe.com/';
    }

    $path = rtrim($route, '/');
    if (!str_ends_with(strtolower($path), '.html')) {
        $path .= '.html';
    }

    return 'https://www.adobe.com' . $path;
}

function cw_php_header_for_page_file(string $targetFile): string
{
    $root = dirname(__DIR__);
    $dir = dirname(realpath($targetFile) ?: $targetFile);

    if ($dir === $root) {
        return "<?php\nrequire_once __DIR__ . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n";
    }

    $rel = substr($dir, strlen($root) + 1);
    $depth = $rel === '' ? 1 : substr_count($rel, DIRECTORY_SEPARATOR) + 1;

    return "<?php\nrequire_once dirname(__DIR__, {$depth}) . '/base-url.php';\ncw_start_asset_url_rewrite();\n?>\n";
}

function cw_page_needs_mirror(string $targetFile): bool
{
    if (!is_file($targetFile)) {
        return true;
    }

    // Gatsby Learn shells are small but complete; never re-fetch via adobe.com/*.html.
    if (str_contains(str_replace('\\', '/', $targetFile), '/pages/learn/')) {
        return false;
    }

    if (function_exists('cw_is_homepage_stub_page') && cw_is_homepage_stub_page($targetFile)) {
        return true;
    }

    return filesize($targetFile) < 8000;
}

function cw_fetch_adobe_page_html(string $route): ?string
{
    if (!function_exists('curl_init')) {
        return null;
    }

    $url = cw_route_to_adobe_url($route);
    $attempts = [
        [
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ],
        [
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
        ],
    ];

    foreach ($attempts as $extra) {
        $ch = curl_init($url);
        $opts = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_TIMEOUT => 45,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
            CURLOPT_HTTPHEADER => [
                'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
                'Accept-Language: en-US,en;q=0.9',
                'Referer: https://www.adobe.com/',
                'Cache-Control: no-cache',
            ],
            CURLOPT_ENCODING => '',
            CURLOPT_SSL_VERIFYPEER => true,
        ];
        foreach ($extra as $k => $v) {
            $opts[$k] = $v;
        }
        curl_setopt_array($ch, $opts);

        $body = curl_exec($ch);
        $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);
        curl_close($ch);

        if (!is_string($body) || $code < 200 || $code >= 300 || strlen($body) < 1500) {
            if ($err !== '') {
                error_log('cw_fetch_adobe_page_html: ' . $url . ' HTTP ' . $code . ' ' . $err);
            }
            continue;
        }

        if (stripos($body, '<html') === false) {
            continue;
        }

        return $body;
    }

    return cw_fetch_wayback_html($url);
}

function cw_fetch_wayback_html(string $adobeUrl): ?string
{
    foreach (['2024id_', '2023id_', '2022id_'] as $stamp) {
        $wayback = 'https://web.archive.org/web/' . $stamp . $adobeUrl;
        $body = cw_curl_download($wayback, 90);
        if ($body !== null) {
            $body = cw_clean_wayback_html($body);
            if (strlen($body) > 1500 && !preg_match('/<title>\s*Wayback Machine\s*<\/title>/i', $body)) {
                return $body;
            }
        }
    }

    return null;
}

function cw_curl_download(string $url, int $timeout = 60): ?string
{
    if (!function_exists('curl_init')) {
        return null;
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 12,
        CURLOPT_TIMEOUT => $timeout,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36',
        CURLOPT_ENCODING => '',
        CURLOPT_HTTPHEADER => ['Accept: text/html,application/xhtml+xml'],
    ]);
    $body = curl_exec($ch);
    $code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if (!is_string($body) || $code < 200 || $code >= 300 || strlen($body) < 500) {
        $body = cw_shell_curl_download($url, $timeout);
    }

    return is_string($body) && strlen($body) >= 500 ? $body : null;
}

function cw_shell_curl_download(string $url, int $timeout = 90): ?string
{
    $cmd = sprintf(
        'curl -fsSL --compressed --http1.1 --max-time %d -A %s %s 2>/dev/null',
        $timeout,
        escapeshellarg('Mozilla/5.0 (compatible; adobe-clon-local/1.0)'),
        escapeshellarg($url)
    );
    $out = shell_exec($cmd);
    return is_string($out) && strlen($out) >= 500 ? $out : null;
}

function cw_clean_wayback_html(string $html): string
{
    $html = preg_replace('~<!-- BEGIN WAYBACK.*?END WAYBACK -->~is', '', $html) ?? $html;
    $html = preg_replace('~<script[^>]*web\.archive\.org[^>]*>.*?</script>~is', '', $html) ?? $html;
    $html = preg_replace('~<link[^>]*web\.archive\.org[^>]*>~i', '', $html) ?? $html;
    return $html;
}

/** Download, save locally, or stream live HTML for a route. */
function cw_resolve_adobe_page(string $route, string $targetFile): string
{
    if (!cw_page_needs_mirror($targetFile)) {
        return 'disk';
    }

    if (cw_mirror_route_to_disk($route, $targetFile) && !cw_page_needs_mirror($targetFile)) {
        return 'saved';
    }

    $html = cw_fetch_adobe_page_html($route);
    if ($html !== null) {
        return 'live';
    }

    return 'fail';
}

function cw_mirror_route_to_disk(string $route, string $targetFile): bool
{
    $html = cw_fetch_adobe_page_html($route);
    if ($html === null) {
        return false;
    }

    $dir = dirname($targetFile);
    if (!is_dir($dir) && !@mkdir($dir, 0775, true)) {
        return false;
    }

    $payload = cw_php_header_for_page_file($targetFile) . $html;
    if (@file_put_contents($targetFile, $payload) === false) {
        return false;
    }

    return true;
}
