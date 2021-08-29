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
    'migNumberError'  => 'Migrační číslo musí být tři číslice a v sekvenci nesmí být mezery.',
    'rollBackConfirm' => 'Opravdu chcete změny vrátit zpět?',
    'refreshConfirm'  => 'Opravdu si přejete obnovit?',

    'latest'            => 'Spouštění všech nových migrací...',
    'generalFault'      => 'Migrace selhala!',
    'migInvalidVersion' => 'Zadáno neplatné číslo verze.',
    'toVersionPH'       => 'Probíhá migrace na verzi %s ...',
    'toVersion'         => 'Probíhá migrace na aktuální verzi ...',
    'rollingBack'       => 'Vracejí se zpět všechny migrace ...',
    'noneFound'         => 'Nenašly se žádné migrace.',
    'migSeeder'         => 'Jméno seederu',
    'migMissingSeeder'  => 'Musíte zadat jméno seederu.',
    'nameSeeder'        => 'Zadejte název Seeder',
    'removed'           => 'Vracím: ',
    'added'             => 'Běží: ',

    // Migrate Status
    'namespace' => 'Jmenný prostor',
    'filename'  => 'Název souboru',
    'version'   => 'Verze',
    'group'     => 'Skupina',
    'on'        => 'Zmigrováno na: ',
    'batch'     => 'Dávka',
];
