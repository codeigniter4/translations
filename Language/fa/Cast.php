<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cast language settings
return [
    'baseCastMissing' => 'کلاس "{0}" باید کلاس "CodeIgniter\Entity\Cast\BaseCast" را به ارث ببرد.', // The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.
    'invalidCastMethod' => '"{0}" روش ارسال نامعتبر است، روش‌های معتبر عبارتند از: ["get"، "set"].', // The "{0}" is invalid cast method, valid methods are: ["get", "set"].
    'invalidTimestamp' => 'نوع ارسال "timestamp" انتظار یک timestamp صحیح را دارد.', // Type casting "timestamp" expects a correct timestamp.
    'jsonErrorCtrlChar' => 'کاراکتر کنترل غیرمنتظره پیدا شد.', // Unexpected control character found.
    'jsonErrorDepth' => 'از حداکثر اندازه دسته بیشتر شد.', // Maximum stack depth exceeded.
    'jsonErrorStateMismatch' => 'Underflow یا عدم تطابق حالت ها.', // Underflow or the modes mismatch.
    'jsonErrorSyntax' => 'خطای نحوی، JSON نادرست است.', // Syntax error, malformed JSON.
    'jsonErrorUnknown' => 'خطای ناشناخته.', // Unknown error.
    'jsonErrorUtf8' => 'کاراکترهای UTF-8 نادرست، احتمالاً به اشتباه کدگذاری شده‌اند.', // Malformed UTF-8 characters, possibly incorrectly encoded.
];
