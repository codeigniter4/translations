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
    'mustBeArray'          => 'E-posta doğrulama yöntemi bir dizi almalıdır.',
    'invalidAddress'       => 'Geçersiz e-posta adresi: "{0}"',
    'attachmentMissing'    => 'Şu e-posta eki bulunamıyor: "{0}"',
    'attachmentUnreadable' => 'Bu eki açmak mümkün değil: "{0}"',
    'noFrom'               => '"From" başlığı olmadan posta gönderilemez.',
    'noRecipients'         => 'Alıcıları eklemelisiniz: To, Cc, veya Bcc',
    'sendFailurePHPMail'   => 'PHP mail() kullanılarak e-posta gönderilemiyor. Sunucunuz bu yöntemi kullanarak posta göndermek için yapılandırılmamış olabilir.',
    'sendFailureSendmail'  => 'Sendmail kullanılarak e-posta gönderilemiyor. Sunucunuz bu yöntemi kullanarak posta göndermek için yapılandırılmamış olabilir.',
    'sendFailureSmtp'      => 'SMTP kullanılarak e-posta gönderilemiyor. Sunucunuz bu yöntemi kullanarak posta göndermek için yapılandırılmamış olabilir.',
    'sent'                 => 'Mesajınız aşağıdaki protokol kullanılarak başarıyla gönderildi: {0}',
    'noSocket'             => 'Sendmail\'e soket açılamıyor. Lütfen ayarlarınızı kontrol edin.',
    'noHostname'           => 'Bir SMTP sunucu adı belirtmediniz.',
    'SMTPError'            => 'Şu SMTP hatasıyla karşılaşıldı: {0}',
    'noSMTPAuth'           => 'Hata: Bir SMTP kullanıcı adı ve şifre belirtmelisiniz.',
    'failedSMTPLogin'      => 'AUTH LOGIN komutu gönderilemedi. Hata: {0}',
    'SMTPAuthUsername'     => 'Kullanıcı adı doğrulanamadı. Hata: {0}',
    'SMTPAuthPassword'     => 'Şifre doğrulanamadı. Hata: {0}',
    'SMTPDataFailure'      => 'Veri gönderilemiyor: {0}',
    'exitStatus'           => 'Çıkış durumu kodu: {0}',
];
