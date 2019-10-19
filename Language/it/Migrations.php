<?php

/**
 * Migration language strings.
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
	// Migration Runner
	'missingTable'    => 'La tavola delle Migrazioni deve essere indicata.',
	'invalidType'     => 'E\' stata specificata una numerazione di migrazione non valida: {0}',
	'disabled'        => 'Le Migrazioni sono state caricate ma sono disabilitate o configurate in modo non corretto.',
	'notFound'        => 'File di Migrazione non trovato: ',
	'empty'           => 'Nessun file di Migrazione è stato trovato',
	'gap'             => 'Vi è una lacuna nella sequenza di migrazione vicino al numero di versione: ',
	'classNotFound'   => 'Non è possibile trovare la classe di migrazione "%s" .',
	'missingMethod'   => 'Alla classe di migrazione manca un metodo "%s" .',

	// Migration Command
	'migHelpLatest'   => "\t\tEffettua la migrazione del database alla ultima migrazione disponibile.",
	'migHelpCurrent'  => "\t\tEffettua la migrazione del database alla versione selezionata come 'current' nella configurazione.",
	'migHelpVersion'  => "\tEffettua la migrazione del database alla versione {v}.",
	'migHelpRollback' => "\tElabora tutte le migrazioni 'down' alla versione 0.",
	'migHelpRefresh'  => "\t\tDisinstalla e rielabora tutte le migrazioni a un database riavviato.",
	'migHelpSeed'     => "\tAvvia il seminatore denominato [name].",
	'migCreate'       => "\tCrea una nuova migrazione denominata [name]",
	'nameMigration'   => 'Denomina il file di migrazione',
	'badCreateName'   => 'Devi fornire un nome al file di migrazione.',
	'writeError'      => 'Si è verificato un errore tentando di creare il file.',

	'toLatest'          => 'Migrazione verso la più recente versione...',
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

	'version'           => 'Versione',
	'filename'          => 'Nome file',
];
