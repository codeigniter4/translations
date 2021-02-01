<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => '`sessionSavePath` musi mieć nazwę tabeli dla obsługi sesji bazy danych.',
	'invalidSavePath'        => 'Sesja: Skonfigurowana ścieżka zapisu "{0}" nie jest katalogiem, nie istnieje lub nie można jej utworzyć.',
	'writeProtectedSavePath' => 'Sesja: Skonfigurowana ścieżka zapisu "{0}" nie jest zapisywalna w procesie PHP.',
	'emptySavePath'          => 'Sesja: Nie skonfigurowano żadnej ścieżki zapisu.',
	'invalidSavePathFormat'  => 'Session: Nieprawidłowy format zapisu zapisu Redis: {0}',
];
