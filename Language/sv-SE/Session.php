<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

return [
	'missingDatabaseTable'   => '`sessionSavePath` måste vara tabellnamnet för att Database Session Handler skall fungera.',
	'invalidSavePath'        => 'Session: Angivna sökvägen "{0}" är inte en katalog, existerar inte eller kan inte skapas.',
	'writeProtectedSavePath' => 'Session: Angivna sökvägen "{0}" är inte skrivbar för PHP processen.',
	'emptySavePath'          => 'Session: Ingen sökväg angivien.',
	'invalidSavePathFormat'  => 'Session: Ogiltigt format för Redis: {0}',
	'invalidSameSiteSetting' => 'Session: SameSite måste vara None, Lax, Strict, eller en blank sträng. Givet: {0}',
];
