<?php

/**
 * Session language strings.
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
   'missingDatabaseTable'   => '`sessionSavePath` deve contenere il nome della tabella affinché l\'handler delle sessioni via database possa funzionare.',
   'invalidSavePath'        => 'Sessione: il percorso di salvataggio "{0}" configurato non è una cartella, non esiste o non può essere creata.',
   'writeProtectedSavePath' => 'Sessione: il percorso di salvataggio "{0}" configurato non è scrivibile dal processo PHP.',
   'emptySavePath'          => 'Sessione: No save path configured.',
   'invalidSavePathFormat'  => 'Sessione: il formato del percorso di salvataggio redis non è valido: {0}',
];
