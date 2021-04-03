<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migrations language settings
return [
	// Migration Runner
	'missingTable'  => 'Jābūt iestatītai migrāciju tabulai.', // 'Migrations table must be set.'
	'disabled'      => 'Migrācijas ir ielādētas, bet ir atspējotas vai nepareizi iestatītas.', // 'Migrations have been loaded but are disabled or setup incorrectly.'
	'notFound'      => 'Migrācijas fails nav atrasts: ', // 'Migration file not found: '
	'batchNotFound' => 'Mērķa partija nav atrasta: ', // 'Target batch not found: '
	'empty'         => 'Migrāciju faili nav atrasti.', // 'No Migration files found'
	'gap'           => 'Blakus versijas numuram migrāciju secībā ir pārrāvums: ', // 'There is a gap in the migration sequence near version number: '
	'classNotFound' => 'Nevar atrast migrācijas klasi: "%s".', // 'The migration class "%s" could not be found.'
	'missingMethod' => 'Migrācijas klasē nav "%s" metode.', // 'The migration class is missing an "%s" method.'

	// Migration Command
	'migHelpLatest'   => "\t\tMigrē datu bāzi uz jaunāko pieejamo migrāciju.", // '\t\tMigrates database to latest available migration.'
	'migHelpCurrent'  => "\t\tMigrē datu bāzi uz versiju, kas konfigurācijā iestatīta kā `current`.", // '\t\tMigrates database to version set as 'current' in configuration.'
	'migHelpVersion'  => "\tMigrē datu bāzi uz versiju {v}.", // '\tMigrates database to version {v}.'
	'migHelpRollback' => "\tIzpilda visas migrācijas ar metodi `down` līdz versijai 0.", // '\tRuns all migrations 'down' to version 0.'
	'migHelpRefresh'  => "\t\tAtinstalē un atkārtoti izpilda visas migrācijas, lai atjaunotu datu bāzi.", // '\t\tUninstalls and re-runs all migrations to freshen database.'
	'migHelpSeed'     => "\tIzpilda SEEDER ar nosaukumu [name].", // '\tRuns the seeder named [name].'
	'migCreate'       => "\tIzveido jaunu migrāciju ar nosaukumu [name]", // '\tCreates a new migration named [name]'
	'nameMigration'   => 'Nosauciet migrācijas failu', // 'Name the migration file'
	'migNumberError'  => 'Migrācijas numuram ir jābūt trīs cipariem, un virknē nedrīkst būt atstarpes.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.'
	'rollBackConfirm' => 'Vai tiešām vēlaties atcelt?', // 'Are you sure you want to rollback?'
	'refreshConfirm'  => 'Vai tiešām vēlaties atjaunot?', // 'Are you sure you want to refresh?'

	'latest'            => 'Izpilda visas jaunās migrācijas...', // 'Running all new migrations...'
	'generalFault'      => 'Migrācija neizdevās!', // 'Migration failed!'
	'migInvalidVersion' => 'Norādīts nederīgs versijas numurs.', // 'Invalid version number provided.'
	'toVersionPH'       => 'Migrē uz versiju %s...', // 'Migrating to version %s...'
	'toVersion'         => 'Migrē uz pašreizējo versiju...', // 'Migrating to current version...'
	'rollingBack'       => 'Atgriež migrācijas uz: ', // 'Rolling back migrations to batch: '
	'noneFound'         => 'Migrācijas netika atrastas.', // 'No migrations were found.'
	'migSeeder'         => 'SEEDER nosaukums', // 'Seeder name'
	'migMissingSeeder'  => 'Jums ir jānorāda SEEDER nosaukums.', // 'You must provide a seeder name.'
	'nameSeeder'        => 'Nosauciet SEEDER failu', // 'Name the seeder file'
	'removed'           => 'Atgriež atpakaļ: ', // 'Rolling back: '
	'added'             => 'Izpilda: ', // 'Running: '

	// Migrate Status
	'namespace' => 'Nosaukumvieta', // 'Namespace'
	'filename'  => 'Faila nosaukums', // 'Filename'
	'version'   => 'Versija', // 'Version'
	'group'     => 'Grupa', // 'Group'
	'on'        => 'Migrēts uz: ', // 'Migrated On: '
	'batch'     => 'Partija', // 'Batch'
];
