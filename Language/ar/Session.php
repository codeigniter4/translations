<?php

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
    'missingDatabaseTable'   => '`sessionSavePath` يجب أن يحتوي على إسم الجدول حتى يعمل النظام بشكل صحيح.',
    'invalidSavePath'        => 'نظام الجلسة: المسار المحدد "{0}" ليس مجلد, أو غير موجود ولا يمكن انشاؤه.',
    'writeProtectedSavePath' => 'نظام الجلسة: المسار المحدد "{0}" غير قابل للكتابة.',
    'emptySavePath'          => 'نظام الجلسة: لا يوجد مسار للحفظ.',
    'invalidSavePathFormat'  => 'نظام الجلسة: مسار خادم  Redis غير صحيح: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'يجب أن يحتوي إعداد SameSite على إحدى القيم التالية: ["None", "Lax", "Strict"] أو نص فارغ. القيمة التي تم وضعها هي {0}.',
];
