<?php

/**
 * Session language strings.
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
   'missingDatabaseTable'   => 'In `sessionSavePath` muss der Tabellenname angegeben werden damit das Session Handling per Datenbank funktioniert.',
   'invalidSavePath'        => 'Session: Der konfigurierte Speicherpfad "{0}" ist kein Verzeichnis, existiert nicht oder kann nicht erstellt werden.',
   'writeProtectedSavePath' => 'Session: Der konfigurierte Speicherpfad "{0}" kann vom PHP-Prozess nicht beschrieben werden.',
   'emptySavePath'          => 'Session: Kein Speicherpfad konfiguriert.',
   'invalidSavePathFormat'  => 'Session: Ungültiges Redis Speicherpfadformat: {0}',
];
