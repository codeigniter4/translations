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
    'mustBeArray'          => 'لطفا یک «آرایه» به متد اعتبارسنجی ای‌میل ارسال کنید.', // The email validation method must be passed an array.
    'invalidAddress'       => 'ای‌میل نامعتبر: {0}', // Invalid email address: {0}
    'attachmentMissing'    => 'پیوست ای‌میل {0} یافت نشد.', // Unable to locate the following email attachment: {0}
    'attachmentUnreadable' => 'باز کردن پیوست {0} امکان‌پذیر نیست.', // Unable to open this attachment: {0}
    'noFrom'               => 'ارسال ای‌میل بدون هِدِر "From" ممکن نیست.', // Cannot send mail with no "From" header.
    'noRecipients'         => 'لطفا یک مخاطب به یکی از صورت‌های To، Cc یا Bcc وارد کنید', // You must include recipients: To, Cc, or Bcc
    'sendFailurePHPMail'   => 'امکان ارسال ای‌میل با استفاده از تابع mail() وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.', // Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.
    'sendFailureSendmail'  => 'امکان ارسال ای‌میل به روش Sendmail وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.', // Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.
    'sendFailureSmtp'      => 'امکان ارسال ای‌میل به روش SMTP وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.', // Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.
    'sent'                 => 'پیام با استفاده از روش {0} با موفقیت ارسال شد.', // Your message has been successfully sent using the following protocol: {0}
    'noSocket'             => 'امکان باز کردن سوکت برای استفاده از روش Sendmail وجود ندارد. لطفا تنظیمات سرور را بررسی کنید.', // Unable to open a socket to Sendmail. Please check settings.
    'noHostname'           => 'شما هیچ هاست SMTP انتخاب نکرده‌اید.', // You did not specify a SMTP hostname.
    'SMTPError'            => 'خطای SMTP: {0}', // The following SMTP error was encountered: {0}
    'noSMTPAuth'           => 'شما هیچ نام کاربری و رمز SMTP ارائه نکرده‌اید.', // Error: You must assign a SMTP username and password.
    'failedSMTPLogin'      => 'مشکل در ارسال دستور AUTH LOGIN. خطا: {0}', // Failed to send AUTH LOGIN command. Error: {0}
    'SMTPAuthUsername'     => 'مشکل در احراز هویت نام کاربری. خطا: {0}', // Failed to authenticate username. Error: {0}
    'SMTPAuthPassword'     => 'مشکل در احراز هویت رمز. خطا: {0}', // Failed to authenticate password. Error: {0}
    'SMTPDataFailure'      => 'امکان ارسال داده وجود ندارد: {0}', // Unable to send data: {0}
    'exitStatus'           => 'کد وضعیت خروج: {0}', // Exit status code: {0}
];
