<?php

/**
 * Session language strings.
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
	'missingDatabaseTable'   => '`sessionSavePath` musi mieć nazwę tabeli dla obsługi sesji bazy danych.',
	'invalidSavePath'        => 'Sesja: Skonfigurowana ścieżka zapisu "{0}" nie jest katalogiem, nie istnieje lub nie można jej utworzyć.',
	'writeProtectedSavePath' => 'Sesja: Skonfigurowana ścieżka zapisu "{0}" nie jest zapisywalna w procesie PHP.',
	'emptySavePath'          => 'Sesja: Nie skonfigurowano żadnej ścieżki zapisu.',
	'invalidSavePathFormat'  => 'Session: Nieprawidłowy format zapisu zapisu Redis: {0}',
];
