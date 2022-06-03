<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'لم يتم تحديد مجموعة قواعد التحقق في الاعدادات.',
    'ruleNotFound'    => '{0} هذه القاعدة غير صالحة.',
    'groupNotFound'   => '{0} مجموعة التحقق هذه غير صالحة.',
    'groupNotArray'   => '{0} مجموعة التحقق يجب أن تكون مصفوفة.',
    'invalidTemplate' => '{0} ليس قالب تحقق صالح.',

    // Rule Messages
    'alpha'                 => 'الحقل {field} يمكن أن يحتوي على أحرف.',
    'alpha_dash'            => 'الحقل {field} يمكن أن يحتوي على أحرف وأرقام أو شرطة أو شرطة سفلية.',
    'alpha_numeric'         => 'الحقل {field} يمكن أن يحتوي على أحرف وأرقام.',
    'alpha_numeric_punct'   => 'الحقل {field} يمكن أن يحتوي على أحرف و أرقام و فراغات و الرموز  ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'الحقل {field} يمكن أن يحتوي على أحرف وأرقام و فراغات.',
    'alpha_space'           => 'الحقل {field} يمكن أن يحتوي على أحرف و فراغات.',
    'decimal'               => 'الحقل {field} يجب أن يحتوي على رقم عشري.',
    'differs'               => 'الحقل {field} يجب أن يكون مختلف عن الحقل {param}.',
    'equals'                => 'الحقل {field} يجب أن يحتوي قيمة تساوي بالضبط: {param}.',
    'exact_length'          => 'الحقل {field} يجب أن يكون بطول {param} حرف.',
    'greater_than'          => 'الحقل {field} يجب أن يحتوي على قيمة أكبر من {param}.',
    'greater_than_equal_to' => 'الحقل {field} يجب أن يحتوي على قيمة أكبر من او يساوي {param}.',
    'hex'                   => 'الحقل {field} يمكن أن يحتوي فقط على المحارف المستخدمة في النظام الست عشري.',
    'in_list'               => 'الحقل {field} يجب أن يحتوي على أحد القيم: {param}.',
    'integer'               => 'الحقل {field} يجب أن يحتوي على رقم صحيح.',
    'is_natural'            => 'الحقل {field} يجب أن يحتوي على عدد.',
    'is_natural_no_zero'    => 'الحقل {field} يجب أن يحتوي على عدد أكبر من الصفر.',
    'is_not_unique'         => 'الحقل {field} يجب أن يحتوي على قيمة موجودة مسبقاً في قاعدة البيانات.',
    'is_unique'             => 'الحقل {field} يجب أن يحتوي على قيمة غير موجودة مسبقا.',
    'less_than'             => 'الحقل {field} يجب أن يحتوي على رقم أقل من {param}.',
    'less_than_equal_to'    => 'الحقل {field} يجب أن يحتوي على رقم أقل أو يساوي {param}.',
    'matches'               => 'الحقل {field} لا يساوي الحقل {param}.',
    'max_length'            => 'الحقل {field} يجب أن لا يتجاوز أكثر من {param} حرف.',
    'min_length'            => 'الحقل {field} يجب أن لا يقل عن {param} حرف.',
    'not_equals'            => 'الحقل {field} لا يمكن أن يحتوي على القيمة: {param}.',
    'not_in_list'           => 'الحقل {field} لا يمكن أن يحتوي على إحدى القيم: {param}.',
    'numeric'               => 'الحقل {field} يجب أن يحتوي على أرقام فقط.',
    'regex_match'           => 'الحقل {field} يجب أن يحتوي على الصيغة الصحيحة.',
    'required'              => 'الحقل {field} إجباري.',
    'required_with'         => 'الحقل {field} إجباري عندما تكون {param} موجود.',
    'required_without'      => 'الحقل {field} إجباري عندما تكون {param} غير موجود.',
    'string'                => 'الحقل {field} يجب أن يكون نص صالح.',
    'timezone'              => 'الحقل {field} يجب أن يحتوي منطقة زمنية صحيح.',
    'valid_base64'          => 'الحقل {field} يجب أن يحتوي على نص بصيغة base64.',
    'valid_email'           => 'الحقل {field} يجب أن يحتوي عنوان بريد إلكتروني صحيح.',
    'valid_emails'          => 'الحقل {field} يجب أن يحتوي على عناوين بريد إلكتروني صحيحة.',
    'valid_ip'              => 'الحقل {field} يجب أن يحتوي على عنوان أي بي.',
    'valid_url'             => 'الحقل {field} يجب أن يحتوي على رابط.',
    'valid_url_strict'      => 'الحقل {field} يجب أن يحتوي على رابط.',
    'valid_date'            => 'الحقل {field} يجب أن يحتوي على تاريخ صحيح.',

    // Credit Cards
    'valid_cc_num' => 'الحقل {field} يجب أن يحتوي على رقم بطاقة الائتمان صحيح.',

    // Files
    'uploaded' => 'الملف {field} ليس ملف مرفوع صحيح.',
    'max_size' => 'حجم الملف {field} كبير جدا.',
    'is_image' => 'الملف {field} ليس ملف صورة.',
    'mime_in'  => 'نوع الملف {field} ليس نوع صحيح.',
    'ext_in'   => 'امتداد الملف {field} ليس امتداد صحيح.',
    'max_dims' => 'الملف {field} اما انه ليس صورة او صورة ذات ارتفاع او عرض كبير جدا.',
];
