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
	'missingDatabaseTable'   => 'Lai datu bāzes sesijas apstrādātājs varētu darboties, iestatījumā `sessionSavePath` ir jānorāda tabulas nosaukums.',
	'invalidSavePath'        => 'Sesija: Iestatījumos norādītais saglabāšanas ceļš "{0}" nav direktorija, neeksistē vai to nevar izveidot.',
	'writeProtectedSavePath' => 'Sesija: Iestatījumos norādītais saglabāšanas ceļš "{0}" PHP procesam nav pieejams ierakstīšanai.',
	'emptySavePath'          => 'Sesija: Iestatījumos nav norādīts saglabāšanas ceļš.',
	'invalidSavePathFormat'  => 'Sesija: nederīgs Redis saglabāšanas ceļa formāts: {0}',
	'invalidSameSiteSetting' => 'Sesija: iestatījumam SameSite jābūt: None, Lax, Strict vai tukšai virknei. Norādīts: {0}',
];
