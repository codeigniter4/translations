<?php

/**
 * Email language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
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
	'sent'                 => 'تم إرسال رسالتك بنجاح باستخدام البروتوكول التالي: {0, string}',
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
