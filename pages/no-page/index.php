<?php
require_once dirname(__DIR__, 2) . '/base-url.php';
cw_start_asset_url_rewrite();
$from = isset($_GET['from']) ? (string) $_GET['from'] : '';
$from = htmlspecialchars($from, ENT_QUOTES, 'UTF-8');
$home = htmlspecialchars(cw_page_url('/'), ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en-GB">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page not found</title>
  <style>
    body {
      font-family: adobe-clean, "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      margin: 0;
      padding: 120px 24px 48px;
      text-align: center;
      color: #2c2c2c;
    }

    h1 {
      font-size: 2rem;
      margin: 0 0 12px;
    }

    p {
      margin: 0 0 24px;
      color: #505050;
    }

    a {
      color: #1473e6;
      text-decoration: none;
      font-weight: 600;
    }

    a:hover {
      text-decoration: underline;
    }

    code {
      font-size: 0.9rem;
      background: #f5f5f5;
      padding: 2px 8px;
      border-radius: 4px;
    }
  </style>
</head>

<body>
  <h1>Page not found</h1>
  <?php if ($from !== ''): ?>
    <p>This page is not part of the offline site: <code><?php echo $from; ?></code></p>
  <?php else: ?>
    <p>This page is not part of the offline site.</p>
  <?php endif; ?>
  <p><a href="<?php echo $home; ?>">Return to homepage</a></p>
</body>

</html>
