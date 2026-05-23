<?php
declare(strict_types=1);

function cw_resolve_local_asset_path(string $webPath): ?string
{
    if ($webPath === '' || str_contains($webPath, '..')) {
        return null;
    }

    if (!str_starts_with($webPath, '/')) {
        $webPath = '/' . $webPath;
    }

    $root = realpath(dirname(__DIR__));
    if ($root === false) {
        return null;
    }

    $candidates = [$root . $webPath];

    if (str_starts_with($webPath, '/assets/www.adobe.com/')) {
        $candidates[] = $root . substr($webPath, strlen('/assets/www.adobe.com'));
    }

    $baseName = basename($webPath);
    if ($baseName !== '' && $baseName !== '.' && str_starts_with($baseName, 'media_')) {
        $candidates[] = $root . '/assets/images/' . $baseName;
        $candidates[] = $root . '/sign/' . $baseName;
    }

    foreach ($candidates as $candidate) {
        if (is_file($candidate) && filesize($candidate) > 0) {
            return $candidate;
        }
    }

    return null;
}

function cw_resolve_public_asset_path(string $webPath): ?string
{
    $local = cw_resolve_local_asset_path($webPath);
    if ($local === null) {
        return null;
    }

    $root = realpath(dirname(__DIR__));
    if ($root === false) {
        return null;
    }

    $rel = substr($local, strlen($root));
    return $rel !== '' ? $rel : null;
}

function cw_serve_resolved_asset(string $webPath): bool
{
    $local = cw_resolve_local_asset_path($webPath);
    if ($local === null) {
        return false;
    }

    $contentType = 'application/octet-stream';
    if (function_exists('mime_content_type')) {
        $mt = mime_content_type($local);
        if (is_string($mt) && $mt !== '') {
            $contentType = $mt;
        }
    }

    header('Content-Type: ' . $contentType);
    header('Cache-Control: public, max-age=86400');
    readfile($local);
    return true;
}
