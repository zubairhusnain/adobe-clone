<?php
declare(strict_types=1);

function cw_contact_mail_config(): array
{
    static $config = null;
    if ($config !== null) {
        return $config;
    }

    $defaults = require __DIR__ . '/contact-mail-config.php';
    $local = __DIR__ . '/contact-mail.local.php';
    if (is_file($local)) {
        $overrides = require $local;
        if (is_array($overrides)) {
            $defaults = array_replace_recursive($defaults, $overrides);
        }
    }

    $config = $defaults;

    return $config;
}

function cw_contact_storage_dir(): string
{
    return dirname(__DIR__) . '/storage/contact-messages';
}

function cw_contact_save_to_file(
    string $username,
    string $email,
    string $subject,
    string $message
): array {
    $dir = cw_contact_storage_dir();
    if (!is_dir($dir) && !mkdir($dir, 0755, true) && !is_dir($dir)) {
        return ['ok' => false, 'message' => 'Could not create storage folder for messages.'];
    }

    $id = date('Ymd-His') . '-' . bin2hex(random_bytes(4));
    $path = $dir . '/' . $id . '.txt';
    $body = "Contact form submission\n"
        . 'Time: ' . date('c') . "\n"
        . "Name: {$username}\n"
        . "Email: {$email}\n"
        . "Subject: {$subject}\n\n"
        . "Message:\n{$message}\n";

    if (file_put_contents($path, $body) === false) {
        return ['ok' => false, 'message' => 'Could not save your message. Please try again later.'];
    }

    return ['ok' => true, 'message' => 'Thank you. Your message has been sent.'];
}

function cw_contact_send_mail(string $username, string $email, string $subject, string $message): array
{
    $config = cw_contact_mail_config();
    $to = (string)($config['recipient'] ?? '');
    $fromEmail = (string)($config['from_email'] ?? '');
    $fromName = (string)($config['from_name'] ?? 'Adobe Contact Form');

    $safeName = trim($username);
    $safeEmail = trim($email);
    $safeSubject = str_replace(["\r", "\n"], '', trim($subject));
    $safeMessage = trim($message);

    $mailSubject = 'Contact: ' . $safeSubject;
    $body = "Contact form submission\n\n"
        . "Name: {$safeName}\n"
        . "Email: {$safeEmail}\n"
        . "Subject: {$safeSubject}\n\n"
        . "Message:\n{$safeMessage}\n";

    if (cw_contact_smtp_ready($config)) {
        $smtpResult = cw_contact_send_smtp($config, $to, $fromEmail, $fromName, $mailSubject, $body, $safeName, $safeEmail);
        if ($smtpResult['ok']) {
            return $smtpResult;
        }
        if (empty($config['fallback_mail']) && empty($config['save_to_file'])) {
            return $smtpResult;
        }
    }

    if (!empty($config['fallback_mail'])) {
        $mailResult = cw_contact_send_php_mail($to, $fromEmail, $fromName, $mailSubject, $body, $safeName, $safeEmail);
        if ($mailResult['ok']) {
            return $mailResult;
        }
        if (empty($config['save_to_file'])) {
            return $mailResult;
        }
    }

    if (!empty($config['save_to_file'])) {
        return cw_contact_save_to_file($safeName, $safeEmail, $safeSubject, $safeMessage);
    }

    return ['ok' => false, 'message' => 'Contact form is not configured.'];
}

function cw_contact_smtp_ready(array $config): bool
{
    $smtp = $config['smtp'] ?? [];
    if (empty($smtp['enabled'])) {
        return false;
    }

    $user = trim((string)($smtp['username'] ?? ''));
    $pass = (string)($smtp['password'] ?? '');

    return $user !== '' && $pass !== '';
}

function cw_contact_form_enabled(): bool
{
    $config = cw_contact_mail_config();
    if (!empty($config['save_to_file'])) {
        return true;
    }

    if (!empty($config['fallback_mail'])) {
        return true;
    }

    if (!cw_contact_smtp_ready($config)) {
        return false;
    }

    $from = trim((string)($config['from_email'] ?? ''));
    $user = trim((string)($config['smtp']['username'] ?? ''));
    if (!filter_var($from, FILTER_VALIDATE_EMAIL) || !filter_var($user, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    $placeholders = '/your\.email|your-gmail|example\.com|changeme|xxx/i';
    if (preg_match($placeholders, $from) || preg_match($placeholders, $user)) {
        return false;
    }

    return true;
}

function cw_contact_send_smtp(
    array $config,
    string $to,
    string $fromEmail,
    string $fromName,
    string $subject,
    string $body,
    string $replyName,
    string $replyEmail
): array {
    $smtp = $config['smtp'] ?? [];
    $autoload = dirname(__DIR__) . '/vendor/autoload.php';
    if (!is_file($autoload)) {
        return ['ok' => false, 'message' => 'PHPMailer is not installed. Run composer install in the site root, or enable save_to_file in contact-mail-config.php.'];
    }

    require_once $autoload;

    if (!class_exists(\PHPMailer\PHPMailer\PHPMailer::class)) {
        return ['ok' => false, 'message' => 'PHPMailer class not found after composer install.'];
    }

    $mail = new \PHPMailer\PHPMailer\PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = (string)($smtp['host'] ?? 'smtp.gmail.com');
        $mail->Port = (int)($smtp['port'] ?? 587);
        $mail->SMTPAuth = true;
        $mail->Username = (string)$smtp['username'];
        $mail->Password = (string)$smtp['password'];
        $mail->CharSet = \PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;

        $encryption = strtolower((string)($smtp['encryption'] ?? 'tls'));
        if ($encryption === 'ssl') {
            $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;
        } elseif ($encryption === 'tls') {
            $mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        } else {
            $mail->SMTPSecure = '';
            $mail->SMTPAutoTLS = false;
        }

        $mail->setFrom($fromEmail, $fromName);
        $mail->addAddress($to);
        $mail->addReplyTo($replyEmail, $replyName);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(false);
        $mail->send();

        return ['ok' => true, 'message' => 'Thank you. Your message has been sent.'];
    } catch (\PHPMailer\PHPMailer\Exception $e) {
        return [
            'ok' => false,
            'message' => 'Could not send email (SMTP). Check includes/contact-mail.local.php — ' . $mail->ErrorInfo,
        ];
    }
}

function cw_contact_send_php_mail(
    string $to,
    string $fromEmail,
    string $fromName,
    string $subject,
    string $body,
    string $replyName,
    string $replyEmail
): array {
    if ($to === '' || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
        return ['ok' => false, 'message' => 'Recipient email is not configured.'];
    }

    if ($fromEmail === '' || !filter_var($fromEmail, FILTER_VALIDATE_EMAIL)) {
        $fromEmail = 'noreply@localhost';
    }

    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'Content-Transfer-Encoding: 8bit',
        'From: ' . cw_contact_encode_address($fromName, $fromEmail),
        'Reply-To: ' . cw_contact_encode_address($replyName, $replyEmail),
        'X-Mailer: PHP/' . PHP_VERSION,
    ];

    $headerString = implode("\r\n", $headers);
    $body = str_replace(["\r\n", "\r"], "\n", $body);

    $envelopeFrom = filter_var($fromEmail, FILTER_VALIDATE_EMAIL);
    $params = is_string($envelopeFrom) ? ('-f' . $envelopeFrom) : '';

    $ok = $params !== ''
        ? mail($to, $subject, $body, $headerString, $params)
        : mail($to, $subject, $body, $headerString);

    if ($ok) {
        return ['ok' => true, 'message' => 'Thank you. Your message has been sent.'];
    }

    return [
        'ok' => false,
        'message' => 'Could not send email. Messages may still be saved locally if save_to_file is enabled.',
    ];
}

function cw_contact_encode_address(string $name, string $email): string
{
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    if (!is_string($email) || $email === '') {
        return 'noreply@localhost';
    }
    $name = str_replace(['"', "\r", "\n"], '', $name);
    if ($name === '') {
        return $email;
    }

    return '"' . $name . '" <' . $email . '>';
}
