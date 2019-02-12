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
   'missingTable'      => 'Migrations Tabelle muss gesetzt sein.',
   'invalidType'       => 'Es wurde eine ungültige Migrationsnummerierung angegeben: {0}',
   'disabled'          => 'Migrationen wurden geladen, sind aber deaktiviert oder falsch eingerichtet.',
   'notFound'          => 'Migrationsdatei nicht gefunden: ',
   'empty'             => 'Keine Migrationsdateien gefunden',
   'gap'               => 'Es gibt eine Lücke in der Migrationsfolge in der Nähe der Versionsnummer: ',
   'classNotFound'     => 'Die Migrationsklasse "%s" konnte nicht gefunden werden.',
   'missingMethod'     => 'Der Migrationsklasse fehlt eine "%s"-Methode.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigriert die Datenbank auf die neueste verfügbare Migration.",
   'migHelpCurrent'    => "\t\tMigriert die Datenbank auf die Version, die in der Konfiguration als 'aktuell' eingestellt ist.",
   'migHelpVersion'    => "\tMigriert die Datenbank auf die Version {v}.",
   'migHelpRollback'   => "\tFührt alle Migrationen 'nach unten' zur Version 0 durch.",
   'migHelpRefresh'    => "\t\tDeinstalliert und führt alle Migrationen erneut durch, um die Datenbank zu aktualisieren.",
   'migHelpSeed'       => "\tSpeichert Beispieldaten mit dem Namen [name].",
   'migCreate'         => "\tErstellt eine neue Migration mit dem Namen [name]",
   'nameMigration'     => 'Benennen der Migrationsdatei',
   'badCreateName'     => 'Es muss ein gültiger Migrations-Dateiname angegeben werden.',
   'writeError'        => 'Fehler beim Erstellen der Datei.',
   'migNumberError'    => 'Die Migrationsnummer muss dreistellig sein, und es dürfen keine Lücken in der Sequenz sein.',

   'toLatest'          => 'Migration auf die neueste Version...',
   'migInvalidVersion' => 'Ungültige Versionsnummer angegeben.',
   'toVersionPH'       => 'Migration auf Version %s...',
   'toVersion'         => 'Migration auf die aktuelle Version...',
   'rollingBack'       => 'Rollback aller Migrationen...',
   'noneFound'         => 'Es wurden keine Migrationen gefunden..',
   'on'                => 'Migriert nach: ',
   'migSeeder'         => 'Beispieldaten-Name',
   'migMissingSeeder'  => 'Es muss ein Beispieldaten-Name angegeben werden.',
   'removed'           => 'Zurückrollen nach: ',
   'added'             => 'Ausführen: ',

   'version'           => 'Version',
   'filename'          => 'Dateiname',
];
