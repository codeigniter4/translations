<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
	'missingTable'  => 'La tavola delle Migrazioni deve essere indicata.',
	'disabled'      => 'Le Migrazioni sono state caricate ma sono disabilitate o configurate in modo non corretto.',
	'notFound'      => 'File di Migrazione non trovato: ',
	'batchNotFound' => 'Target batch not found: ',
	'empty'         => 'Nessun file di Migrazione è stato trovato',
	'gap'           => 'Vi è una lacuna nella sequenza di migrazione vicino al numero di versione: ',
	'classNotFound' => 'Non è possibile trovare la classe di migrazione "%s" .',
	'missingMethod' => 'Alla classe di migrazione manca un metodo "%s" .',

	// Migration Command
	'migHelpLatest'     => "\t\tEffettua la migrazione del database alla ultima migrazione disponibile.",
	'migHelpCurrent'    => "\t\tEffettua la migrazione del database alla versione selezionata come 'current' nella configurazione.",
	'migHelpVersion'    => "\tEffettua la migrazione del database alla versione {v}.",
	'migHelpRollback'   => "\tElabora tutte le migrazioni 'down' alla versione 0.",
	'migHelpRefresh'    => "\t\tDisinstalla e rielabora tutte le migrazioni a un database riavviato.",
	'migHelpSeed'       => "\tAvvia il seminatore denominato [name].",
	'migCreate'         => "\tCrea una nuova migrazione denominata [name]",
	'nameMigration'     => 'Denomina il file di migrazione',
	'badCreateName'     => 'Devi fornire un nome al file di migrazione.',
	'writeError'        => 'Si è verificato un errore tentando di creare il file.',
	'migNumberError'    => 'Migration number must be three digits, and there must not be any gaps in the sequence.',
	'rollBackConfirm'   => 'Are you sure you want to rollback?',
	'refreshConfirm'    => 'Are you sure you want to refresh?',
	'latest'            => 'Running all new migrations...',
	'generalFault'      => 'Migration failed!',
	'migInvalidVersion' => 'Fornito un numero di versione non valido.',
	'toVersionPH'       => 'Migrazione verso la versione %s...',
	'toVersion'         => 'Migrazione verso la versione corrente...',
	'rollingBack'       => 'Ritorna indietro tutte le migrazioni...',
	'noneFound'         => 'Nessuna migrazione è stata trovata.',
	'on'                => 'Migrato a: ',
	'migSeeder'         => 'Nome seminatrice',
	'migMissingSeeder'  => 'Devi fornire un nome seminatrice.',
	'removed'           => 'Tornando indietro: ',
	'added'             => 'Elaborazione: ',

	'version'  => 'Versione',
	'filename' => 'Nome file',
];
