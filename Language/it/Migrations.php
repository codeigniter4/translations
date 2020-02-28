<<?php

/**
 * Migration language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => 'La tabella delle migrazioni deve essere impostata.',
   'disabled'          => 'Le migrazioni sono state caricate ma sono disabilitate o configurate in modo incorretto.',
   'notFound'          => 'File di migrazione non trovato: ',
   'batchNotFound'     => 'Target del batch non trovato: ',
   'empty'             => 'Nessun file di migrazione trovato',
   'gap'               => 'È presente un gap nella sequenza di migrazione vicino al numero di versione: ',
   'classNotFound'     => 'Non è possibile trovare la classe di migrazione "%s".',
   'missingMethod'     => 'Alla classe di migrazione manca un metodo "%s".',

	// Migration Command
   'migHelpLatest'     => "\t\tElabora la migrazione del database all'ultima migrazione disponibile.",
   'migHelpCurrent'    => "\t\tElabora la migrazione del database alla versione impostata come 'current' nella configurazione.",
   'migHelpVersion'    => "\tElabora la migrazione del database alla versione {v}.",
   'migHelpRollback'   => "\tElabora tutte le migrazioni 'down' fino alla versione 0.",
   'migHelpRefresh'    => "\t\tDisinstalla e rielabora tutte le migrazioni verso un database riavviato.",
   'migHelpSeed'       => "\tAvvia il seeder denominato [name].",
   'migCreate'         => "\tCrea una nuova migrazione denominata [name]",
   'nameMigration'     => 'Dai un nome al file di migrazione',
   'badCreateName'     => 'Devi fornire un nome per il file di migrazione.',
   'writeError'        => 'Errore nel tentativo di creazione del file.',
   'migNumberError'    => 'Il numero di migrazione deve contenere tre cifre e non devono esserci spazi vuoti nella sequenza.',

   'latest'            => 'Esecuzione di tutte le nuove migrazioni...',
   'generalFault'      => 'Migrazione fallita!',
   'migInvalidVersion' => 'Fornito un numero di versione non valido.',
   'toVersionPH'       => 'Migrazione alla versione %s...',
   'toVersion'         => 'Migrazione alla versione corrente...',
   'rollingBack'       => 'Rollback di tutte le migrazioni: ',
   'noneFound'         => 'Nessuna migrazione trovata.',
   'on'                => 'Migrato a: ',
   'migSeeder'         => 'Nome seeder',
   'migMissingSeeder'  => 'Devi fornire un nome per il seeder.',
   'removed'           => 'Rollback: ',
   'added'             => 'Elaborazione: ',

   'version'           => 'Versione',
   'filename'          => 'Nome file',
];
