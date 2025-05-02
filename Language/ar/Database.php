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

// Database language settings
return [
    'invalidEvent'                     => '"{0}" ليس استدعاءً صالحًا لحدث نموذج.',
    'invalidArgument'                  => 'يجب عليك تقديم "{0}" صالح.',
    'invalidAllowedFields'             => 'يجب تحديد الحقول المسموح بها للنموذج: "{0}"',
    'emptyDataset'                     => 'لا توجد بيانات لـ {0}.',
    'emptyPrimaryKey'                  => 'لم يتم تعريف مفتاح أساسي عند محاولة إجراء {0}.',
    'failGetFieldData'                 => 'فشل الحصول على بيانات الحقول من قاعدة البيانات.',
    'failGetIndexData'                 => 'فشل الحصول على بيانات الفهارس من قاعدة البيانات.',
    'failGetForeignKeyData'            => 'فشل الحصول على بيانات المفاتيح الأجنبية من قاعدة البيانات.',
    'parseStringFail'                  => 'فشل تحليل سلسلة المفتاح.',
    'featureUnavailable'               => 'هذه الميزة غير متاحة لقاعدة البيانات التي تستخدمها.',
    'tableNotFound'                    => 'الجدول "{0}" لم يتم العثور عليه في قاعدة البيانات الحالية.',
    'noPrimaryKey'                     => 'فئة النموذج "{0}" لا تحدد مفتاحًا أساسيًا.',
    'noDateFormat'                     => 'فئة النموذج "{0}" ليس لديها تنسيق تاريخ صالح.',
    'fieldNotExists'                   => 'الحقل "{0}" غير موجود.',
    'forEmptyInputGiven'               => 'تم تقديم عبارة فارغة للحقل "{0}"',
    'forFindColumnHaveMultipleColumns' => 'يسمح بعمود واحد فقط في اسم العمود.',
    'methodNotAvailable'               => 'لا يمكنك استخدام "{1}" في "{0}". هذه دالة من فئة بناء الاستعلامات.',
];
