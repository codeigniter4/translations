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
    'missingTable'  => 'Migratrie tabel moet worden gezet.',
    'disabled'      => 'Migraties geladen, maar zijn uitgeschakeld of foutief ingesteld.',
    'notFound'      => 'Migratie bestand niet gevonden: ',
    'batchNotFound' => 'Doel batch niet gevonden: ',
    'empty'         => 'Geen migratie bestanden gevonden',
    'gap'           => 'Er is een gat in de migratie sequentie rond het versienummer: ',
    'classNotFound' => 'De migratie class "%s" werd niet gevonden.',
    'missingMethod' => 'De migratie class heeft geen methode: "%s".',

    // Migration Command
    'migCreate'       => "\tMaakt een nieuwe migratie aan met de naam [name]",
    'migHelpCurrent'  => "\t\tMigreert de database naar de versie gezet als 'current' in de configuratie.",
    'migHelpLatest'   => "\t\tMigreert de database naar de laatste beschikbare migratie.",
    'migHelpRefresh'  => "\t\tVerwijdert al de migraties en voert ze opnieuw uit, database refresh.",
    'migHelpRollback' => "\tVoert migratie 'down' uit naar versie 0.",
    'migHelpSeed'     => "\tVoert seeder uit met naam [name].",
    'migHelpVersion'  => "\tMigreert database naar versie {v}.",
    'migNumberError'  => 'Migratie cijfer moet 3 cijfers bevatten, en er mag geen gat zijn in de sequentie.',
    'nameMigration'   => 'Geeft het migratiebestand een naam',
    'refreshConfirm'  => 'Weet u zeker dat u de refresh wilt starten?',
    'rollBackConfirm' => 'Weet u zeker dat u de rollback wilt starten?',

    'added'             => 'Uitvoeren: ',
    'batch'             => 'Batch',
    'filename'          => 'Bestandsnaam',
    'generalFault'      => 'Migratie gefaald!',
    'group'             => 'Groep',
    'latest'            => 'Al de migraties worden uitgevoerd...',
    'migInvalidVersion' => 'Ongeldige versienummer opgegeven',
    'migMissingSeeder'  => 'U moet een seeder naam opgeven.',
    'migrated'          => 'Migraties uitgevoerd.',
    'migSeeder'         => 'Seeder naam',
    'nameSeeder'        => 'Geef naam voor het seeder bestand',
    'namespace'         => 'Namespace',
    'noneFound'         => 'Geen migraties gevonden.',
    'on'                => 'Gemigreerd op: ',
    'removed'           => 'Ongedaan maken (rollback): ',
    'rollingBack'       => 'Verwijderen van migratie naar batch: ',
    'toVersion'         => 'Migreren naar huidige versie...',
    'toVersionPH'       => 'Migreren naar versie %s...',
    'version'           => 'Versie',
];
