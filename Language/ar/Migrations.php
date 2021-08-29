<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'يجب تحديد جدول التهجيرات.',
    'disabled'      => 'تم تحميل التهجيرات و لكن إما أنها معطلة أو أنه لم يتم إعدادها بشكل صحيح.',
    'notFound'      => 'لم يتم العثور على ملف التهجير: ',
    'batchNotFound' => 'لم يتم العثور على الحزمة الهدف: ',
    'empty'         => 'لم يتم العثور على ملفات التهجير.',
    'gap'           => 'هناك فراغ في سلسلة التهجيرات بالقرب من رقم الإصدار: ',
    'classNotFound' => 'لم يتم إيجاد صنف التهجير "%s".',
    'missingMethod' => 'يفتقد صنف التهجير للدالة "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tتهجير قاعدة البيانات إلى آخر نسخة تهجير متاحة.",
    'migHelpCurrent'  => "\t\tتهجير قاعدة البيانات إلى النسخة الحالية المحددة في الإعدادات.",
    'migHelpVersion'  => "\tتهجير قاعدة البيانات إلى الإصدار {v}.",
    'migHelpRollback' => "\tالتراجع عن جميع التهجيرات و العودة إلى الإصدار 0.",
    'migHelpRefresh'  => "\t\tإلغاء جميع التهجيرات ثم إعادة تنفيذها مرة أخرى و الحصول على قاعدة بيانات جديدة.",
    'migHelpSeed'     => "\tتنفيذ البزار المسمى [name].",
    'migCreate'       => "\tإنشاء تهجير جديد تحت اسم [name].",
    'nameMigration'   => 'تسمية ملف التهجير',
    'migNumberError'  => 'يجب أن يحتوي رقم التهجير على 3 خانات و بدون فراغات في السلسلة.',
    'rollBackConfirm' => 'هل أنت متأكد أنك تريد التراجع ؟',
    'refreshConfirm'  => 'هل أنت متأكد أنك تريد إعادة التحديث ؟',

    'latest'            => 'تنفيذ جميع التهجيرات الجديدة ...',
    'generalFault'      => 'لقد فشل التهجير !',
    'migInvalidVersion' => 'رقم إصدار غير صالح.',
    'toVersionPH'       => 'يتم التهجير إلى الإصدار %s...',
    'toVersion'         => 'يتم التهجير إلى الإصدار الحالي...',
    'rollingBack'       => 'يتم التراجع عن حزمة التهجيرات: ',
    'noneFound'         => 'لم يتم العثور على تهجيرات.',
    'migSeeder'         => 'اسم البزار',
    'migMissingSeeder'  => 'يجب أن تدخل اسم للبزار.',
    'nameSeeder'        => 'تسمية ملف البزار.',
    'removed'           => 'يتم التراجع: ',
    'added'             => 'يتم التنفيذ: ',

    // Migrate Status
    'namespace' => 'فضاء الاسم',
    'filename'  => 'اسم الملف',
    'version'   => 'الإصدار',
    'group'     => 'المجموعة',
    'on'        => 'تاريخ التهجير: ',
    'batch'     => 'الحزمة',
];
