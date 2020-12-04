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
	'missingTable'  => 'Musí byť nastavená tabuľka migrácií.',
	'disabled'      => 'Migrácie boli načítané, ale sú deaktivované alebo nesprávne nastavené.',
	'notFound'      => 'Migračný súbor nebol nájdený: ',
	'empty'         => 'Nenašli sa žiadne migračné súbory',
	'gap'           => 'V migračnej sekvencii pri čísle verzie je medzera: ',
	'classNotFound' => 'Migračnú triedu "%s" sa nepodarilo nájsť.',
	'missingMethod' => 'V migračnej triede chýba metóda "%s".',

	// Migration Command
	'migHelpLatest'     => "\t\tMigruje databázu na najnovšiu dostupnú migráciu.",
	'migHelpCurrent'    => "\t\tMigruje databázu na verziu nastavenú ako aktuálnu v konfigurácii.",
	'migHelpVersion'    => "\tMigruje databázu na verziu {v}.",
	'migHelpRollback'   => "\tSpustí všetky migrácie 'nadol' na verziu 0.",
	'migHelpRefresh'    => "\t\tOdinštaluje a znovu spustí všetky migrácie do novej databázy.",
	'migHelpSeed'       => "\tSpustí seeder s menom [ name ].",
	'migCreate'         => "\tVytvorí novú migráciu s názvom [ name ]",
	'nameMigration'     => 'Pomenujte migračný súbor',
	'migNumberError'    => 'Migračné číslo musí byť tri číslice a v sekvencii nesmú byť medzery.',
	'migInvalidVersion' => 'Zadané neplatné číslo verzie.',
	'toVersionPH'       => 'Prebieha migrácia na verziu %s ...',
	'toVersion'         => 'Prebieha migrácia na aktuálnu verziu ...',
	'rollingBack'       => 'Vracajú sa späť všetky migrácie ...',
	'noneFound'         => 'Nenašli sa žiadne migrácie.',
	'on'                => 'Zmigraované na: ',
	'migSeeder'         => 'Meno seederu',
	'migMissingSeeder'  => 'Musíte zadať meno seederu.',
	'removed'           => 'Vraciam: ',
	'added'             => 'Beží: ',

	'version'  => 'Verzia',
	'filename' => 'Názov súboru',
];
