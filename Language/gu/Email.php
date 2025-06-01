<?php

declare(strict_types=1);

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
    'mustBeArray'          => 'يجب تمرير مصفوفة إلى طريقة التحقق من صحة البريد الإلكتروني.',
    'invalidAddress'       => 'عنوان بريد إلكتروني غير صالح: "{0}"',
    'attachmentMissing'    => 'غير قادر على تحديد موقع مرفق البريد الإلكتروني التالي: "{0}"',
    'attachmentUnreadable' => 'غير قادر على فتح هذا المرفق: "{0}"',
    'noFrom'               => 'لا يمكن إرسال البريد بدون ترويسة "From".',
    'noRecipients'         => 'يجب عليك تضمين مستلمين: To, Cc, أو Bcc',
    'sendFailurePHPMail'   => 'غير قادر على إرسال البريد الإلكتروني باستخدام PHP mail(). قد لا يتم تهيئة الخادم الخاص بك لإرسال البريد بهذه الطريقة.',
    'sendFailureSendmail'  => 'غير قادر على إرسال البريد الإلكتروني باستخدام Sendmail. قد لا يتم تهيئة الخادم الخاص بك لإرسال البريد بهذه الطريقة.',
    'sendFailureSmtp'      => 'غير قادر على إرسال البريد الإلكتروني باستخدام SMTP. قد لا يتم تهيئة الخادم الخاص بك لإرسال البريد بهذه الطريقة.',
    'sent'                 => 'تم إرسال رسالتك بنجاح باستخدام البروتوكول التالي: {0}',
    'noSocket'             => 'غير قادر على فتح مأخذ (socket) إلى Sendmail. يرجى التحقق من الإعدادات.',
    'noHostname'           => 'لم تحدد اسم مضيف SMTP.',
    'SMTPError'            => 'حدث خطأ SMTP التالي: {0}',
    'noSMTPAuth'           => 'خطأ: يجب عليك تعيين اسم مستخدم وكلمة مرور لـ SMTP.',
    'failedSMTPLogin'      => 'فشل إرسال أمر AUTH LOGIN. الخطأ: {0}',
    'SMTPAuthUsername'     => 'فشل مصادقة اسم المستخدم. الخطأ: {0}',
    'SMTPAuthPassword'     => 'فشل مصادقة كلمة المرور. الخطأ: {0}',
    'SMTPDataFailure'      => 'غير قادر على إرسال البيانات: {0}',
    'exitStatus'           => 'رمز حالة الخروج: {0}',
];
