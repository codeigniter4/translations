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
    'missingTable'  => 'A migrációs táblát ki kell jelölni.',
    'disabled'      => 'A migráció betöltésre került, de le van tiltva vagy rosszul van beállítva.',
    'notFound'      => 'A migrációs állomány nem található: ',
    'batchNotFound' => 'A célköteg nem található: ',
    'empty'         => 'Nem található migrációs állomány',
    'gap'           => 'There is a gap in the migration sequence near version number: ',
    'classNotFound' => 'The migration class "%s" could not be found.',
    'missingMethod' => 'The migration class is missing an "%s" method.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigrálja az adatbázist a legutolsó elérhető állapotra.",
    'migHelpCurrent'  => "\t\tMigrálja az adatbázist a legutolsó címkéjű állapotra.",
    'migHelpVersion'  => "\tMigrálja az adatbázist a következő verzióra {v}.",
    'migHelpRollback' => "\tVisszaállítja a migrációt 0-dik verzióra.",
    'migHelpRefresh'  => "\t\tEltávolítja és újra migrálja az adatokat az adatbázis frissítéséhez.",
    'migHelpSeed'     => "\tA következő nevű Seeder futtatása: [name]",
    'migCreate'       => "\tCreates a new migration named [name]",
    'nameMigration'   => 'Migrációs fájl elnevezése',
    'migNumberError'  => 'A migrációs számnak három számjegynek kell lennie és nem ugorhat át  verziószámot.',
    'rollBackConfirm' => 'Biztosan visszaállítja a korábbit?',
    'refreshConfirm'  => 'Biztosan frissíteni szeretne?',

    'latest'            => 'Minden új migráció futtatása...',
    'generalFault'      => 'A migráció sikertelen!',
    'migrated'          => 'A migráció befejezve.',
    'migInvalidVersion' => 'Nem megfelelő verziószám lett megadva.',
    'toVersionPH'       => 'Migráció a következő verzióra: %s...',
    'toVersion'         => 'Migráció a legújabb verzióra...',
    'rollingBack'       => 'Migráció visszaállítása a következő verzióra: ',
    'noneFound'         => 'Nem található migráció.',
    'migSeeder'         => 'Seeder név',
    'migMissingSeeder'  => 'A Seeder név megadása kötelező.',
    'nameSeeder'        => 'A seeder fájl megnevezése',
    'removed'           => 'Visszaállítás: ',
    'added'             => 'Folyamatban: ',

    // Migrate Status
    'namespace' => 'Namespace',
    'filename'  => 'Fájlnév',
    'version'   => 'Verzió',
    'group'     => 'Csoport',
    'on'        => 'Migrálva: ',
    'batch'     => 'Köteg',
];
