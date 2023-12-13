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
    'missingTable'  => 'Turi būti nustatyta migracijų lentelė.',
    'disabled'      => 'Migracijos buvo įkeltos, bet yra išjungtos, arba nustatytos neteisingai.',
    'notFound'      => 'Migracijų failas nerastas: ',
    'batchNotFound' => 'Tikslinis rinkinyū nerastas: ',
    'empty'         => 'Nerasta migracijų failų',
    'gap'           => 'Migracijų sekoje yra tarpas netoli versijos numerio: ',
    'classNotFound' => 'Migracijos klasė „%s“ nerasta.',
    'missingMethod' => 'Migracijos klasei trūksta „%s“ metodo.',

    // Migration Command
    'migHelpLatest'   => "\t\tMigruoja duomenų bazes naudojant vėliausią prieinamą migraciją.",
    'migHelpCurrent'  => "\t\tMigruoja duomenų bazę iki versijos, kuri konfigūracijoje nurodyta kaip „dabartinė“ (current).",
    'migHelpVersion'  => "\tMigruoja duomenų bazę iki versijos {v}.",
    'migHelpRollback' => "\tVykdo visų migracijų „down“ metodą, iki versijos 0.",
    'migHelpRefresh'  => "\t\tIšinstaliuoja ir iš naujo įvykdo visas migracijas siekiant atšviežinti duomenų bazę.",
    'migHelpSeed'     => "\tVykdo sėjyklę, pavadintą [name].",
    'migCreate'       => "\tSukuria naują migracijos failą, pavadintą [name]",
    'nameMigration'   => 'Įvardinkite migracijos failą',
    'migNumberError'  => 'Migracijos numerį turi sudaryti trys skaitmenys, o jų sekoje neturi būti jokių tarpų.',
    'rollBackConfirm' => 'Ar tikrai įvykdyti išinstaliavimą (rollback)?',
    'refreshConfirm'  => 'Ar tikrai atšviežinti (refresh) duomenų bazę?',

    'latest'            => 'Vykdomos visos migracijos...',
    'generalFault'      => 'Migracijos nepavyko!',
    'migrated'          => 'Migracija pavyko.',
    'migInvalidVersion' => 'Nurodytas neteisingas versijos numeris.',
    'toVersionPH'       => 'Migruojama iki versijos %s...',
    'toVersion'         => 'Migruojama iki dabartinės (current) versijos...',
    'rollingBack'       => 'Migracijos išinstaliuojamos iki rinkinio: ',
    'noneFound'         => 'Nerasta migracijų.',
    'migSeeder'         => 'Sėjyklės vardas',
    'migMissingSeeder'  => 'Turite nurodyti sėjyklės vardą.',
    'nameSeeder'        => 'Sėjyklės failo vardas',
    'removed'           => 'Išinstaliuojama: ',
    'added'             => 'Vykdoma: ',

    // Migrate Status
    'namespace' => 'Vardų erdvė (namespace)',
    'filename'  => 'Failo pavadinimas',
    'version'   => 'Versija',
    'group'     => 'Grupė',
    'on'        => 'Kada migruota: ',
    'batch'     => 'Rinkinys',
];
