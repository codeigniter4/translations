<?php

/**
 * Session language strings.
 *
 * @package      CodeIgniter
 * @author       Luca Marco Rasia
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 4.0.0
 *
 * @filesource
 *
 * @codeCoverageIgnore
 */
return [
	'missingDatabaseTable'   => '`sessionSavePath` deve avere il nome della tavola per far funzionare il Gestore della Sessione del Database.',
	'invalidSavePath'        => 'Sessione: il configurato percorso di salvataggio "{0}" non è una cartella, non esiste o non può essere creato.',
	'writeProtectedSavePath' => 'Sessione: il configurato percorso di salvataggio "{0}" non è scrivibile dal processo PHP.',
	'emptySavePath'          => 'Sessione: nessun percorso di salvataggio configurato.',
	'invalidSavePathFormat'  => 'Sessione: il formato del percorso di salvataggio Redis non è valido : {0}',
];
