<?php
declare(strict_types=1);

$root = dirname(__DIR__);
$skipDirs = ['assets/remote', '.history', 'node_modules', 'samsung-clon', 'scripts'];
$urls = [];

function extractUrls(string $html, array &$urls): void
{
    if (preg_match_all('/\b(?:href|src|action|content)=(["\'])(https?:\/\/[^"\'\s>]+)\1/i', $html, $m)) {
        foreach ($m[2] as $url) {
            $url = html_entity_decode($url, ENT_QUOTES | ENT_HTML5);
            if (stripos($url, 'localhost') !== false) {
                continue;
            }
            $urls[$url] = true;
        }
    }

    if (preg_match_all('/\b(?:href|src)=(["\'])\/\/([^"\'\s>]+)\1/i', $html, $m2)) {
        foreach ($m2[2] as $url) {
            $url = 'https://' . html_entity_decode($url, ENT_QUOTES | ENT_HTML5);
            if (stripos($url, 'localhost') !== false) {
                continue;
            }
            $urls[$url] = true;
        }
    }
}

$iter = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($root, FilesystemIterator::SKIP_DOTS)
);

foreach ($iter as $file) {
    if (!$file->isFile()) {
        continue;
    }

    $path = $file->getPathname();
    foreach ($skipDirs as $skip) {
        if (str_contains($path, $skip)) {
            continue 2;
        }
    }

    if (!preg_match('/\.(php|html)$/i', $path)) {
        continue;
    }

    $html = file_get_contents($path);
    if ($html === false) {
        continue;
    }

    extractUrls($html, $urls);
}

$byHost = [];
foreach (array_keys($urls) as $url) {
    $host = parse_url($url, PHP_URL_HOST) ?: 'unknown';
    $byHost[$host][] = $url;
}

ksort($byHost);
natcasesort($urls);

$summaryOnly = in_array('--summary', $argv ?? [], true);
$indexOnly = in_array('--index', $argv ?? [], true);

if ($indexOnly) {
    $urls = [];
    $html = file_get_contents($root . '/index.php');
    if ($html !== false) {
        extractUrls($html, $urls);
    }
    $byHost = [];
    foreach (array_keys($urls) as $url) {
        $host = parse_url($url, PHP_URL_HOST) ?: 'unknown';
        $byHost[$host][] = $url;
    }
}

echo 'Unique external URLs (href/src/action/content): ' . count($urls) . PHP_EOL;
echo 'Hosts: ' . count($byHost) . PHP_EOL . PHP_EOL;

if ($summaryOnly) {
    foreach ($byHost as $host => $list) {
        echo sprintf("%-40s %4d\n", $host, count($list));
    }
    exit(0);
}

foreach ($byHost as $host => $list) {
    sort($list, SORT_NATURAL | SORT_FLAG_CASE);
    echo $host . ' (' . count($list) . ')' . PHP_EOL;
    foreach ($list as $url) {
        echo '  ' . $url . PHP_EOL;
    }
    echo PHP_EOL;
}
