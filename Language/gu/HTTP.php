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

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'يجب تمكين CURL لاستخدام فئة CURLRequest.',
    'invalidSSLKey'   => 'لا يمكن تعيين مفتاح SSL. "{0}" ليس ملفًا صالحًا.',
    'sslCertNotFound' => 'شهادة SSL غير موجودة في: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" ليس نوع تفاوض صالحًا. يجب أن يكون واحدًا مما يلي: media, charset, encoding, language.',
    'invalidJSON'            => 'فشل في تحليل سلسلة JSON. الخطأ: {0}',
    'unsupportedJSONFormat'  => 'تنسيق JSON المقدم غير مدعوم.',

    // Message
    'invalidHTTPProtocol' => 'إصدار بروتوكول HTTP غير صالح: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'يجب عليك توفير مصفوفة من القيم المدعومة لجميع عمليات التفاوض.',

    // RedirectResponse
    'invalidRoute' => 'المسار لـ "{0}" لا يمكن العثور عليه.',

    // DownloadResponse
    'cannotSetBinary'        => 'عند تعيين مسار الملف لا يمكن تعيين ثنائي.',
    'cannotSetFilepath'      => 'عند تعيين ثنائي لا يمكن تعيين مسار الملف: "{0}"',
    'notFoundDownloadSource' => 'لم يتم العثور على مصدر جسم التنزيل.',
    'cannotSetCache'         => 'لا يدعم التخزين المؤقت للتنزيل.',
    'cannotSetStatusCode'    => 'لا يدعم تغيير رمز الحالة للتنزيل. الرمز: {0}, السبب: {1}',

    // Response
    'missingResponseStatus' => 'استجابة HTTP تفتقد رمز الحالة',
    'invalidStatusCode'     => '{0} ليس رمز حالة إرجاع HTTP صالحًا',
    'unknownStatusCode'     => 'تم توفير رمز حالة HTTP غير معروف بدون رسالة: {0}',

    // URI
    'cannotParseURI'       => 'غير قادر على تحليل URI: "{0}"',
    'segmentOutOfRange'    => 'شريحة URI الطلب خارج النطاق: "{0}"',
    'invalidPort'          => 'يجب أن تكون المنافذ بين 0 و 65535. المعطى: {0}',
    'malformedQueryString' => 'سلاسل الاستعلام قد لا تتضمن أجزاء URI.',

    // Page Not Found
    'pageNotFound'       => 'الصفحة غير موجودة',
    'emptyController'    => 'لم يتم تحديد وحدة تحكم.',
    'controllerNotFound' => 'وحدة التحكم أو دالتها غير موجودة: {0}::{1}',
    'methodNotFound'     => 'دالة وحدة التحكم غير موجودة: "{0}"',
    'localeNotSupported' => 'اللغة غير مدعومة: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'الإجراء الذي طلبته غير مسموح به.',

    // Uploaded file moving
    'alreadyMoved' => 'تم نقل الملف المحمل بالفعل.',
    'invalidFile'  => 'الملف الأصلي ليس ملفًا صالحًا.',
    'moveFailed'   => 'تعذر نقل الملف "{0}" إلى "{1}". السبب: {2}',

    'uploadErrOk'        => 'تم تحميل الملف بنجاح.',
    'uploadErrIniSize'   => 'الملف "%s" يتجاوز توجيه ini upload_max_filesize لديك.',
    'uploadErrFormSize'  => 'الملف "%s" يتجاوز حد التحميل المحدد في النموذج الخاص بك.',
    'uploadErrPartial'   => 'تم تحميل الملف "%s" جزئيًا فقط.',
    'uploadErrNoFile'    => 'لم يتم تحميل أي ملف.',
    'uploadErrCantWrite' => 'لا يمكن كتابة الملف "%s" على القرص.',
    'uploadErrNoTmpDir'  => 'لا يمكن تحميل الملف: دليل مؤقت مفقود.',
    'uploadErrExtension' => 'تم إيقاف تحميل الملف بواسطة امتداد PHP.',
    'uploadErrUnknown'   => 'لم يتم تحميل الملف "%s" بسبب خطأ غير معروف.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'يجب أن يكون إعداد SameSite إما None أو Lax أو Strict أو سلسلة فارغة. المعطى: {0}',
];
