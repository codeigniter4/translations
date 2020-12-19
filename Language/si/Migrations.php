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
	'missingTable'      => 'Migrations table must be set.', // Migrations table must be set.
	'disabled'          => 'Migrations have been loaded but are disabled or setup incorrectly.', // Migrations have been loaded but are disabled or setup incorrectly.
	'notFound'          => 'Migration file not found: ', // Migration file not found: 
	'batchNotFound'     => 'Target batch not found: ', // Target batch not found: 
	'empty'             => 'No Migration files found', // No Migration files found
	'gap'               => 'There is a gap in the migration sequence near version number: ', // There is a gap in the migration sequence near version number: 
	'classNotFound'     => 'The migration class "%s" could not be found.', // The migration class "%s" could not be found.
	'missingMethod'     => 'The migration class is missing an "%s" method.', // The migration class is missing an "%s" method.

	// Migration Command
	'migHelpLatest'     => "\t\tMigrates database to latest available migration.", // \t\tMigrates database to latest available migration.
	'migHelpCurrent'    => "\t\tMigrates database to version set as 'current' in configuration.", // \t\tMigrates database to version set as 'current' in configuration.
	'migHelpVersion'    => "\tMigrates database to version {v}.", // \tMigrates database to version {v}.
	'migHelpRollback'   => "\tRuns all migrations 'down' to version 0.", // \tRuns all migrations 'down' to version 0.
	'migHelpRefresh'    => "\t\tUninstalls and re-runs all migrations to freshen database.", // \t\tUninstalls and re-runs all migrations to freshen database.
	'migHelpSeed'       => "\tRuns the seeder named [name].", // \tRuns the seeder named [name].
	'migCreate'         => "\tCreates a new migration named [name]", // \tCreates a new migration named [name]
	'nameMigration'     => 'Name the migration file', // Name the migration file
	'migNumberError'    => 'Migration number must be three digits, and there must not be any gaps in the sequence.', // Migration number must be three digits, and there must not be any gaps in the sequence.
	'rollBackConfirm'   => 'Are you sure you want to rollback?', // Are you sure you want to rollback?
	'refreshConfirm'    => 'Are you sure you want to refresh?', // Are you sure you want to refresh?

	'latest'            => 'Running all new migrations...', // Running all new migrations...
	'generalFault'      => 'Migration failed!', // Migration failed!
	'migInvalidVersion' => 'Invalid version number provided.', // Invalid version number provided.
	'toVersionPH'       => 'Migrating to version %s...', // Migrating to version %s...
	'toVersion'         => 'Migrating to current version...', // Migrating to current version...
	'rollingBack'       => 'Rolling back migrations to batch: ', // Rolling back migrations to batch: 
	'noneFound'         => 'No migrations were found.', // No migrations were found.
	'migSeeder'         => 'Seeder name', // Seeder name
	'migMissingSeeder'  => 'You must provide a seeder name.', // You must provide a seeder name.
	'nameSeeder'        => 'Name the seeder file', // Name the seeder file
	'removed'           => 'Rolling back: ', // Rolling back: 
	'added'             => 'Running: ', // Running: 

	// Migrate Status
	'namespace'         => 'Namespace', // Namespace
	'filename'          => 'Filename', // Filename
	'version'           => 'Version', // Version
	'group'             => 'Group', // Group
	'on'                => 'Migrated On: ', // Migrated On: 
	'batch'             => 'Batch', // Batch
];
