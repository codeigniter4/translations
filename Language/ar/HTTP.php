<?php

/**
 * HTTP language strings.
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
	// CurlRequest
	'missingCurl'                => 'يجب تفعيل مكتبة CURL حتى تستطيع إستخدام صنف CURLRequest.',
	'invalidSSLKey'              => 'لا يمكن استخدام مفتاح SSL. المسار {0} ليس ملف صالح.',
	'sslCertNotFound'            => 'شهادة SSL غير موجودة في المسار: {0}',
	'curlError'                  => '{0} : {1}',

	// IncomingRequest
	'invalidNegotiationType'     => 'القيمة {0} ليست نوع تفاوض صالح. يجب أن تكون أحد القيم التالية: media, charset, encoding, language.',

	// Message
	'invalidHTTPProtocol'        => 'نسخة بروتوكول HTTP غير صحيحة. يجب أن تكون أحد القيم التالية: {0}',

	// Negotiate
	'emptySupportedNegotiations' => 'يجب تحديد مصفوفة بجيمع أنواع التفاوض المدعومة لجميع عمليات التفاوض في الاتصال.',

	// RedirectResponse
	'invalidRoute'               => 'القيمة {0, string} ليست مسار توجيه صحيح.',

	// Response
	'missingResponseStatus'      => 'استجابة HTTP لا تحتوي على كود الحالة',
	'invalidStatusCode'          => 'القيمة {0, string} ليست كود حالة صحيح لبروتوكول HTTP',
	'unknownStatusCode'          => 'كود الحالة لبروتوكول HTTP لا يحتوى على رسالة: {0}',

	// URI
	'cannotParseURI'             => 'لا يمكن معالجة الرابط: {0}',
	'segmentOutOfRange'          => 'أجزاء رابط الطلب خارج النطاق: {0}',
	'invalidPort'                => 'المنفذ يجب أن يكون بين 0 و 65535. المعطى: {0}',
	'malformedQueryString'       => 'معرفة الأجزاء التى تبدأ بعلامة # غير مسموح بها في الرابط.',

	// Page Not Found
	'pageNotFound'               => 'المتحكم غير موجودة',
	'emptyController'            => 'لايوجد متحكم محدد.',
	'controllerNotFound'         => 'المتحكم او الخاصة غير موجودة: {0}::{1}',
	'methodNotFound'             => 'الخاصية غير موجودة: {0}',

	// CSRF
	'disallowedAction'           => 'غير مسموح تكرار تنفيذ هذا الطلب.',
	
	// Uploaded file moving
	'alreadyMoved'				 => 'الملف المرفوع تم نقلة بالفعل.',
	'invalidFile'				 => 'الملف الأصل ليس ملفا صالح.',
	'moveFailed'				 => 'فشل في نقل الملف من {0} إلى {1} ({2})',
];
