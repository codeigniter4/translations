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
    'missingTable'  => 'جدول مایگریشن تنظیم نشده است.',
    'disabled'      => 'مایگریشن‌ها بارگذاری شده‌اند، اما غیرفعالند یا درست تنظیم نشده اند.',
    'notFound'      => 'فایل مایگریشن پیدا نشد: ',
    'batchNotFound' => 'batch مورد نظر پیدا نشد: ',
    'empty'         => 'هیچ فایل مایگریشنی پیدا نشد.',
    'gap'           => 'فاصله ای در دنباله‌ی مایگریشن در نزدیک این ورژن وجود دارد: ',
    'classNotFound' => 'کلاس مایگریشن "%s" پیدا نشد.',
    'missingMethod' => 'کلاس مایگریشن متد "%s" را ندارد.',

    // Migration Command
    'migHelpLatest'   => "\t\tمایگریت دستابیس به آخرین مایگریشن در دسترس.",
    'migHelpCurrent'  => "\t\tمایگریت دیتابیس به نسخه ای که به عنوان '.",
    'migHelpVersion'  => "\tمایگریت دیتابیس به ورژن {v}.",
    'migHelpRollback' => "\tاجرای نسخه 0 همه مایگریشن ها.",
    'migHelpRefresh'  => "\t\tحذف و اجرای مجدد همه‌ی مایگریشن ها برای تازه سازی دیتابیس.",
    'migHelpSeed'     => "\tاجرای سیدر [name].",
    'migCreate'       => "\tایجاد مایگریشن جدید با نام [name]",
    'nameMigration'   => 'نام فایل مایگریشن',
    'migNumberError'  => 'شماره مایگریشن باید سه رقم و بدون فاصله باشد.',
    'rollBackConfirm' => 'آیا میخواهید rollback کنید؟',
    'refreshConfirm'  => 'آیا میخواهید refresh کنید؟',

    'latest'            => 'اجرای همه‌ی مایگریشن ها...',
    'generalFault'      => 'مایگریشن با شکست مواجه شد!',
    'migrated'          => 'مایگریشن ها تکمیل شد.',
    'migInvalidVersion' => 'شماره ورژن نامعتبر.',
    'toVersionPH'       => 'مایگریت به ورژن %s...',
    'toVersion'         => 'مایگریت به ورژن فعلی...',
    'rollingBack'       => 'عقب گرد کردن مایگریشن ها به دسته: ',
    'noneFound'         => 'هیچ مایگریشنی پیدا نشد.',
    'migSeeder'         => 'نام سیدر',
    'migMissingSeeder'  => 'باید نام سیدر را وارد کنید.',
    'nameSeeder'        => 'نام فایل سیدر را وارد کنید',
    'removed'           => 'عقب گرد: ',
    'added'             => 'درحال اجرا: ',

    // Migrate Status
    'namespace' => 'فضای نام',
    'filename'  => 'نام فایل',
    'version'   => 'ورژن',
    'group'     => 'گروه',
    'on'        => 'مایگریت شده در: ',
    'batch'     => 'دسته',
];
