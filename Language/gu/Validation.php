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

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'لم يتم تحديد مجموعات قواعد في تهيئة التحقق من الصحة.',
    'ruleNotFound'    => '"{0}" ليست قاعدة صالحة.',
    'groupNotFound'   => '"{0}" ليست مجموعة قواعد تحقق من الصحة.',
    'groupNotArray'   => 'مجموعة القواعد "{0}" يجب أن تكون مصفوفة.',
    'invalidTemplate' => '"{0}" ليس قالب تحقق من الصحة صالحًا.',

    // Rule Messages
    'alpha'                 => 'حقل {field} يمكن أن يحتوي على أحرف أبجدية فقط.',
    'alpha_dash'            => 'حقل {field} يمكن أن يحتوي على أحرف أبجدية رقمية، وشرطات سفلية، وشرطات فقط.',
    'alpha_numeric'         => 'حقل {field} يمكن أن يحتوي على أحرف أبجدية رقمية فقط.',
    'alpha_numeric_punct'   => 'حقل {field} يمكن أن يحتوي على أحرف أبجدية رقمية، ومسافات، والأحرف التالية فقط: ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'حقل {field} يمكن أن يحتوي على أحرف أبجدية رقمية ومسافات فقط.',
    'alpha_space'           => 'حقل {field} يمكن أن يحتوي على أحرف أبجدية ومسافات فقط.',
    'decimal'               => 'حقل {field} يجب أن يحتوي على رقم عشري.',
    'differs'               => 'حقل {field} يجب أن يختلف عن حقل {param}.',
    'equals'                => 'حقل {field} يجب أن يكون مطابقاً تماماً لـ: {param}.',
    'exact_length'          => 'حقل {field} يجب أن يكون بطول {param} حرف بالضبط.',
    'field_exists'          => 'حقل {field} يجب أن يكون موجوداً.',
    'greater_than'          => 'حقل {field} يجب أن يحتوي على رقم أكبر من {param}.',
    'greater_than_equal_to' => 'حقل {field} يجب أن يحتوي على رقم أكبر من أو يساوي {param}.',
    'hex'                   => 'حقل {field} يمكن أن يحتوي على أحرف سداسية عشرية فقط.',
    'in_list'               => 'حقل {field} يجب أن يكون واحداً من: {param}.',
    'integer'               => 'حقل {field} يجب أن يحتوي على عدد صحيح.',
    'is_natural'            => 'حقل {field} يمكن أن يحتوي على أرقام فقط.',
    'is_natural_no_zero'    => 'حقل {field} يمكن أن يحتوي على أرقام فقط ويجب أن يكون أكبر من الصفر.',
    'is_not_unique'         => 'حقل {field} يجب أن يحتوي على قيمة موجودة مسبقاً في قاعدة البيانات.',
    'is_unique'             => 'حقل {field} يجب أن يحتوي على قيمة فريدة.',
    'less_than'             => 'حقل {field} يجب أن يحتوي على رقم أصغر من {param}.',
    'less_than_equal_to'    => 'حقل {field} يجب أن يحتوي على رقم أصغر من أو يساوي {param}.',
    'matches'               => 'حقل {field} لا يطابق حقل {param}.',
    'max_length'            => 'حقل {field} لا يمكن أن يتجاوز {param} حرفًا في الطول.',
    'min_length'            => 'حقل {field} يجب أن يكون على الأقل {param} حرفًا في الطول.',
    'not_equals'            => 'حقل {field} لا يمكن أن يكون: {param}.',
    'not_in_list'           => 'حقل {field} يجب ألا يكون واحداً من: {param}.',
    'numeric'               => 'حقل {field} يجب أن يحتوي على أرقام فقط.',
    'regex_match'           => 'حقل {field} ليس بالتنسيق الصحيح.',
    'required'              => 'حقل {field} مطلوب.',
    'required_with'         => 'حقل {field} مطلوب عندما يكون {param} موجوداً.',
    'required_without'      => 'حقل {field} مطلوب عندما لا يكون {param} موجوداً.',
    'string'                => 'حقل {field} يجب أن يكون نصًا صالحًا.',
    'timezone'              => 'حقل {field} يجب أن يكون منطقة زمنية صالحة.',
    'valid_base64'          => 'حقل {field} يجب أن يكون سلسلة base64 صالحة.',
    'valid_email'           => 'حقل {field} يجب أن يحتوي على عنوان بريد إلكتروني صالح.',
    'valid_emails'          => 'حقل {field} يجب أن يحتوي على جميع عناوين البريد الإلكتروني الصالحة.',
    'valid_ip'              => 'حقل {field} يجب أن يحتوي على عنوان IP صالح.',
    'valid_url'             => 'حقل {field} يجب أن يحتوي على عنوان URL صالح.',
    'valid_url_strict'      => 'حقل {field} يجب أن يحتوي على عنوان URL صالح.', // Consider if 'strict' needs specific translation nuance
    'valid_date'            => 'حقل {field} يجب أن يحتوي على تاريخ صالح.',
    'valid_json'            => 'حقل {field} يجب أن يحتوي على json صالح.',

    // Credit Cards
    'valid_cc_num' => '{field} لا يبدو أنه رقم بطاقة ائتمان صالح.',

    // Files
    'uploaded' => '{field} ليس ملفاً محملاً صالحاً.',
    'max_size' => '{field} كبير جداً.',
    'is_image' => '{field} ليس ملف صورة محملاً صالحاً.',
    'mime_in'  => '{field} ليس له نوع mime صالح.',
    'ext_in'   => '{field} ليس له امتداد ملف صالح.',
    'max_dims' => '{field} إما ليست صورة، أو أنها أعرض أو أطول من اللازم.',
    'min_dims' => '{field} إما ليست صورة، أو أنها ليست عريضة أو طويلة بما يكفي.',
];
