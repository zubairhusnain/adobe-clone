<?php
declare(strict_types=1);

function cw_remote_asset_sources(string $path): array
{
    if (
        str_starts_with($path, '/upp/') ||
        str_starts_with($path, '/upp-shared/') ||
        str_starts_with($path, '/libs/') ||
        str_starts_with($path, '/marketingtech/') ||
        str_starts_with($path, '/content/') ||
        str_starts_with($path, '/homepage/') ||
        str_starts_with($path, '/federal/') ||
        str_starts_with($path, '/etc.clientlibs/') ||
        str_starts_with($path, '/acrobat/') ||
        str_starts_with($path, '/creativecloud/') ||
        str_starts_with($path, '/cc-shared/') ||
        str_starts_with($path, '/akam/')
    ) {
        return ['https://www.adobe.com'];
    }
    return [];
}

function cw_remote_asset_fetch(string $path, string $localFs): bool
{
    if (str_contains($path, '..')) {
        return false;
    }

    foreach (cw_remote_asset_sources($path) as $origin) {
        $remoteUrl = rtrim($origin, '/') . $path;
        $tmp = $localFs . '.tmp';
        $dir = dirname($localFs);
        if (!is_dir($dir) && !@mkdir($dir, 0775, true)) {
            continue;
        }

        $fh = @fopen($tmp, 'wb');
        if ($fh === false) {
            continue;
        }

        $ch = curl_init($remoteUrl);
        curl_setopt($ch, CURLOPT_FILE, $fh);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        if (defined('CURLOPT_USER_AGENT')) {
            curl_setopt($ch, CURLOPT_USER_AGENT, 'Mozilla/5.0 (compatible; adobe-clon-local/1.0)');
        }
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        $ok = curl_exec($ch);
        $httpCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        fclose($fh);

        if ($ok && $httpCode >= 200 && $httpCode < 300 && is_file($tmp) && filesize($tmp) > 0) {
            rename($tmp, $localFs);
            return true;
        }

        if (is_file($tmp)) {
            unlink($tmp);
        }
    }

    return false;
}

function cw_remote_asset_serve(string $path): bool
{
    if (str_contains($path, '..')) {
        return false;
    }

    $localFs = dirname(__DIR__) . $path;
    if (is_file($localFs) && filesize($localFs) > 0) {
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        if (in_array($ext, ['js', 'mjs'], true)) {
            header('Content-Type: application/javascript; charset=utf-8');
            header('Cache-Control: public, max-age=86400');
            readfile($localFs);
            return true;
        }
        if ($ext === 'css') {
            header('Content-Type: text/css; charset=utf-8');
            header('Cache-Control: public, max-age=86400');
            readfile($localFs);
            return true;
        }
        if ($ext === 'json') {
            header('Content-Type: application/json; charset=utf-8');
            header('Cache-Control: public, max-age=86400');
            readfile($localFs);
            return true;
        }
        $contentType = 'application/octet-stream';
        if (function_exists('mime_content_type')) {
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
        header('Cache-Control: public, max-age=86400');
        echo $body;
        return true;
    }

    // Never block page load on live Adobe fetches (fragments/MEP JSON preloads, etc.).
    if (defined('CW_ALLOW_REMOTE_ASSET_FETCH') && CW_ALLOW_REMOTE_ASSET_FETCH
        && function_exists('curl_init') && cw_remote_asset_fetch($path, $localFs) && is_file($localFs)) {
        return cw_remote_asset_serve($path);
    }

    return false;
}
