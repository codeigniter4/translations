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
	'missingDatabaseTable'   => '`sessionSavePath` deve avere il nome della tavola per far funzionare il Gestore della Sessione del Database.',
	'invalidSavePath'        => 'Sessione: il percorso di salvataggio configurato "{0}" non è una cartella, non esiste o non può essere creato.',
	'writeProtectedSavePath' => 'Sessione: il percorso di salvataggio configurato "{0}" non è scrivibile dal processo PHP.',
	'emptySavePath'          => 'Sessione: nessun percorso di salvataggio configurato.',
	'invalidSavePathFormat'  => 'Sessione: il formato del percorso di salvataggio Redis non è valido : {0}',
	'invalidSameSiteSetting' => 'Session: la proprietà SameSite deve essere None, Lax, Strict, oppure una stringa vuota. Rilevata: {0}',
];
