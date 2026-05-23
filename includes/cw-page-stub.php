<?php
declare(strict_types=1);

// True when a pages route file only echoes the homepage shell (not a real mirror).
function cw_is_homepage_stub_page(string $filePath): bool
{
    if (!is_file($filePath)) {
        return false;
    }

    $head = @file_get_contents($filePath, false, null, 0, 4096);
    if ($head === false) {
        return false;
    }

    return str_contains($head, 'cw_load_home_template');
}
