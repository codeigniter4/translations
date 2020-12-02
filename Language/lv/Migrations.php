<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Migrations language settings
return [
	// Migration Runner
	'missingTable'  => 'Jābūt iestatītai migrāciju tabulai.',
	'disabled'      => 'Migrācijas ir ielādētas, bet ir atspējotas vai nepareizi iestatītas.',
	'notFound'      => 'Migrācijas fails nav atrasts: ',
	'batchNotFound' => 'Mērķa partija nav atrasta: ',
	'empty'         => 'Migrāciju faili nav atrasti.',
	'gap'           => 'Blakus versijas numuram migrāciju secībā ir pārrāvums: ',
	'classNotFound' => 'Nevar atrast migrācijas klasi: "%s".',
	'missingMethod' => 'Migrācijas klasē nav "%s" metode.',

	// Migration Command
	'migHelpLatest'     => "\t\tMigrē datu bāzi uz jaunāko pieejamo migrāciju.",
	'migHelpCurrent'    => "\t\tMigrē datu bāzi uz versiju, kas konfigurācijā iestatīta kā `current`.",
	'migHelpVersion'    => "\tMigrē datu bāzi uz versiju {v}.",
	'migHelpRollback'   => "\tIzpilda visas migrācijas ar metodi 'down' līdz versijai 0.",
	'migHelpRefresh'    => "\t\tAtinstalē un atkārtoti izpilda visas migrācijas, lai atjaunotu datu bāzi.",
	'migHelpSeed'       => "\tIzpilda SEEDER ar nosaukumu [name].",
	'migCreate'         => "\tIzveido jaunu migrāciju ar nosaukumu [name]",
	'nameMigration'     => 'Nosauciet migrācijas failu',
	'migNumberError'    => 'Migrācijas numuram ir jābūt trīs cipariem, un virknē nedrīkst būt atstarpes.',
	'rollBackConfirm'   => 'Vai tiešām vēlaties atcelt?',
	'refreshConfirm'    => 'Vai tiešām vēlaties atjaunot?',
	'latest'            => 'Izpilda visas jaunās migrācijas...',
	'generalFault'      => 'Migrācija neizdevās!',
	'migInvalidVersion' => 'Norādīts nederīgs versijas numurs.',
	'toVersionPH'       => 'Migrē uz versiju %s...',
	'toVersion'         => 'Migrē uz pašreizējo versiju...',
	'rollingBack'       => 'Atgriež migrācijas uz: ',
	'noneFound'         => 'Migrācijas netika atrastas.',
	'migSeeder'         => 'SEEDER nosaukums',
	'migMissingSeeder'  => 'Jums ir jānorāda SEEDER nosaukums.',
	'nameSeeder'        => 'Nosauciet SEEDER failu',
	'removed'           => 'Atgriež atpakaļ: ',
	'added'             => 'Izpilda: ',

	// Migrate Status
	'namespace' => 'Nosaukumvieta',
	'filename'  => 'Faila nosaukums',
	'version'   => 'Versija',
	'group'     => 'Grupa',
	'on'        => 'Migrēts uz: ',
	'batch'     => 'Partija',
];
