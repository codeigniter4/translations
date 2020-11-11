<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
   'missingTable'      => 'جدول مایگریشن تنظیم نشده است.',
//   'invalidType'       => 'یک نوع شماره گذاری نامعتبر برای مایگریشن مشخص شده است: {0}',
   'disabled'          => 'مایگریشن‌ها لارگزاری شده‌اند، اما غیرفعالند یا درست تنظیم نشده اند.',
   'notFound'          => 'فایل مایگریشن پیدا نشد: ',
   'batchNotFound'     => 'Target batch not found: ',
   'empty'             => 'هیچ فایل مایگریشنی پیدا نشد.',
   'gap'               => 'فاصله ای در دنباله‌ی مایگریشن در نزدیک این ورژن وجود دارد: ',
   'classNotFound'     => 'کلاس مایگریشن "%s" پیدا نشد.',
   'missingMethod'     => 'کلاس مایگریشن متد "%s" را ندارد.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigrates database to latest available migration.",
   'migHelpCurrent'    => "\t\tMigrates database to version set as 'current' in configuration.",
   'migHelpVersion'    => "\tMigrates database to version {v}.",
   'migHelpRollback'   => "\tRuns all migrations 'down' to version 0.",
   'migHelpRefresh'    => "\t\tUninstalls and re-runs all migrations to freshen database.",
   'migHelpSeed'       => "\tRuns the seeder named [name].",
   'migCreate'         => "\tCreates a new migration named [name]",
   'nameMigration'     => 'Name the migration file',
   'badCreateName'     => 'You must provide a migration file name.',
   'writeError'        => 'Error trying to create file.',
   'migNumberError'    => 'Migration number must be three digits, and there must not be any gaps in the sequence.',

//   'toLatest'          => 'Migrating to latest version...',
   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
   'migInvalidVersion' => 'Invalid version number provided.',
   'toVersionPH'       => 'Migrating to version %s...',
   'toVersion'         => 'Migrating to current version...',
   'rollingBack'       => 'Rolling back all migrations...',
   'noneFound'         => 'No migrations were found.',
   'on'                => 'Migrated On: ',
   'migSeeder'         => 'Seeder name',
   'migMissingSeeder'  => 'You must provide a seeder name.',
   'removed'           => 'Rolling back: ',
   'added'             => 'Running: ',

   'version'           => 'Version',
   'filename'          => 'Filename',
];
