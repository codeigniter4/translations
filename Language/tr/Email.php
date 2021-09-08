<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'Email doğrulama işlevine bir dizi verilmeli.',
    'invalidAddress'       => 'Geçersiz email adresi: {0}',
    'attachmentMissing'    => 'Email eklentisi bulunamadı: {0}',
    'attachmentUnreadable' => 'Email eklentisi açılamadı: {0}',
    'noFrom'               => '"From" başlığı olmadan email gönderilemez.',
    'noRecipients'         => 'Alıcıları belirtmelisiniz: To, Cc, veya Bcc',
    'sendFailurePHPMail'   => 'PHP mail() yöntemi kullanılarak email gönderilemiyor. Sunucunuz bu yöntemle email gönderecek şekilde ayarlanmamış olabilir.',
    'sendFailureSendmail'  => 'PHP Sendmail yöntemi kullanılarak email gönderilemiyor. Sunucunuz bu yöntemle email gönderecek şekilde ayarlanmamış olabilir.',
    'sendFailureSmtp'      => 'PHP SMTP yöntemi kullanılarak email gönderilemiyor. Sunucunuz bu yöntemle email gönderecek şekilde ayarlanmamış olabilir.',
    'sent'                 => 'Mesajınız {0} protokolü kullanılarak başarıyla gönderildi.',
    'noSocket'             => 'Sendmail soketi açılamıyor. Lütfen ayarlarınızı kontrol edin.',
    'noHostname'           => 'SMTP sunucu adı belirtmeniz gerekiyor.',
    'SMTPError'            => 'SMTP hatası alındı: {0}',
    'noSMTPAuth'           => 'Hata: SMTP kullanıcı adı ve şifre belirtmelisiniz.',
    'failedSMTPLogin'      => 'AUTH LOGIN komutu gönderilemedi. Hata: {0}',
    'SMTPAuthUsername'     => 'Kullanıcı adı hatalı. Hata: {0}',
    'SMTPAuthPassword'     => 'Şifre hatalı Hata: {0}',
    'SMTPDataFailure'      => 'Veri gönderilemedi: {0}',
    'exitStatus'           => 'Çıkış kodu: {0}',
];
