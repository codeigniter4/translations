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
    'missingTable'  => 'Tablica za migracije mora biti postavljena.',
    'disabled'      => 'Migracije su učitane ali isključene ili pogrešno podešene.',
    'notFound'      => 'Migracijski fajl nije pronađen: ',
    'batchNotFound' => 'Ciljani batch nije pronađen: ',
    'empty'         => 'Nisu pronađeni migracijski fajlovi',
    'gap'           => 'Postoji praznina u migracijskoj sekvenci kod broja verzije: ',
    'classNotFound' => 'Migracijska klasa "%s" ne može biti pronađena.',
    'missingMethod' => 'Migracijskoj klasi nedostaje "%s" metod.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigrira bazu na najnoviju dostupnu migraciju.",
    'migHelpCurrent'  => "\t\tMigrira bazu na verziju postavljenu kao 'current' u konfiguraciji.",
    'migHelpVersion'  => "\tMigrira bazu na verziju {v}.",
    'migHelpRollback' => "\tPokreće sve migracije 'down' do verzije 0.",
    'migHelpRefresh'  => "\t\tBriše i ponovo pokreće sve migracije da osvježi bazu.",
    'migHelpSeed'     => "\tPokreće seeder pod imenom [name].",
    'migCreate'       => "\tKreira novu migraciju pod imenom [name]",
    'nameMigration'   => 'Daje ime migracijskoj datoteci',
    'migNumberError'  => 'Migracijski broj mora imati tri cifre i ne smije biti nikakvih praznina između sekvenci.',
    'rollBackConfirm' => 'Da li ste sigurni da želite uraditi rollback?',
    'refreshConfirm'  => 'Da li ste sigurni da želite uraditi refresh?',

    'latest'            => 'Pokreće sve nove migracije...',
    'generalFault'      => 'Migracija neuspješna!',
    'migrated'          => 'Migracija uspješno završena.',
    'migInvalidVersion' => 'Dat je nevalidan broj verzije.',
    'toVersionPH'       => 'Migriram na verziju %s...',
    'toVersion'         => 'Migriram na trenutnu verziju...',
    'rollingBack'       => 'Vraćam migracije na batch: ',
    'noneFound'         => 'Nisu pronađene migracije.',
    'migSeeder'         => 'Ime seeder-a',
    'migMissingSeeder'  => 'Morate navesti ime seeder-a.',
    'nameSeeder'        => 'Imenuj seeder datoteku',
    'removed'           => 'Vraćam nazad: ',
    'added'             => 'Radim: ',

    // Migrate Status
    'namespace' => 'Namespace',
    'filename'  => 'Ime datoteke',
    'version'   => 'Verzija',
    'group'     => 'Grupa',
    'on'        => 'Migrirano na: ',
    'batch'     => 'Batch',
];
