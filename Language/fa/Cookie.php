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
    'invalidExpiresTime'    => 'نوع «{0}» برای ویژگی «انقضا» نامعتبر است. مورد انتظار: رشته، عدد صحیح، شیء DateTimeInterface.', // Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.
    'invalidExpiresValue'   => 'زمان انقضای کوکی معتبر نیست.', // The cookie expiration time is not valid.
    'invalidCookieName'     => 'نام کوکی "{0}" حاوی نویسه های نامعتبر است.', // The cookie name "{0}" contains invalid characters.
    'emptyCookieName'       => 'نام کوکی نمی تواند خالی باشد.', // The cookie name cannot be empty.
    'invalidSecurePrefix'   => 'استفاده از پیشوند "__Secure-" مستلزم تنظیم ویژگی "Secure" است.', // Using the "__Secure-" prefix requires setting the "Secure" attribute.
    'invalidHostPrefix'     => 'استفاده از پیشوند "__Host-" باید با پرچم "Secure" تنظیم شود، نباید ویژگی "Domain" داشته باشد و "مسیر" روی "/" تنظیم شده است.', // Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".
    'invalidSameSite'       => 'مقدار SameSite باید None، Lax، Strict یا یک رشته خالی، {0} داده شده باشد.', // The SameSite value must be None, Lax, Strict or a blank string, {0} given.
    'invalidSameSiteNone'   => 'استفاده از ویژگی "SameSite = None" مستلزم تنظیم ویژگی "Secure" است.', // Using the "SameSite=None" attribute requires setting the "Secure" attribute.

    'invalidCookieInstance' => 'کلاس "{0}" انتظار داشت که آرایه کوکی ها نمونه هایی از "{1}" باشند، اما در نمایه {3} "{2}" دریافت کردند.', 
    // "{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.

    'unknownCookieInstance' => 'شی کوکی با نام "{0}" و پیشوند "{1}" در مجموعه یافت نشد.', // Cookie object with name "{0}" and prefix "{1}" was not found in the collection.
];