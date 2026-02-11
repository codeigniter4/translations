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

// CLI language settings
return [
    'altCommandPlural'   => 'هل كنت تعني إحدى هذه الأوامر؟',
    'altCommandSingular' => 'هل كنت تعني هذا؟',
    'commandNotFound'    => 'الأمر "{0}" غير موجود.',
    'generator'          => [
        'cancelOperation' => 'تم إلغاء العملية.',
        'className'       => [
            'cell'        => 'اسم فئة الخلية (Cell class)',
            'command'     => 'اسم فئة الأمر (Command class)',
            'config'      => 'اسم فئة الإعدادات (Config class)',
            'controller'  => 'اسم فئة المتحكم (Controller class)',
            'default'     => 'اسم الفئة',
            'entity'      => 'اسم فئة الكيان (Entity class)',
            'filter'      => 'اسم فئة المرشح (Filter class)',
            'migration'   => 'اسم فئة الترحيل (Migration class)',
            'model'       => 'اسم فئة النموذج (Model class)',
            'seeder'      => 'اسم فئة الباذر (Seeder class)',
            'test'        => 'اسم فئة الاختبار (Test class)',
            'transformer' => 'اسم فئة المحوّل (Transformer class)',
            'validation'  => 'اسم فئة التحقق (Validation class)',
        ],
        'commandType'      => 'نوع الأمر',
        'databaseGroup'    => 'مجموعة قاعدة البيانات',
        'fileCreate'       => 'تم إنشاء الملف: {0}',
        'fileError'        => 'خطأ أثناء إنشاء الملف: "{0}"',
        'fileExist'        => 'الملف موجود مسبقاً: "{0}"',
        'fileOverwrite'    => 'تمت الكتابة فوق الملف: "{0}"',
        'parentClass'      => 'الفئة الأب (Parent class)',
        'returnType'       => 'نوع الإرجاع (Return type)',
        'tableName'        => 'اسم الجدول',
        'usingCINamespace' => 'تحذير: استخدام مساحة الأسماء "CodeIgniter" سيؤدي إلى توليد الملف في دليل النظام (system directory).',
        'viewName'         => [
            'cell' => 'اسم عرض الخلية (Cell view)',
        ],
    ],
    'helpArguments'       => 'الوسائط (Arguments):',
    'helpDescription'     => 'الوصف:',
    'helpOptions'         => 'الخيارات:',
    'helpUsage'           => 'الاستخدام:',
    'invalidColor'        => 'اللون "{0}" غير صالح: "{1}".',
    'namespaceNotDefined' => 'مساحة الأسماء "{0}" غير معرفة.',
    'signals'             => [
        'noPcntlExtension' => 'ملحق PCNTL غير متاح. تم تعطيل معالجة الإشارات (Signal handling).',
        'noPosixExtension' => 'معالجة SIGTSTP/SIGCONT تتطلب ملحق POSIX. ستتم إزالة هذه الإشارات من التسجيل.',
        'failedSignal'     => 'فشل تسجيل المعالج للإشارة: "{0}".',
    ],
];
