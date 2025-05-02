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

// Publisher language settings
return [
    'collision'             => 'واجه الناشر "{0}" غير متوقع أثناء نسخ "{1}" إلى "{2}".',
    'destinationNotAllowed' => 'الوجهة ليست في القائمة المسموح بها من دلائل الناشر: "{0}"',
    'fileNotAllowed'        => '"{0}" لا يجتاز التقييد التالي لـ "{1}": {2}',

    // Publish Command
    'publishMissing'          => 'لم يتم اكتشاف أي فئات ناشر (Publisher) في {0} عبر جميع مساحات الأسماء (namespaces).',
    'publishMissingNamespace' => 'لم يتم اكتشاف أي فئات ناشر (Publisher) في {0} في مساحة الاسم {1}.',
    'publishSuccess'          => 'قام "{0}" بنشر {1} ملف (ملفات) إلى "{2}".',
    'publishFailure'          => 'فشل "{0}" في النشر إلى "{1}".',
];
