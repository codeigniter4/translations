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
    'missingTable' => 'جدول مایگریشن تنظیم نشده است.', // Migrations table must be set.
    'disabled'      => 'مایگریشن‌ها بارگزاری شده‌اند، اما غیرفعالند یا درست تنظیم نشده اند.', // Migrations have been loaded but are disabled or setup incorrectly.
    'notFound'      => 'فایل مایگریشن پیدا نشد: ', // Migration file not found:
    'batchNotFound' => 'دسته هدف پیدا نشد: ', // Target batch not found:
    'empty'         => 'هیچ فایل مایگریشنی پیدا نشد.', // No Migration files found.
    'gap'           => 'فاصله ای در دنباله‌ی مایگریشن در نزدیک این ورژن وجود دارد: ', // There is a gap in the migration sequence near version number:
    'classNotFound' => 'کلاس مایگریشن "%s" پیدا نشد.', // The migration class "%s" could not be found.
    'missingMethod' => 'کلاس مایگریشن متد "%s" را ندارد.', // The migration class is missing an "%s" method.

    // Migration Command
    'migHelpLatest'   => "\t\t پایگاه داده را به آخرین مایگریشن موجود منتقل می کند.", // \t\tMigrates database to latest available migration.
    'migHelpCurrent'  => "\t\t پایگاه داده را به نسخه تنظیم شده به عنوان 'جریان' در پیکربندی منتقل می کند.", // \t\tMigrates database to version set as 'current' in configuration.
    'migHelpVersion'  => "\t پایگاه داده را به نسخه {v} منتقل می کند.", // \tMigrates database to version {v}.
    'migHelpRollback' => "\tهمه مایگریشن ها را به سمت پایین به نسخه 0 اجرا می‌کند.", // \tRuns all migrations 'down' to version 0.
    'migHelpRefresh'  => "\t\tهمه مایگریشن ها را برای تازه کردن پایگاه داده حذف نصب و دوباره اجرا می کند.", // \t\tUninstalls and re-runs all migrations to freshen database.
    'migHelpSeed'     => "\t seeder به نام [name] را اجرا می کند.", // \tRuns the seeder named [name].
    'migCreate'       => "\tیک مایگریشن جدید به نام [name] ایجاد می کند", // \tCreates a new migration named [name]
    'nameMigration'   => '.فایل مایگریشن را نامگذاری کنید', // Name the migration file
    'migNumberError'  => 'شماره مایگریشن باید سه رقمی باشد و هیچ شکافی در ترتیب وجود نداشته باشد', // Migration number must be three digits, and there must not be any gaps in the sequence.
    'rollBackConfirm' => 'آیا مطمئنید که می خواهید به عقب برگردید؟', // Are you sure you want to rollback?
    'refreshConfirm'  => 'آیا مطمئن هستید که می خواهید بازخوانی کنید؟', // Are you sure you want to refresh?

    'latest'            => 'اجرای همه مایگریشن های جدید...', // Running all new migrations...
    'generalFault'      => 'مایگریشن ناموفق بود!', // Migration failed!
    'migInvalidVersion' => 'شماره نسخه نامعتبر ارائه شده است.', // Invalid version number provided.
    'toVersionPH'       => 'در حال انتقال به نسخه %s...', // Migrating to version %s...
    'toVersion'         => 'در حال انتقال به نسخه فعلی...', // Migrating to current version...
    'rollingBack'       => 'بازگشت مجدد مایگریشن ها به دسته:', // Rolling back migrations to batch:
    'noneFound'         => 'هیچ مایگریشنی پیدا نشد.', // No migrations were found.
    'migSeeder'         => 'نام Seeder', // Seeder name
    'migMissingSeeder'  => 'شما باید یک نام Seeder ارائه کنید.', // You must provide a seeder name.
    'nameSeeder'        => 'فایل seder را نام ببرید', // Name the seeder file
    'removed'           => 'برگشتن:', // Rolling back:
    'added'             => 'در حال اجرا:', // Running:

    // Migrate Status
    'namespace' => 'فضای نام',
    'filename'  => 'نام فایل',
    'version'   => 'نسخه',
    'group'     => 'گروه',
    'on'        => 'Migrated در: ', // Migrated On:
    'batch'     => 'دسته',
];
