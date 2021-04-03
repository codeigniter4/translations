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
	'missingDatabaseTable'   => 'Lai datu bāzes sesijas apstrādātājs varētu darboties, iestatījumā `sessionSavePath` ir jānorāda tabulas nosaukums.', // '`sessionSavePath` must have the table name for the Database Session Handler to work.'
	'invalidSavePath'        => 'Sesija: Iestatījumos norādītais saglabāšanas ceļš `{0}` nav direktorija, neeksistē vai to nevar izveidot.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.'
	'writeProtectedSavePath' => 'Sesija: Iestatījumos norādītais saglabāšanas ceļš `{0}` PHP procesam nav pieejams ierakstīšanai.', // 'Session: Configured save path "{0}" is not writable by the PHP process.'
	'emptySavePath'          => 'Sesija: Iestatījumos nav norādīts saglabāšanas ceļš.', // 'Session: No save path configured.'
	'invalidSavePathFormat'  => 'Sesija: nederīgs Redis saglabāšanas ceļa formāts: {0}', // 'Session: Invalid Redis save path format: {0}'

	// @deprecated
	'invalidSameSiteSetting' => 'Sesija: iestatījumam SameSite jābūt: `None`, `Lax`, `Strict` vai tukšai virknei. Norādīts: {0}', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}'
];
