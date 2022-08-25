<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => 'نوع داده {0} برای ویژگی "Expires" معتبر نیست. نوع داده های معتبر: string, integer, DateTimeInterface object.
',
    'invalidExpiresValue'   => 'زمان وارد شده برای تاریخ انقضا کوکی معتبر نیست.',
    'invalidCookieName'     => 'کوکی با نام "{0}" دارای کاراکتر های غیرمجاز می‌باشد.',
    'emptyCookieName'       => 'نام کوکی نمیتواند خالی باشد.',
    'invalidSecurePrefix'   => 'برای استفاده از پیشوند "__Secure-" باید ویژگی "Secure" را تنظیم کنید.',
    'invalidHostPrefix'     => 'استفاده از پیشوند "__Host-" باید با حالت secure باشد، همچنین نباید ویژگی "Domain" داشته باشد و "Path" باید برابر "/" باشد.',
    'invalidSameSite'       => 'مقدار SameSite باید برای یکی از مقادیر  None, Lax, Strict یا یک رشته خالی باشد، مقدار {0} وارد شده.',
    'invalidSameSiteNone'   => 'برای استفاده از ویژگی "SameSite=None" باید ویژگی "Secure" را تنظیم کنید.',
    'invalidCookieInstance' => '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.',
    'unknownCookieInstance' => 'کوکی با نام {0} و پیشوند {1} در collection پیدا نشد.',
];
