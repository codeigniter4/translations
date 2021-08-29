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
    'invalidExpiresTime'    => 'إن النوع "{0}" غير صالح من أجل الخاصية "Expires". يجب أن يكون النوع هو نص أو عدد صحيح أو كائن من النوع DateTimeInterface.',
    'invalidExpiresValue'   => 'إن تاريخ صلاحية إنتهاء ملف تعريف الإرتباط غير صالح.',
    'invalidCookieName'     => 'اسم ملف تعريف الإرتباط "{0}" يحتوي على محارف غير صالحة.',
    'emptyCookieName'       => 'اسم ملف تعريف الإرتباط غير صالح.',
    'invalidSecurePrefix'   => 'إن إستخدام البادئة "__Secure-" يتطلب إعداد الخاصية "Secure".',
    'invalidHostPrefix'     => 'إن إستخدام البادئة "__Host-" يجب أن يشتمل على تحديد الخاصية "Secure", و يجب ألا يكون هناك خاصية "Domain", كمان أن قيمة الخاصية "Path" يجب أن تكون "/".',
    'invalidSameSite'       => 'يجب أن تحمل الخاصية SameSite القيمة None, Lax, Strict أو نص فارغ, {0} تم كتابة.',
    'invalidSameSiteNone'   => 'إن إستخدام الخاصية"SameSite=None" يتطلب إعداد الخاصية "Secure".',
    'invalidCookieInstance' => 'إن الصنف "{0}" يحتاج إلى أن تكون مصفوفة ملفات تعريف الإرتباط من النوع "{1}" و لكن تم تقديم النوع "{2}" في الفهرس "{3}"',
    'unknownCookieInstance' => 'لم يتم العثور على ملف تعريف إرتباط يحمل الاسم "{0}" و اللاحقة "{1}".',
];
