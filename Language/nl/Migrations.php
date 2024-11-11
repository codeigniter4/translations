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
    'migHelpLatest'   => "\t\tMigreert de database naar de laatste beschikbare migratie.",
    'migHelpCurrent'  => "\t\tMigreert de database naar de versie gezet als 'current' in de configuratie.",
    'migHelpVersion'  => "\tMigreert database naar versie {v}.",
    'migHelpRollback' => "\tVoert migratie 'down' uit naar versie 0.",
    'migHelpRefresh'  => "\t\tVerwijdert al de migraties en voert ze opnieuw uit, database refresh.",
    'migHelpSeed'     => "\tVoert seeder uit met naam [name].",
    'migCreate'       => "\tMaakt een nieuwe migratie aan met de naam [name]",
    'nameMigration'   => 'Geeft het migratiebestand een naam',
    'migNumberError'  => 'Migratie cijfer moet 3 cijfers bevatten, en er mag geen gat zijn in de sequentie.',
    'rollBackConfirm' => 'Weet u zeker dat u de rollback wilt starten?',
    'refreshConfirm'  => 'Weet u zeker dat u de refresh wilt starten?',

    'latest'            => 'Al de migraties worden uitgevoerd...',
    'generalFault'      => 'Migratie gefaald!',
    'migrated'          => 'Migraties uitgevoerd.',
    'migInvalidVersion' => 'Ongeldige versienummer opgegeven',
    'toVersionPH'       => 'Migreren naar versie %s...',
    'toVersion'         => 'Migreren naar huidige versie...',
    'rollingBack'       => 'Verwijderen van migratie naar batch: ',
    'noneFound'         => 'Geen migraties gevonden.',
    'migSeeder'         => 'Seeder naam',
    'migMissingSeeder'  => 'U moet een seeder naam opgeven.',
    'nameSeeder'        => 'Geef naam voor het seeder bestand',
    'removed'           => 'Ongedaan maken (rollback): ',
    'added'             => 'Uitvoeren: ',

    // Migrate Status
    'namespace' => 'Namespace',
    'filename'  => 'Bestandsnaam',
    'version'   => 'Versie',
    'group'     => 'Groep',
    'on'        => 'Gemigreerd op: ',
    'batch'     => 'Batch',
];
