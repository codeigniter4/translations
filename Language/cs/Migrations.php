<?php

declare(strict_types=1);

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
    'missingTable'  => 'Musí být nastavena tabulka migrací.',
    'disabled'      => 'Migrace byly načteny, ale jsou vypnuté nebo nesprávně nastavené.',
    'notFound'      => 'Migrační soubor nebyl nalezen: ',
    'batchNotFound' => 'Cílová dávka nebyla nalezena: ',
    'empty'         => 'Nenalezeny žádné migrační soubory',
    'gap'           => 'V migrační sekvenci je mezera u čísla verze: ',
    'classNotFound' => 'Migrační třídu "%s" se nepodařilo najít.',
    'missingMethod' => 'V migrační třídě chybí metoda "%s".',
    'locked'        => 'Migrace již běží v jiném procesu. Přeskakuji.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigruje databázi na nejnovější dostupnou migraci.",
    'migHelpCurrent'  => "\t\tMigruje databázi na verzi nastavenou jako 'current' v konfiguraci.",
    'migHelpVersion'  => "\tMigruje databázi na verzi {v}.",
    'migHelpRollback' => "\tSpustí všechny migrace 'down' až po verzi 0.",
    'migHelpRefresh'  => "\t\tOdinstaluje a znovu spustí všechny migrace pro obnovení databáze.",
    'migHelpSeed'     => "\tSpustí seeder s názvem [name].",
    'migCreate'       => "\tVytvoří novou migraci s názvem [name]",
    'nameMigration'   => 'Pojmenujte migrační soubor',
    'migNumberError'  => 'Číslo migrace musí mít tři číslice a v sekvenci nesmí být mezery.',
    'rollBackConfirm' => 'Opravdu chcete vrátit migrace zpět?',
    'refreshConfirm'  => 'Opravdu chcete obnovit migrace?',

    'latest'            => 'Spouštění všech nových migrací...',
    'generalFault'      => 'Migrace selhala!',
    'migrated'          => 'Migrace dokončeny.',
    'migInvalidVersion' => 'Zadáno neplatné číslo verze.',
    'toVersionPH'       => 'Probíhá migrace na verzi %s...',
    'toVersion'         => 'Probíhá migrace na aktuální verzi...',
    'rollingBack'       => 'Vracení migrací zpět na dávku: ',
    'noneFound'         => 'Nebyly nalezeny žádné migrace.',
    'migSeeder'         => 'Název seederu',
    'migMissingSeeder'  => 'Musíte zadat název seederu.',
    'nameSeeder'        => 'Pojmenujte soubor seederu',
    'removed'           => 'Vracím zpět: ',
    'added'             => 'Spouštím: ',

    // Migrate Status
    'namespace' => 'Jmenný prostor',
    'filename'  => 'Název souboru',
    'version'   => 'Verze',
    'group'     => 'Skupina',
    'on'        => 'Zmigrováno: ',
    'batch'     => 'Dávka',
];
