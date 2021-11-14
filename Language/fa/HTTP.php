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
    'missingCurl' => 'برای استفاده از کلاس CURLRequest باید CURL فعال باشد.', // CURL must be enabled to use the CURLRequest class.
    'invalidSSLKey' => 'امکان تنظیم SSL Key وجود ندارد. {0} فایل معتبری نیست.', // Cannot set SSL Key. {0} is not a valid file.
    'sslCertNotFound' => 'گواهینامه SSL در آدرس {0} پیدا نشد.', // SSL certificate not found at: {0}
    'curlError' => '{0} : {1}', // {0} : {1}

    // IncomingRequest
    'invalidNegotiationType' => '{0} نوع ورودی معتبری نیست. باید یکی از media, charset, encoding, language باشد.',
    // {0} is not a valid negotiation type. Must be one of: media, charset, encoding, language.

    // Message
    'invalidHTTPProtocol' => 'نسخه HTTP Protocol معتبر نیست. گزینه‌های معتبر: {0}',
    // Invalid HTTP Protocol Version. Must be one of: {0}

    // Negotiate
    'emptySupportedNegotiations' => 'برای انجام Negotiations شما باید آرایه‌ای از مقادیر مجاز را وارد کنید.',
    // You must provide an array of supported values to all Negotiations.

    // RedirectResponse
    'invalidRoute' => 'مسیر {0} در هنگام مسیریابی وارونه (reverse-routing) پیدا نشد.',
    // {0} route cannot be found while reverse-routing.

    // DownloadResponse
    'cannotSetBinary' => 'وقتی که مسیر فایل را تنظیم می‌کنید، نمی‌توانید یک مقدار باینری وارد کنید.', // When setting filepath cannot set binary.
    'cannotSetFilepath' => 'وقتی که باینری را انتخاب می‌کید، نمی‌توانید مسیر فایل ارسال کنید: {0}',
    // When setting binary cannot set filepath: {0}

    'notFoundDownloadSource' => 'منبع دانلود پیدا نشد.', // Not found download body source.
    'cannotSetCache' => 'سیستم Caching برای دانلود پشتیبانی نمی‌شود.', // It does not support caching for downloading.
    'cannotSetStatusCode' => 'تغییر status code برای دانلود پشتیبانی نمی‌شود. کد: {0}, دلیل: {1}',
    // It does not support change status code for downloading. code: {0}

    // Response
    'missingResponseStatus' => 'Status code در پاسخ HTTP وجود ندارد', // HTTP Response is missing a status code.
    'invalidStatusCode' => '{0} یک Status Code صحیح نیست.',
    // {0} is not a valid HTTP return status code.

    'unknownStatusCode' => 'Status Code نامعلوم با هیچ پیامی مرتبط نیست: {0}',
    // Unknown HTTP status code provided with no message: {0}.

    // URI
    'cannotParseURI' => 'پارس کردن و فهمیدن URI ممکن نیست: {0}',
    // Unable to parse URI: {0}

    'segmentOutOfRange' => 'بخش Request URI خارج از محدوده است: {0}',
    // Request URI segment is out of range: {0}

    'invalidPort' => 'پورت باید بین 0 و 65535 باشد. مقدار ورودی: {0}',
    // Ports must be between 0 and 65535. Given: {0}

    'malformedQueryString' => 'Query string نمی‌تواند شامل قسمت‌های URI باشد.',
    // Query strings may not include URI fragments.

    // Page Not Found
    'pageNotFound' => 'صفحه پیدا نشد', // Page Not Found.
    'emptyController' => 'هیچ کنترلی مشخص نشده است.', // No Controller specified.
    'controllerNotFound' => 'کنترل کننده یا روش آن یافت نشد: {0}::{1}', // Controller or its method is not found: {0}::{1}
    'methodNotFound' => 'متد کنترلر پیدا نشد: {0}', // Controller method is not found: {0}

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Action درخواستی شما مجاز نیست.', // The action you requested is not allowed.

    // Uploaded file moving
    'alreadyMoved' => 'فایل آپلود شده در حال حاضر جابجا شده است.', // The uploaded file has already been moved.
    'invalidFile' => 'فایل اصلی معتبر نیست.', // The original file is not a valid file.
    'moveFailed' => 'امکان انتقال فایل از {0} به {1} وجود ندارد. ({2})', // Could not move file {0} to {1} ({2})

    'uploadErrOk' => 'فایل با موفقیت آپلود شد.', // The file uploaded with success.
    'uploadErrIniSize' => 'فایل "%s" از upload_max_filesize در فایل ini بیشتر است..', // The file "%s" exceeds your upload_max_filesize ini directive.
    'uploadErrFormSize' => 'فایل "%s" از محدوده آپلود تعریف شده در فرم شما بیشتر است.', // The file "%s" exceeds the upload limit defined in your form.
    'uploadErrPartial' => 'فایل "%s" فقط به صورت ناقص آپلود شده است.', // The file "%s" was only partially uploaded.
    'uploadErrNoFile' => 'هیچ فایلی آپلود نشد.', // No file was uploaded.
    'uploadErrCantWrite' => 'فایل "%s" نمی‌تواند در دیسک نوشته (ذخیره) شود.', // The file "%s" could not be written on disk.
    'uploadErrNoTmpDir' => 'فایل آپلود نشد: دایرکتوری موقت پیدا نشد.', // File could not be uploaded: missing temporary directory.
    'uploadErrExtension' => 'فایل توسط یک افزونه‌ی PHP متوقف شد.', // File upload was stopped by a PHP extension.
    'uploadErrUnknown' => 'فایل "%s" was not uploaded due to an unknown error.', // The file "%s" was not uploaded due to an unknown error.

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'تنظیم SameSite باید None، Lax، Strict یا یک رشته خالی باشد. داده شده: {0}', // The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}
];
