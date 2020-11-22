<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'يجب ارسال متغير $email الى دالة validateEmail على شكل مصفوفة.',
	'invalidAddress'       => 'عنوان بريد الكتروني غير صحيح: {0}',
	'attachmentMissing'    => 'لا يمكن ايجاد مرفق البريد الكتروني التالي: {0}',
	'attachmentUnreadable' => 'لا يمكن فتح المرفق: {0}',
	'noFrom'               => 'لا يمكن ارسال بريد الكتروني بدون تعليمة "From".',
	'noRecipients'         => 'يجب تحديد مرسل لهم من خلال تعليمة: To, Cc, or Bcc',
	'sendFailurePHPMail'   => 'غير قادر على إرسال البريد الإلكتروني باستخدام PHP mail(). لم يتم اعداد الخادم لإرسال البريد باستخدام هذه الطريقة.',
	'sendFailureSendmail'  => 'غير قادر على إرسال البريد الإلكتروني باستخدام PHP Sendmail. لم يتم اعداد الخادم لإرسال البريد باستخدام هذه الطريقة.',
	'sendFailureSmtp'      => 'غير قادر على إرسال البريد الإلكتروني باستخدام PHP SMTP. لم يتم اعداد الخادم لإرسال البريد باستخدام هذه الطريقة.',
	'sent'                 => 'تم إرسال رسالتك بنجاح باستخدام البروتوكول التالي: {0}',
	'noSocket'             => 'غير قادر على فتح اتصال من نوع socket مع Sendmail. الرجاء مراجعة الاعدادات.',
	'noHostname'           => 'لم تحدد اسم مضيف SMTP.',
	'SMTPError'            => 'حدث خطأ SMTP التالي: {0}',
	'noSMTPAuth'           => 'خطأ SMTP: يجب استخدام اسم مستخدم وكلمة مرور.',
	'failedSMTPLogin'      => 'فشل في ارسال أمر AUTH LOGIN. الخطأ: {0}',
	'SMTPAuthUsername'     => 'فشل في مصادقة اسم المستخدم. الخطأ: {0}',
	'SMTPAuthPassword'     => 'فشل في مصادقة اسم كلمة المرور. الخطأ: {0}',
	'SMTPDataFailure'      => 'غير قادر على ارسال البيانات: {0}',
	'exitStatus'           => 'رمز حالة الخروج: {0}',
];
