<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Migration language settings
return [
   // Migration Runner
   'missingTable'    => 'Migrations Tabelle muss gesetzt sein.',
   'disabled'        => 'Migrationen wurden geladen, sind aber deaktiviert oder falsch eingerichtet.',
   'batchNotFound'   => 'Ziel-Batchnummer nicht gefunden: ',
   'notFound'        => 'Migrationsdatei nicht gefunden: ',
   'empty'           => 'Keine Migrationsdateien gefunden',
   'gap'             => 'Es gibt eine Lücke in der Migrationsfolge in der Nähe der Versionsnummer: ',
   'classNotFound'   => 'Die Migrationsklasse "%s" konnte nicht gefunden werden.',
   'missingMethod'   => 'Der Migrationsklasse fehlt eine "%s"-Methode.',

   // Migration Command
   'migHelpLatest'   => "\t\tMigriert die Datenbank auf die neueste verfügbare Migration.",
   'migHelpCurrent'  => "\t\tMigriert die Datenbank auf die Version, die in der Konfiguration als 'aktuell' eingestellt ist.",
   'migHelpVersion'  => "\tMigriert die Datenbank auf die Version {v}.",
   'migHelpRollback' => "\tFührt alle Migrationen 'nach unten' zur Version 0 durch.",
   'migHelpRefresh'  => "\t\tDeinstalliert und führt alle Migrationen erneut durch, um die Datenbank zu aktualisieren.",
   'migHelpSeed'     => "\tSpeichert Beispieldaten mit dem Namen [name].",
   'migCreate'       => "\tErstellt eine neue Migration mit dem Namen [name]",
   'nameMigration'   => 'Benennen der Migrationsdatei',
   'badCreateName'   => 'Es muss ein gültiger Migrations-Dateiname angegeben werden.',
   'writeError'      => 'Fehler beim Erstellen der Datei.',
   'migNumberError'  => 'Die Migrationsnummer muss dreistellig sein, und es dürfen keine Lücken in der Sequenz sein.',
   'rollBackConfirm' => 'Soll der Datenbank-Rollback ausgeführt werden?',
   'refreshConfirm'  => 'Soll die Datenbank wirklich aktualisiert werden?',
   
   'latest'            => 'Neue Migrationen ausführen...',
   'generalFault'      => 'Migration fehlgeschlagen!',
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

   'version'  => 'Version',
   'filename' => 'Dateiname',
];
