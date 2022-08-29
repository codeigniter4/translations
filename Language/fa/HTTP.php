<?php

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
    'missingCurl'     => 'برای استفاده از کلاس CURLRequest باید CURL فعال باشد.',
    'invalidSSLKey'   => 'امکان تنظیم SSL Key وجود ندارد. {0} فایل معتبری نیست.',
    'sslCertNotFound' => 'گواهینامه SSL در آدرس {0} پیدا نشد.',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} نوع ورودی معتبری نیست. باید یکی از media, charset, encoding, language باشد.',

    // Message
    'invalidHTTPProtocol' => 'نسخه HTTP Protocol معتبر نیست. گزینه‌های معتبر: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'برای انجام Negotiations شما باید آرایه‌ای از مقادیر مجاز را وارد کنید.',

    // RedirectResponse
    'invalidRoute' => 'مسیر {0} در هنگام مسیریابی وارونه (reverse-routing) پیدا نشد.',

    // DownloadResponse
    'cannotSetBinary'        => 'وقتی که مسیر فایل را تنظیم می‌کنید، نمی‌توانید یک کقدار باینری وارد کنید.',
    'cannotSetFilepath'      => 'وقتی که باینری را انتخاب می‌کید، نمی‌توانید مسیر فایل ارسال کنید: {0}',
    'notFoundDownloadSource' => 'منبع دانلود پیدا نشد.',
    'cannotSetCache'         => 'سیستم Caching برای دانلود پشتیبانی نمی‌شود.',
    'cannotSetStatusCode'    => 'تغییر status code برای دانلود پشتیبانی نمی‌شود. کد: {0}, دلیل: {1}',

    // Response
    'missingResponseStatus' => 'Status code در پاسخ HTTP وجود ندارد',
    'invalidStatusCode'     => '{0} یک Status Code صحیح نیست.',
    'unknownStatusCode'     => 'Status Code نامعلوم با هیچ پیامی مرتبط نیست: {0}',

    // URI
    'cannotParseURI'       => 'پارس کردن و فهمیدم URI ممکن نیست: {0}',
    'segmentOutOfRange'    => 'بخش Request URI خارج از محدوده است: {0}',
    'invalidPort'          => 'پورت باید بین 0 و 65535 باشد. مقدار ورودی: {0}',
    'malformedQueryString' => 'Query string نمی‌تواند شامل قسمت‌های URI باشد.',

    // Page Not Found
    'pageNotFound'       => 'صفحه پیدا نشد',
    'emptyController'    => 'هیچ کنترلری مشخص نشده.',
    'controllerNotFound' => 'کنترلر یا متد آن پیدا نشد: {0}::{1}',
    'methodNotFound'     => 'متد کنترلر پیدا نشد: {0}',

    // CSRF
    'disallowedAction' => 'Action درخواستی شما مجاز نیست.',

    // Uploaded file moving
    'alreadyMoved' => 'فایل آپلود شده در حال حاضر جابجا شده است.',
    'invalidFile'  => 'فایل اصلی معتبر نیست.',
    'moveFailed'   => 'امکان انتقال فایل از {0} به {1} وجود ندارد. ({2})',

    'uploadErrOk'        => 'فایل با موفقیت آپلود شد.',
    'uploadErrIniSize'   => 'فایل "%s" از upload_max_filesize در فایل ini بیشتر است..',
    'uploadErrFormSize'  => 'فایل "%s" از محدوده آپلود تعریف شده در فرم شما بیشتر است.',
    'uploadErrPartial'   => 'فایل "%s" فقط به صورت ناقص آپلود شده است.',
    'uploadErrNoFile'    => 'هیچ فایلی آپلود نشد.',
    'uploadErrCantWrite' => 'فایل "%s" نمی‌تواند در دیسک نوشته (ذخیره) شود.',
    'uploadErrNoTmpDir'  => 'فایل آپلود نشد: دایرکتوری موقت پیدا نشد.',
    'uploadErrExtension' => 'فایل توسط یک افزونه‌ی PHP متوقف شد.',
    'uploadErrUnknown'   => 'فایل "%s" به علت خطای نامشخصی آپلود نشد.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'تظیمات SameSite باید یکی از مقادیر None, Lax, Strict یا رشته خالی باشد. مقدار داده شده: {0}',
];
