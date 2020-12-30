<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
	'missingTable'  => 'Migrations ටේබල් එක සැකසිය යුතුය.', // Migrations table must be set.
	'disabled'      => 'Migrations load කර ඇති නමුත් අක්‍රීය හෝ වැරදි ලෙස සකසා ඇත.', // Migrations have been loaded but are disabled or setup incorrectly.
	'notFound'      => 'Migration ගොනුව සොයාගත නොහැක: ', // Migration file not found:
	'batchNotFound' => 'Target batch එක සොයාගත නොහැක: ', // Target batch not found:
	'empty'         => 'Migration ගොනු කිසිවක් සොයාගත නොහැක', // No Migration files found
	'gap'           => 'Version number එක අසල migration sequence හි පරතරයක් ඇත: ', // There is a gap in the migration sequence near version number:
	'classNotFound' => 'Migration class "%s" සොයාගත නොහැක.', // The migration class "%s" could not be found.
	'missingMethod' => 'Migration class හි "%s" method එකක් නොමැත.', // The migration class is missing an "%s" method.

	// Migration Command
	'migHelpLatest'   => "\t\tDatabase එක පවතින නවතම migration එක වෙත migrate කරයි.", // \t\tMigrates database to latest available migration.
	'migHelpCurrent'  => "\t\tConfiguration හි 'current' ලෙස දක්වා ඇති version එක වෙත database එක migrate කරයි.", // \t\tMigrates database to version set as 'current' in configuration.
	'migHelpVersion'  => "\tDatabase එක {v} version එකට migrate කරයි.", // \tMigrates database to version {v}.
	'migHelpRollback' => "\tසියලුම migrations version 0 වෙත පහළට ධාවනය කරයි.", // \tRuns all migrations 'down' to version 0.
	'migHelpRefresh'  => "\t\tසියලුම migrations uninstall කර නවතම database එකක් වෙත නැවතත් ධාවනය කරයි.", // \t\tUninstalls and re-runs all migrations to freshen database.
	'migHelpSeed'     => "\t[name] නම් seeder එක ධාවනය කරයි.", // \tRuns the seeder named [name].
	'migCreate'       => "\t[name] නමින් නව migration එකක් නිර්මාණය කරයි", // \tCreates a new migration named [name]
	'nameMigration'   => 'Migration file එක නම් කරන්න', // Name the migration file
	'migNumberError'  => 'Migration අංකය ඉලක්කම් තුනක් විය යුතු අතර sequence එකෙහි කිසිදු gap එකක් නොතිබිය යුතුය.', // Migration number must be three digits, and there must not be any gaps in the sequence.
	'rollBackConfirm' => 'ඔබට විශ්වාසද ඔබට rollback කිරීමට අවශ්‍යයි කියල?', // Are you sure you want to rollback?
	'refreshConfirm'  => 'ඔබට විශ්වාසද ඔබට refresh කිරීමට අවශ්‍යයි කියල?', // Are you sure you want to refresh?

	'latest'            => 'සියලුම නව migrations ධාවනය කරමින්...', // Running all new migrations...
	'generalFault'      => 'Migration එක අසාර්ථක විය!', // Migration failed!
	'migInvalidVersion' => 'අවලංගු version number එකක් සපයා ඇත.', // Invalid version number provided.
	'toVersionPH'       => '%s version එක වෙත migrating වෙමින්...', // Migrating to version %s...
	'toVersion'         => 'වත්මන් version එක වෙත migrating වෙමින්...', // Migrating to current version...
	'rollingBack'       => 'Migrations ආපසු පෙරළනව කට්ටලය: ', // Rolling back migrations to batch:
	'noneFound'         => 'Migrations කිසිවක් හමු නොවීය.', // No migrations were found.
	'migSeeder'         => 'Seeder නාමය', // Seeder name
	'migMissingSeeder'  => 'ඔබ Seeder නාමයක් ලබා දිය යුතුය.', // You must provide a seeder name.
	'nameSeeder'        => 'Seeder ගොනුව නම් කරන්න', // Name the seeder file
	'removed'           => 'ආපසු පෙරළීම: ', // Rolling back:
	'added'             => 'ධාවනය: ', // Running:

	// Migrate Status
	'namespace' => 'නේම්ස්පේස්', // Namespace
	'filename'  => 'ගොනුනාමය', // Filename
	'version'   => 'සංස්කරණය', // Version
	'group'     => 'සමුහය', // Group
	'on'        => 'Migrate වී ඇත්තේ: ', // Migrated On:
	'batch'     => 'කට්ටලය', // Batch
];
