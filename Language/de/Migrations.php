<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
	'missingTable'  => 'Die Migrations-Tabelle muss gesetzt sein.',
	'disabled'      => 'Migrationen wurden geladen, sind aber deaktiviert oder wurden falsch eingerichtet.',
	'notFound'      => 'Migrationsdatei nicht gefunden: ',
	'batchNotFound' => 'Ziel-Batchnummer nicht gefunden: ',
	'empty'         => 'Keine Migrationsdateien gefunden',
	'gap'           => 'Es gibt eine Lücke in der Migrationsfolge nahe der Versionsnummer: ',
	'classNotFound' => 'Die Migrationsklasse "%s" konnte nicht gefunden werden.',
	'missingMethod' => 'Der Migrationsklasse fehlt eine "%s"-Methode.',

	// Migration Command
	'migHelpLatest'   => "\t\tMigriert die Datenbank auf die neueste verfügbare Migration.",
	'migHelpCurrent'  => "\t\tMigriert die Datenbank auf die Version, die in der Konfiguration als aktuell ('current') eingestellt ist.",
	'migHelpVersion'  => "\tMigriert die Datenbank auf die Version {v}.",
	'migHelpRollback' => "\tFührt alle Migrationen 'nach unten' zur Version 0 durch.",
	'migHelpRefresh'  => "\t\tDeinstalliert und führt alle Migrationen erneut durch, um die Datenbank aufzufrischen.",
	'migHelpSeed'     => "\tVerarbeitet die Beispieldaten mit dem Namen [name].",
	'migCreate'       => "\tErstellt eine neue Migration mit dem Namen [name]",
	'nameMigration'   => 'Migrationsdatei benennen',
	'migNumberError'  => 'Die Migrationsnummer muss dreistellig sein und es dürfen keine Lücken in der Sequenz existieren.',
	'rollBackConfirm' => 'Soll der Datenbank-Rollback wirklich ausgeführt werden?',
	'refreshConfirm'  => 'Soll die Datenbank wirklich aufgefrischt werden?',

	'latest'            => 'Neue Migrationen ausführen...',
	'generalFault'      => 'Migration fehlgeschlagen!',
	'migInvalidVersion' => 'Ungültige Versionsnummer angegeben.',
	'toVersionPH'       => 'Migration auf Version %s...',
	'toVersion'         => 'Migration auf die aktuelle Version...',
	'rollingBack'       => 'Rollback aller Migrationen zu Batchnummer: ',
	'noneFound'         => 'Es wurden keine Migrationen gefunden.',
	'migSeeder'         => 'Beispieldaten-Name',
	'migMissingSeeder'  => 'Es muss ein Beispieldaten-Name angegeben werden.',
	'nameSeeder'        => 'Beispieldaten-Datei benennen',
	'removed'           => 'Zurückrollen nach: ',
	'added'             => 'Ausführen: ',

	// Migrate Status
	'namespace' => 'Namespace',
	'filename'  => 'Dateiname',
	'version'   => 'Version',
	'group'     => 'Gruppe',
	'on'        => 'Migriert am: ',
	'batch'     => 'Batch',
];
