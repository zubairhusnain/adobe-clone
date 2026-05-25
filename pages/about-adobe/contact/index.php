<?php
declare(strict_types=1);

require_once dirname(__DIR__, 3) . '/includes/cw-contact-form.php';
require_once dirname(__DIR__, 3) . '/base-url.php';
cw_start_asset_url_rewrite();

$formState = ['ok' => false, 'message' => '', 'values' => []];
if (strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $formState = cw_contact_form_handle($_POST);
}

$formMain = cw_contact_form_render($formState);
$base = CW_BASE_URL;
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us | Adobe</title>
    <meta name="description" content="Contact Adobe">
    <meta name="header" content="global-navigation">
    <meta name="footer" content="off">
    <meta name="universal-nav" content="appswitcher,notifications,cart">
    <meta name="mobile-gnav-v2" content="on">
    <style>body{display:block!important;}</style>
    <link rel="stylesheet" href="<?php echo htmlspecialchars($base, ENT_QUOTES, 'UTF-8'); ?>/libs/styles/styles.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($base, ENT_QUOTES, 'UTF-8'); ?>/upp/blocks/global-navigation/global-navigation.css">
    <link rel="stylesheet" href="<?php echo htmlspecialchars($base, ENT_QUOTES, 'UTF-8'); ?>/assets/css/custom.css">
</head>

<body class="cw-contact-page cw-has-homepage-gnav">
    <?php echo $formMain; ?>
</body>

</html>
