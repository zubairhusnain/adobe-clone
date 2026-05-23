<?php
declare(strict_types=1);

@ini_set('memory_limit', '256M');
@ini_set('max_execution_time', '120');

require_once __DIR__ . '/includes/cw-php-polyfill.php';
require_once __DIR__ . '/includes/cw-offline-strip.php';
require_once __DIR__ . '/base-url.php';
require_once __DIR__ . '/includes/cw-remote-asset.php';
require_once __DIR__ . '/includes/cw-asset-resolve.php';
require_once __DIR__ . '/includes/cw-page-stub.php';
require_once __DIR__ . '/includes/cw-live-mirror.php';

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($uri, PHP_URL_PATH);
if (!is_string($path) || $path === '') {
    $path = '/';
}

$path = cw_normalize_request_path($path);

if (str_starts_with($path, '/.milo/')) {
    $localFs = __DIR__ . $path;
    if (is_file($localFs) && filesize($localFs) > 0) {
        header('Content-Type: application/json; charset=utf-8');
        header('Cache-Control: public, max-age=3600');
        readfile($localFs);
        exit;
    }
    header('Content-Type: application/json; charset=utf-8');
    echo '{}';
    exit;
}

$query = parse_url($uri, PHP_URL_QUERY);
if (!is_string($query)) {
    $query = '';
}

if (preg_match('~^/(.+)\.html$~', $path, $m) && !preg_match('~\.plain\.html$~i', $path)) {
    $htmlRoute = '/' . $m[1] . '/';
    $phpPage = __DIR__ . '/pages/' . $m[1] . '/index.php';
    if (is_file($phpPage)) {
        header('Location: ' . cw_install_base_path() . $htmlRoute, true, 301);
        exit;
    }
    $path = $htmlRoute;
}

$rootReal = realpath(__DIR__);
$pagesReal = realpath(__DIR__ . '/pages');

if (str_starts_with($path, '/front/b2c/product/finder/')) {
    header('Content-Type: application/json; charset=utf-8');
    header('Cache-Control: no-store');
    echo json_encode([
        'response' => [
            'statusCode' => '200',
            'statusMessage' => 'OK',
            'resultData' => [
                'productList' => [],
                'filterList' => [],
                'totalCount' => 0,
            ],
        ],
    ]);
    exit;
}

if (preg_match('~^/\d+/pageInfo$~', $path)) {
    header('Content-Type: application/json; charset=utf-8');
    header('Cache-Control: no-store');
    echo '{}';
    exit;
}

if (str_starts_with($path, '/v6/')) {
    if (str_contains($path, '..')) {
        http_response_code(400);
        exit;
    }
    if (!function_exists('curl_init')) {
        http_response_code(503);
        exit;
    }
    $suffix = $query !== '' ? ('?' . $query) : '';
    $remoteUrl = 'https://searchapi.samsung.com' . $path . $suffix;
    $httpCode = 0;
    $sentType = false;
    $contentType = '';
    $ch = curl_init($remoteUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_USERAGENT, 'copy-website-local');
    curl_setopt($ch, CURLOPT_FAILONERROR, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt(
        $ch,
        CURLOPT_HEADERFUNCTION,
        static function ($ch, string $headerLine) use (&$httpCode, &$contentType, &$sentType): int {
            $trim = trim($headerLine);
            if (preg_match('~^HTTP/\\S+\\s+(\\d+)~i', $trim, $mm)) {
                $httpCode = (int)$mm[1];
            } elseif (stripos($trim, 'content-type:') === 0) {
                $contentType = trim(substr($trim, strlen('content-type:')));
                if (!$sentType && $contentType !== '' && $httpCode >= 200 && $httpCode < 300) {
                    header('Content-Type: ' . $contentType);
                    $sentType = true;
                }
            }
            return strlen($headerLine);
        }
    );
    curl_setopt(
        $ch,
        CURLOPT_WRITEFUNCTION,
        static function ($ch, string $data) use (&$httpCode): int {
            if ($httpCode >= 200 && $httpCode < 300) {
                echo $data;
            }
            return strlen($data);
        }
    );
    $ok = curl_exec($ch);
    if ($ok === false) {
        error_log("router.php: curl error: " . curl_error($ch));
    }
    if ($httpCode === 0) {
        $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    }
    error_log("router.php: ok=$ok, httpCode=$httpCode");
    if ($contentType === '') {
        $contentType = (string)curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        if (!$sentType && $contentType !== '' && $httpCode >= 200 && $httpCode < 300) {
            header('Content-Type: ' . $contentType);
            $sentType = true;
        }
    }
    curl_close($ch);
    if ($ok && $httpCode >= 200 && $httpCode < 300) {
        header('Cache-Control: no-store');
        exit;
    }
    http_response_code(404);
    exit;
}

if ($path === '/sw.js') {
    $sw = __DIR__ . '/sw.js';
    if (is_file($sw)) {
        header('Content-Type: application/javascript; charset=utf-8');
        header('Cache-Control: no-store');
        readfile($sw);
        exit;
    }
}

if (str_starts_with($path, '/aemapi/')) {
    $localFs = __DIR__ . $path;
    if (is_file($localFs)) {
        $contentType = 'application/json; charset=utf-8';
        if (function_exists('mime_content_type')) {
            $mt = mime_content_type($localFs);
            if (is_string($mt) && $mt !== '') {
                $contentType = $mt;
            }
        }
        header('Content-Type: ' . $contentType);
        header('Cache-Control: public, max-age=3600');
        readfile($localFs);
        exit;
    }
    http_response_code(404);
    exit;
}

if (str_starts_with($path, '/content/') && !is_file(__DIR__ . $path)) {
    if (str_contains($path, '..')) {
        http_response_code(400);
        exit;
    }

    if (cw_serve_resolved_asset($path)) {
        exit;
    }

    $suffix = $query !== '' ? ('?' . $query) : '';
    $origins = [
        'https://images.samsung.com',
        'https://www.samsung.com',
    ];
    foreach ($origins as $origin) {
        $remoteUrl = $origin . $path . $suffix;
        $ch = curl_init($remoteUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_TIMEOUT, 45);
        curl_setopt($ch, CURLOPT_USERAGENT, 'copy-website-local');
        $data = curl_exec($ch);
        $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $contentType = (string)curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
        curl_close($ch);
        if (is_string($data) && $data !== '' && $httpCode >= 200 && $httpCode < 300) {
            $dir = dirname($localFs);
            if (!is_dir($dir)) {
                @mkdir($dir, 0775, true);
            }
            if (is_dir($dir) && is_writable($dir)) {
                @file_put_contents($localFs, $data);
            }
            if ($contentType !== '') {
                header('Content-Type: ' . $contentType);
            }
            header('Cache-Control: no-store');
            echo $data;
            exit;
        }
    }
    http_response_code(404);
    exit;
}

if (str_starts_with($path, '/copy-website/')) {
    $path = substr($path, strlen('/copy-website'));
}

// Bare /media_*.png (browser without install prefix) → assets/images/
if (preg_match('~^/media_[A-Za-z0-9]+\.(?:png|jpe?g|webp|gif|svg)$~i', $path)) {
    if (cw_serve_resolved_asset('/assets/images/' . basename($path))) {
        exit;
    }
}

// Route-relative hero images, e.g. /express/.../media_*.png
if (preg_match('~^/.+/media_[A-Za-z0-9]+\.(?:png|jpe?g|webp|gif|svg)$~i', $path) && cw_serve_resolved_asset($path)) {
    exit;
}

if (str_starts_with($path, '/akam/13/')) {
    if (preg_match('~pixel_~i', $path)) {
        header('Content-Type: image/gif');
        header('Cache-Control: public, max-age=86400');
        header('Access-Control-Allow-Origin: *');
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
            http_response_code(204);
            exit;
        }
        echo base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7');
        exit;
    }
    $akamJs = __DIR__ . '/assets/js/36b240ab';
    if (is_file($akamJs) && filesize($akamJs) > 100) {
        header('Content-Type: application/javascript; charset=utf-8');
        header('Cache-Control: public, max-age=86400');
        readfile($akamJs);
        exit;
    }
    http_response_code(204);
    exit;
}

if (str_starts_with($path, '/assets/www.adobe.com/')) {
    $stripped = substr($path, strlen('/assets/www.adobe.com'));
    if ($stripped !== '' && $stripped !== '/') {
        $localFs = __DIR__ . $stripped;
        if (is_file($localFs) && filesize($localFs) > 0) {
            $contentType = 'application/octet-stream';
            if (function_exists('mime_content_type')) {
                $mt = mime_content_type($localFs);
                if (is_string($mt) && $mt !== '') {
                    $contentType = $mt;
                }
            }
            header('Content-Type: ' . $contentType);
            readfile($localFs);
            exit;
        }
        header('Location: ' . cw_install_base_path() . $stripped, true, 302);
        exit;
    }
}

if (
    str_starts_with($path, '/upp/') ||
    str_starts_with($path, '/upp-shared/') ||
    str_starts_with($path, '/acrobat/blocks/') ||
    str_starts_with($path, '/creativecloud/scripts/') ||
    str_starts_with($path, '/creativecloud/plans/scripts/') ||
    str_starts_with($path, '/acrobat/scripts/') ||
    str_starts_with($path, '/etc.clientlibs/') ||
    str_starts_with($path, '/.milo/') ||
    str_starts_with($path, '/libs/') ||
    str_starts_with($path, '/marketingtech/') ||
    str_starts_with($path, '/homepage/') ||
    str_starts_with($path, '/federal/') ||
    str_starts_with($path, '/etc.clientlibs/') ||
    str_starts_with($path, '/cc-shared/') ||
    str_starts_with($path, '/learn/static/') ||
    str_starts_with($path, '/acrobat/styles/') ||
    str_starts_with($path, '/acrobat/scripts/') ||
    str_starts_with($path, '/assets/')
) {
    if (preg_match('#/(?:libs|upp)/blocks/global-navigation/global-navigation\\.js$#', $path) === 1) {
        header('Content-Type: application/javascript; charset=utf-8');
        header('Cache-Control: no-store');
        header('X-CW-Gnav-Offline: 1');
        echo cw_gnav_offline_js_stub();
        exit;
    }
    if (cw_remote_asset_serve($path)) {
        exit;
    }

    $localFs = __DIR__ . $path;
    if (is_file($localFs) && filesize($localFs) > 0) {
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        if (in_array($ext, ['js', 'mjs'], true)) {
            header('Content-Type: application/javascript; charset=utf-8');
            header('Cache-Control: public, max-age=86400');
            readfile($localFs);
            exit;
        }
        $contentType = 'application/octet-stream';
        if ($ext === 'css') {
            $contentType = 'text/css; charset=utf-8';
        } elseif ($ext === 'json') {
            $contentType = 'application/json; charset=utf-8';
        } elseif (function_exists('mime_content_type')) {
            $mt = mime_content_type($localFs);
            if (is_string($mt) && $mt !== '' && !str_contains($mt, 'text/html')) {
                $contentType = $mt;
            }
        }
        $body = (string) file_get_contents($localFs);
        if (str_contains($path, 'gnav') && function_exists('cw_localize_learn_hrefs_in_html')) {
            $body = cw_localize_learn_hrefs_in_html($body);
        }
        header('Content-Type: ' . $contentType);
        echo $body;
        exit;
    }

    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    if ($ext === 'json') {
        header('Content-Type: application/json; charset=utf-8');
        header('Cache-Control: no-store');
        header('X-CW-Asset-Stub: 1');
        echo '{}';
        exit;
    }
    if (in_array($ext, ['css', 'js', 'mjs'], true)) {
        header('Content-Type: ' . ($ext === 'css' ? 'text/css; charset=utf-8' : 'application/javascript; charset=utf-8'));
        header('Cache-Control: no-store');
        header('X-CW-Asset-Stub: 1');
        echo $ext === 'css' ? '/* offline mirror stub */' : cw_router_js_stub($path);
        exit;
    }

    http_response_code(404);
    exit;
}

if (str_starts_with($path, '/is/image/') || str_starts_with($path, '/is/content/')) {
    if (str_contains($path, '..')) {
        http_response_code(400);
        exit;
    }

    $localFs = __DIR__ . $path;
    $localDir = dirname($localFs);
    $canCache = true;
    if (is_dir($localDir)) {
        $canCache = is_writable($localDir);
    } else {
        $canCache = @mkdir($localDir, 0775, true) && is_writable($localDir);
    }

    $suffix = $query !== '' ? ('?' . $query) : '';
    $sources = [
        'https://stg-images.samsung.com',
        'https://images.samsung.com',
    ];

    $downloaded = false;
    $contentType = '';

    foreach ($sources as $origin) {
        $remoteUrl = $origin . $path . $suffix;

        if (function_exists('curl_init')) {
            if ($canCache) {
                $tmp = $localFs . '.tmp';
                $fh = fopen($tmp, 'wb');
                if ($fh === false) {
                    $canCache = false;
                } else {
                    $ch = curl_init($remoteUrl);
                    curl_setopt($ch, CURLOPT_FILE, $fh);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
                    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
                    curl_setopt($ch, CURLOPT_USERAGENT, 'copy-website-local');
                    curl_setopt($ch, CURLOPT_FAILONERROR, false);
                    curl_setopt($ch, CURLOPT_HEADER, false);

                    $ok = curl_exec($ch);
                    $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
                    $ct = (string)curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
                    curl_close($ch);
                    fclose($fh);

                    if ($ok && $httpCode >= 200 && $httpCode < 300 && is_file($tmp) && filesize($tmp) > 0) {
                        rename($tmp, $localFs);
                        $downloaded = true;
                        $contentType = $ct;
                        break;
                    }

                    if (is_file($tmp)) {
                        unlink($tmp);
                    }
                }
            }

            $httpCode = 0;
            $sentType = false;
            $ch = curl_init($remoteUrl);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_USERAGENT, 'copy-website-local');
            curl_setopt($ch, CURLOPT_FAILONERROR, false);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt(
                $ch,
                CURLOPT_HEADERFUNCTION,
                static function ($ch, string $headerLine) use (&$httpCode, &$contentType, &$sentType): int {
                    $trim = trim($headerLine);
                    if (preg_match('~^HTTP/\\S+\\s+(\\d+)~i', $trim, $mm)) {
                        $httpCode = (int)$mm[1];
                    } elseif (stripos($trim, 'content-type:') === 0) {
                        $contentType = trim(substr($trim, strlen('content-type:')));
                        if (!$sentType && $contentType !== '' && $httpCode >= 200 && $httpCode < 300) {
                            header('Content-Type: ' . $contentType);
                            $sentType = true;
                        }
                    }
                    return strlen($headerLine);
                }
            );
            curl_setopt(
                $ch,
                CURLOPT_WRITEFUNCTION,
                static function ($ch, string $data) use (&$httpCode): int {
                    if ($httpCode >= 200 && $httpCode < 300) {
                        echo $data;
                    }
                    return strlen($data);
                }
            );

            $ok = curl_exec($ch);
            if ($httpCode === 0) {
                $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
            }
            if ($contentType === '') {
                $contentType = (string)curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
                if (!$sentType && $contentType !== '' && $httpCode >= 200 && $httpCode < 300) {
                    header('Content-Type: ' . $contentType);
                    $sentType = true;
                }
            }
            curl_close($ch);

            if ($ok && $httpCode >= 200 && $httpCode < 300) {
                header('Cache-Control: no-store');
                exit;
            }
        } else {
            $context = stream_context_create([
                'http' => [
                    'method' => 'GET',
                    'timeout' => 30,
                    'header' => "User-Agent: copy-website-local\r\n",
                ],
            ]);
            $data = @file_get_contents($remoteUrl, false, $context);
            if (is_string($data) && $data !== '') {
                if ($canCache) {
                    file_put_contents($localFs, $data);
                    $downloaded = true;
                } else {
                    if (isset($http_response_header) && is_array($http_response_header)) {
                        foreach ($http_response_header as $h) {
                            if (stripos($h, 'content-type:') === 0) {
                                $contentType = trim(substr($h, strlen('content-type:')));
                                break;
                            }
                        }
                    }
                    if ($contentType !== '') {
                        header('Content-Type: ' . $contentType);
                    }
                    header('Cache-Control: no-store');
                    echo $data;
                    exit;
                }
                if (isset($http_response_header) && is_array($http_response_header)) {
                    foreach ($http_response_header as $h) {
                        if (stripos($h, 'content-type:') === 0) {
                            $contentType = trim(substr($h, strlen('content-type:')));
                            break;
                        }
                    }
                }
                break;
            }
        }
    }

    if (!$downloaded || !is_file($localFs)) {
        http_response_code(404);
        exit;
    }

    if ($contentType === '' && function_exists('mime_content_type')) {
        $mt = mime_content_type($localFs);
        if (is_string($mt)) {
            $contentType = $mt;
        }
    }

    if ($contentType !== '') {
        header('Content-Type: ' . $contentType);
    }
    header('Cache-Control: public, max-age=31536000');
    readfile($localFs);
    exit;
}

if (is_string($pagesReal) && str_starts_with($path, '/pages/') && str_ends_with($path, '.php')) {
    $candidate = realpath(__DIR__ . $path);
    if (is_string($candidate) && str_starts_with($candidate, $pagesReal . DIRECTORY_SEPARATOR) && is_file($candidate)) {
        cw_start_asset_url_rewrite();
        include $candidate;
        exit;
    }
}

if (str_ends_with($path, '.php') && !str_contains($path, '/pages/')) {
    $candidate = realpath(__DIR__ . $path);
    if (is_string($rootReal) && is_string($candidate) && str_starts_with($candidate, $rootReal . DIRECTORY_SEPARATOR) && is_file($candidate)) {
        cw_start_asset_url_rewrite();
        include $candidate;
        exit;
    }
}

// Fix asset URLs broken by trailing-slash rewrite: /file.png/?query → /file.png?query
if (preg_match('~^(/[^?]+)/(\?[^#]*)(#.*)?$~', $path, $mq)
    && preg_match('~\.(?:png|jpe?g|webp|gif|svg|ico|webmanifest|css|js|json|woff2?)(?:$|/)~i', $mq[1])) {
    $path = $mq[1] . $mq[2] . ($mq[3] ?? '');
}

$route = trim($path, '/');

if ($route === '') {
    $target = __DIR__ . '/index.php';
} else {
    $target = __DIR__ . '/pages/' . $route . '/index.php';
}

if (!is_file($target)) {
    if ($route !== 'no-page') {
        $from = $path;
        if ($from === '') {
            $from = '/';
        }
        header('Location: ' . CW_BASE_URL . '/no-page/?from=' . rawurlencode($from), true, 302);
        exit;
    }
    $target = __DIR__ . '/pages/no-page/index.php';
}

cw_start_asset_url_rewrite();
include $target;
