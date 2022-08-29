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
    'mustBeArray'          => 'لطفا یک «آرایه» به متد اعتبارسنجی ای‌میل ارسال کنید.',
    'invalidAddress'       => 'ای‌میل نامعتبر: {0}',
    'attachmentMissing'    => 'پیوست ای‌میل {0} یافت نشد.',
    'attachmentUnreadable' => 'باز کردن پیوست {0} امکان‌پذیر نیست.',
    'noFrom'               => 'ارسال ای‌میل بدون هِدِر "From" ممکن نیست.',
    'noRecipients'         => 'لطفا یک مخاطب به یکی از صورت‌های To، Cc یا Bcc وارد کنید',
    'sendFailurePHPMail'   => 'امکان ارسال ای‌میل با استفاده از تابع mail() وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.',
    'sendFailureSendmail'  => 'امکان ارسال ای‌میل به روش Sendmail وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.',
    'sendFailureSmtp'      => 'امکان ارسال ای‌میل به روش SMTP وجود ندارد. ممکن است سرور برای این نوع ارسال ای‌میل تنظیم نشده باشد.',
    'sent'                 => 'پیام با استفاده از روش {0} با موفقیت ارسال شد.',
    'noSocket'             => 'امکان باز کردن سوکت برای استفاده از روش Sendmail وجود ندارد. لطفا تنظیمات سرور را بررسی کنید.',
    'noHostname'           => 'شما هیچ هاست SMTP انتخاب نکرده‌اید.',
    'SMTPError'            => 'خطای SMTP: {0}',
    'noSMTPAuth'           => 'شما هیچ نام کاربری و رمز SMTP ارائه نکرده‌اید.',
    'failedSMTPLogin'      => 'مشکل در ارسال دستور AUTH LOGIN. خطا: {0}',
    'SMTPAuthUsername'     => 'مشکل در احراز هویت نام کاربری. خطا: {0}',
    'SMTPAuthPassword'     => 'مشکل در احراز هویت رمز. خطا: {0}',
    'SMTPDataFailure'      => 'امکان ارسال داده وجود ندارد: {0}',
    'exitStatus'           => 'کد وضعیت خروج: {0}',
];
