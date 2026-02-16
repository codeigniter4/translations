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
    'mustBeArray'           => 'يجب تمرير مصفوفة إلى طريقة التحقق من البريد الإلكتروني.',
    'invalidAddress'        => 'عنوان البريد الإلكتروني غير صالح: "{0}"',
    'attachmentMissing'     => 'تعذر العثور على مرفق البريد الإلكتروني التالي: "{0}"',
    'attachmentUnreadable'  => 'تعذر فتح هذا المرفق: "{0}"',
    'noFrom'                => 'لا يمكن إرسال البريد بدون ترويسة "From".',
    'noRecipients'          => 'يجب تضمين المستلمين: To أو Cc أو Bcc',
    'sendFailurePHPMail'    => 'تعذر إرسال البريد الإلكتروني باستخدام PHP mail(). قد لا يكون خادمك مهيئاً لإرسال البريد بهذه الطريقة.',
    'sendFailureSendmail'   => 'تعذر إرسال البريد الإلكتروني باستخدام Sendmail. قد لا يكون خادمك مهيئاً لإرسال البريد بهذه الطريقة.',
    'sendFailureSmtp'       => 'تعذر إرسال البريد الإلكتروني باستخدام SMTP. قد لا يكون خادمك مهيئاً لإرسال البريد بهذه الطريقة.',
    'sent'                  => 'تم إرسال رسالتك بنجاح باستخدام البروتوكول التالي: {0}',
    'noSocket'              => 'تعذر فتح مقبس (Socket) إلى Sendmail. يرجى التحقق من الإعدادات.',
    'noHostname'            => 'لم تقم بتحديد اسم مضيف SMTP (Hostname).',
    'SMTPError'             => 'تمت مواجهة خطأ SMTP التالي: {0}',
    'noSMTPAuth'            => 'خطأ: يجب تعيين اسم مستخدم وكلمة مرور لـ SMTP.',
    'invalidSMTPAuthMethod' => 'خطأ: طريقة تخويل SMTP "{0}" غير مدعومة في CodeIgniter، قم بتعيين طريقة التخويل إما "login" أو "plain".',
    'failureSMTPAuthMethod' => 'تعذر بدء أمر AUTH. قد لا يكون خادمك مهيئاً لاستخدام طريقة المصادقة AUTH {0}.',
    'SMTPAuthCredentials'   => 'فشلت مصادقة بيانات اعتماد المستخدم. الخطأ: {0}',
    'SMTPAuthUsername'      => 'فشلت مصادقة اسم المستخدم. الخطأ: {0}',
    'SMTPAuthPassword'      => 'فشلت مصادقة كلمة المرور. الخطأ: {0}',
    'SMTPDataFailure'       => 'تعذر إرسال البيانات: {0}',
    'exitStatus'            => 'رمز حالة الخروج (Exit status code): {0}',
    // @deprecated
    'failedSMTPLogin' => 'فشل إرسال أمر AUTH LOGIN. الخطأ: {0}',
];
