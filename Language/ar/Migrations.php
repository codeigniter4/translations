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

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'يجب تعيين جدول الترحيلات (Migrations).',
    'disabled'      => 'تم تحميل الترحيلات ولكنها معطلة أو تم إعدادها بشكل غير صحيح.',
    'notFound'      => 'ملف الترحيل غير موجود: ',
    'batchNotFound' => 'الدفعة المستهدفة غير موجودة: ',
    'empty'         => 'لم يتم العثور على أي ملفات ترحيل',
    'gap'           => 'هناك فجوة في تسلسل الترحيل بالقرب من رقم الإصدار: ',
    'classNotFound' => 'فئة الترحيل "%s" لا يمكن العثور عليها.',
    'missingMethod' => 'فئة الترحيل تفتقد دالة "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tيرحل قاعدة البيانات إلى أحدث ترحيل متاح.",
    'migHelpCurrent'  => "\t\tيرحل قاعدة البيانات إلى الإصدار المحدد كـ 'current' في التهيئة.",
    'migHelpVersion'  => "\tيرحل قاعدة البيانات إلى الإصدار {v}.",
    'migHelpRollback' => "\tيقوم بتشغيل جميع الترحيلات 'down' حتى الإصدار 0.",
    'migHelpRefresh'  => "\t\tيقوم بإلغاء تثبيت وإعادة تشغيل جميع الترحيلات لتحديث قاعدة البيانات.",
    'migHelpSeed'     => "\tيقوم بتشغيل Seeder المسمى [name].",
    'migCreate'       => "\tينشئ ترحيلًا جديدًا يسمى [name]",
    'nameMigration'   => 'اسم ملف الترحيل',
    'migNumberError'  => 'يجب أن يكون رقم الترحيل ثلاثة أرقام، ويجب ألا تكون هناك أي فجوات في التسلسل.',
    'rollBackConfirm' => 'هل أنت متأكد أنك تريد التراجع؟',
    'refreshConfirm'  => 'هل أنت متأكد أنك تريد التحديث؟',

    'latest'            => 'جاري تشغيل جميع الترحيلات الجديدة...',
    'generalFault'      => 'فشل الترحيل!',
    'migrated'          => 'اكتملت الترحيلات.',
    'migInvalidVersion' => 'تم توفير رقم إصدار غير صالح.',
    'toVersionPH'       => 'الترحيل إلى الإصدار %s...',
    'toVersion'         => 'الترحيل إلى الإصدار الحالي...',
    'rollingBack'       => 'التراجع عن الترحيلات إلى الدفعة: ',
    'noneFound'         => 'لم يتم العثور على أي ترحيلات.',
    'migSeeder'         => 'اسم Seeder',
    'migMissingSeeder'  => 'يجب عليك توفير اسم Seeder.',
    'nameSeeder'        => 'اسم ملف Seeder',
    'removed'           => 'جاري التراجع: ',
    'added'             => 'جاري التشغيل: ',

    // Migrate Status
    'namespace' => 'مساحة الاسم (Namespace)',
    'filename'  => 'اسم الملف',
    'version'   => 'الإصدار',
    'group'     => 'المجموعة',
    'on'        => 'تاريخ الترحيل: ',
    'batch'     => 'الدفعة',
];
