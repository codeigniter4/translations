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

// Session language settings
return [
    'missingDatabaseTable'   => '"sessionSavePath" يجب أن يحتوي على اسم الجدول لمعالج جلسات قاعدة البيانات ليعمل.',
    'invalidSavePath'        => 'الجلسة: مسار الحفظ المهيأ "{0}" ليس دليلاً، أو غير موجود، أو لا يمكن إنشاؤه.',
    'writeProtectedSavePath' => 'الجلسة: مسار الحفظ المهيأ "{0}" غير قابل للكتابة بواسطة عملية PHP.',
    'emptySavePath'          => 'الجلسة: لم يتم تهيئة مسار حفظ.',
    'invalidSavePathFormat'  => 'الجلسة: تنسيق مسار حفظ Redis غير صالح: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'الجلسة: يجب أن يكون إعداد SameSite إما None أو Lax أو Strict أو سلسلة فارغة. المعطى: "{0}"',
];
