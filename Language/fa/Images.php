<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
    'sourceImageRequired' => 'لطفا در تنظیمات یک عکس مرجع انتخاب کنید.', // You must specify a source image in your preferences.
    'gdRequired' => 'کتابخانه‌ی GD برای استفاده از این قابلیت نیاز است.', // The GD image library is required to use this feature.
    'gdRequiredForProps' => 'برای تشخیص خصوصیات عکس، سرور شما باید از کتابخانه‌ی عکس GD پشتیبانی کند.', // Your server must support the GD image library in order to determine the image properties.
    'gifNotSupported' => 'معمولا تصاویر GIF به دلایل محدودیت‌های لایسنس پشتیبانی نمی‌شوند. به جای آن می‌توانید از فرمت‌های JPG یا PNG استفاده کنید.', // GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.
    'jpgNotSupported' => 'تصاویر JPG پشتیبانی نمی‌شوند.', // JPG images are not supported.
    'pngNotSupported' => 'تصاویر PNG پشتیبانی نمی‌شوند.', // PNG images are not supported.
    'webpNotSupported' => 'تصاویر WEBP پشتیبانی نمی شوند.', // WEBP images are not supported.
    'fileNotSupported' => 'فایل ارائه شده یک نوع تصویر پشتیبانی شده نیست.', // The supplied file is not a supported image type.
    'unsupportedImageCreate' => 'برای پردازش این نوع تصاویر، سرور شما باید از GD پشتیبانی کند.', // Your server does not support the GD function required to process this type of image.
    'jpgOrPngRequired' => 'تنظیمات انتخابی شما برای تغییر اندازه‌ی عکس فقط برای فایل‌های JPEG و PNG قابل انجام است.', // The image resize protocol specified in your preferences only works with JPEG or PNG image types.
    'rotateUnsupported' => 'بر اساس تنظیمات سرور شما، امکان چرخش تصویر وجود ندارد.', // Image rotation does not appear to be supported by your server.
    'libPathInvalid' => 'نشانی کتابخانه‌ی عکس شما صحیح نیست. لطفا در تنظیمات، مسیر درست را انتخاب کنید. {0, string)', // The path to your image library is not correct. Please set the correct path in your image preferences. {0}
    'imageProcessFailed' => 'پردازش تصویر با مشکل روبرو شد. لطفا مطمئن شوید که سرور تنظیمات انتخابی شما را پشتیبانی می‌کند و مسیر کتابخانه‌ی عکس صحیح است.', // Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.
    'rotationAngleRequired' => 'برای چرخش تصویر، لطفا زاویه‌ی چرخش را ارائه کنید.', // An angle of rotation is required to rotate the image.
    'invalidPath' => 'نشانی تصویر انتخابی شما صحیح نیست.', // The path to the image is not correct.
    'copyFailed' => 'کپی کردن تصویر با مشکل روبرو شد.', // The image copy routine failed.
    'missingFont' => 'برای استفاده، لطفا یک فونت انتخاب کنید.', // Unable to find a font to use.
    'saveFailed' => 'مشکل در ذخیره کردن تصویر. لطفا مطمئن شوید که فایل و شاخه‌ی مورد نظر قابل نوشتن هستند.', // Unable to save the image. Please make sure the image and file directory are writable.
    'invalidDirection' => 'تقارن فقط می‌تواند افقی (`vertical`) یا عمودی (`horizontal`)) باشد. مقدار ارائه شده: {0}', // Flip direction can be only `vertical` or `horizontal`. Given: {0}
    'exifNotSupported' => 'در نسخه‌ی PHP نصب شده‌ی شما، EXIF پشتیبانی نمی‌شود.', // Reading EXIF data is not supported by this PHP installation.
];
