<?php

/**
 * Migration language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
    // Migration Runner
    'missingTable'      => 'Migratrie tabel moet worden gezet.',
    'disabled'          => 'Migraties geladen, maar zijn uitgeschakeld of foutief ingesteld.',
    'notFound'          => 'Migratie bestand niet gevonden: ',
    'batchNotFound'     => 'Doel batch niet gevonden: ',
    'empty'             => 'Geen migratie bestanden gevonden',
    'gap'               => 'Er is een gat in de migratie sequentie rond het versienummer: ',
    'classNotFound'     => 'De migratie class "%s" werd niet gevonden.',
    'missingMethod'     => 'De migratie class heeft geen methode: "%s".',

    // Migration Command
    'migHelpLatest'     => "\t\tMigreert de database naar de laatste beschikbare migratie.",
    'migHelpCurrent'    => "\t\tMigreert de database naar de versie gezet als 'current' in de configuratie.",
    'migHelpVersion'    => "\tMigreert database naar versie {v}.",
    'migHelpRollback'   => "\tVoert migratie 'down' uit naar versie 0.",
    'migHelpRefresh'    => "\t\tVerwijdert al de migraties en voert ze opnieuw uit, database refresh.",
    'migHelpSeed'       => "\tVoert seeder uit met naam [name].",
    'migCreate'         => "\tMaakt een nieuwe migratie aan met de naam [name]",
    'nameMigration'     => 'Geeft het migratiebestand een naam',
    'badCreateName'     => 'Gelieve een migratiebestandsnaam op te geven.',
    'writeError'        => 'Fout bij het aanmaken van het bestand.',
    'migNumberError'    => 'Migratie cijfer moet 3 cijfers bevatten, en er mag geen gat zijn in de sequentie.',

    'latest'            => 'Al de migraties worden uitgevoerd...',
    'generalFault'      => 'Migratie gefaald!',
    'migInvalidVersion' => 'Ongeldige versienummer opgegeven',
    'toVersionPH'       => 'Migreren naar versie %s...',
    'toVersion'         => 'Migreren naar huidige versie...',
    'rollingBack'       => 'Verwijderen van migratie naar batch: ',
    'noneFound'         => 'Geen migraties gevonden.',
    'on'                => 'Gemigreerd op: ',
    'migSeeder'         => 'Seeder naam',
    'migMissingSeeder'  => 'U moet een seeder naam opgeven.',
    'removed'           => 'Rolling back: ',
    'added'             => 'Uitvoeren: ',

    'version'           => 'Versie',
    'filename'          => 'Bestandsnaam',
];
