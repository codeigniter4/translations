<?php

/**
 * Migration language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
    // Migration Runner
    'missingTable'      => 'Migratietabel moet ingesteld zijn.',
    'disabled'          => 'Er zijn Migraties geladen maar ze zijn niet geactiveerd of niet goed ingesteld.',
    'notFound'          => 'Migratiebestand niet gevonden: ',
    'batchNotFound'     => 'Target batch niet gevonden: ',
    'empty'             => 'Geen Migratiebestanden gevonden',
    'gap'               => 'Er zit een gat in de migratiesequentie in de buurt van versienummer: ',
    'classNotFound'     => 'De migratieclass "%s" kon niet worden gevonden.',
    'missingMethod'     => 'De migratieclass mist een "%s" methode.',

    // Migration Command
    'migHelpLatest'     => "\t\tMigreert de database naar de laatst beschikbare available migratie.",
    'migHelpCurrent'    => "\t\tMigreert de database naar de versie ingesteld als 'huidig' in de configuratie.",
    'migHelpVersion'    => "\tMigreert de database naar versie {v}.",
    'migHelpRollback'   => "\tZet alle migraties terug naar versie 0.",
    'migHelpRefresh'    => "\t\tDeïnstalleert alle migraties en voert ze opnieuw uit om de database te verversen.",
    'migHelpSeed'       => "\tVoert de seeder uit met de naam [name].",
    'migCreate'         => "\tMaakt een nieuwe migratie met de naam [name]",
    'nameMigration'     => 'Geef het migratiebestand een naam',
    'badCreateName'     => 'U moet het migratiebestand een naam geven.',
    'writeError'        => 'Kon bestand niet aanmaken.',
    'migNumberError'    => 'Het migratienummer moet uit drie cijfers bestaan, en er mogen geen gaten in de sequentie zitten.',

    'latest'            => 'Alle nieuwe migraties uitvoeren...',
    'generalFault'      => 'Migratie mislukt!',
    'migInvalidVersion' => 'Ongeldig versienummer gegeven.',
    'toVersionPH'       => 'Migreren naar versie %s...',
    'toVersion'         => 'Migreren naar huidige versie...',
    'rollingBack'       => 'Migraties terugzetten naar: ',
    'noneFound'         => 'Geen migraties gevonden.',
    'on'                => 'Migratie uitgevoerd op: ',
    'migSeeder'         => 'Seedernaam',
    'migMissingSeeder'  => 'U moet een seedernaam opgeven.',
    'removed'           => 'Terugzetten: ',
    'added'             => 'Uitvoeren: ',

    'version'           => 'Versie',
    'filename'          => 'Bestandsnaam',
];
