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
	'missingTable'  => 'Musí byť nastavená tabulka migrací.',
	'disabled'      => 'Migrace byly načteny, ale jsou deaktivované nebo špatně nastavené.',
	'notFound'      => 'Migrační soubor nebyl nalezen: ',
	'batchNotFound' => 'Cílová dávka nebyla nalezena: ',
	'empty'         => 'Nenalezeny žádné migrační soubory',
	'gap'           => 'V migrační sekvenci u čísle verze je mezera: ',
	'classNotFound' => 'Migrační třídu "%s" se nepodařilo najít.',
	'missingMethod' => 'V migrační třídě chybí metoda "%s".',

	// Migration Command
	'migHelpLatest'   => "\t\tMigruje databázi na nejnovější dostupnou migraci.",
	'migHelpCurrent'  => "\t\tMigruje databázi na verzi nastavenou v konfiguraci jako aktuální.",
	'migHelpVersion'  => "\tMigruje databázi na verzi {v}.",
	'migHelpRollback' => "\tSpustí všechny migrace vrácením na verzi 0.",
	'migHelpRefresh'  => "\t\tOdinstaluje a znovu spustí všechny migrace do nové databáze.",
	'migHelpSeed'     => "\tSpustí seeder se jménem [ name ].",
	'migCreate'       => "\tVytvoří novou migraci s názvem [ name ]",
	'nameMigration'   => 'Pojmenujte migrační soubor',
	'migNumberError'  => 'migrační číslo musí být tři číslice a v sekvenci nesmí být mezery.',

	'latest'            => 'Spouštění všech nových migrací...',
	'generalFault'      => 'Migrace selhala!',
	'migInvalidVersion' => 'Zadáno neplatné číslo verze.',
	'toVersionPH'       => 'Probíhá migrace na verzi %s ...',
	'toVersion'         => 'Probíhá migrace na aktuální verzi ...',
	'rollingBack'       => 'Vracejí se zpět všechny migrace ...',
	'noneFound'         => 'Nenašly se žádné migrace.',
	'on'                => 'Zmigrováno na: ',
	'migSeeder'         => 'Jméno seederu',
	'migMissingSeeder'  => 'Musíte zadat jméno seederu.',
	'removed'           => 'Vracím: ',
	'added'             => 'Běží: ',

	'version'  => 'Verze',
	'filename' => 'Název souboru',
];
