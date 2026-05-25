<?php
declare(strict_types=1);

/**
 * Contact form email settings.
 * Override secrets in contact-mail.local.php (not committed to git).
 */
return [
    'recipient' => 'zubairhusnain58@gmail.com',
    'from_email' => 'noreply@adobe.com.pk',
    'from_name' => 'Adobe Contact Form',

    'smtp' => [
        'enabled' => false,
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'encryption' => 'tls',
        'username' => '',
        'password' => '',
    ],

    'fallback_mail' => true,
    'save_to_file' => true,
];
