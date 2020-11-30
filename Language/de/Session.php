<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => 'In `sessionSavePath` muss der Tabellenname angegeben werden damit das Session Handling per Datenbank funktioniert.',
	'invalidSavePath'        => 'Session: Der konfigurierte Speicherpfad "{0}" ist kein Verzeichnis, existiert nicht oder kann nicht erstellt werden.',
	'writeProtectedSavePath' => 'Session: Der konfigurierte Speicherpfad "{0}" kann vom PHP-Prozess nicht beschrieben werden.',
	'emptySavePath'          => 'Session: Kein Speicherpfad konfiguriert.',
	'invalidSavePathFormat'  => 'Session: Ungültiges Redis Speicherpfadformat: {0}',
	'invalidSameSiteSetting' => 'Die SameSite Einstellung kann nur None, Lax, Strict, oder ein leerer String sein. Erhaltener Wert: {0}',
];
