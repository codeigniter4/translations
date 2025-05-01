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

// Cookie language settings
return [
    'invalidExpiresTime'    => 'نوع "{0}" غير صالح لخاصية "Expires". المتوقع: string، integer، كائن DateTimeInterface.',
    'invalidExpiresValue'   => 'وقت انتهاء صلاحية الكوكي (ملف تعريف الارتباط) غير صالح.',
    'invalidCookieName'     => 'اسم الكوكي "{0}" يحتوي على أحرف غير صالحة.',
    'emptyCookieName'       => 'لا يمكن أن يكون اسم الكوكي فارغاً.',
    'invalidSecurePrefix'   => 'استخدام البادئة "__Secure-" يتطلب تعيين خاصية "Secure".',
    'invalidHostPrefix'     => 'استخدام البادئة "__Host-" يجب أن يتم تعيينه مع علامة "Secure"، ويجب ألا يحتوي على خاصية "Domain"، وأن يكون المسار "Path" معينًا إلى "/".',
    'invalidSameSite'       => 'قيمة SameSite يجب أن تكون None، Lax، Strict أو سلسلة نصية فارغة، تم إعطاء {0}.',
    'invalidSameSiteNone'   => 'استخدام الخاصية "SameSite=None" يتطلب تعيين خاصية "Secure".',
    'invalidCookieInstance' => 'الصنف "{0}" توقع أن تكون مصفوفة الكوكيز عبارة عن نُسخ من "{1}" ولكن حصل على "{2}" عند الفهرس {3}.',
    'unknownCookieInstance' => 'كائن الكوكي بالاسم "{0}" والبادئة "{1}" لم يتم العثور عليه في المجموعة.',
];
