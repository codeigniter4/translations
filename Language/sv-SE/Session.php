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
   'missingDatabaseTable'   => '`sessionSavePath` måste vara tabellnamnet för att Database Session Handler skall fungera.',
   'invalidSavePath'        => 'Session: Angivna sökvägen "{0}" är inte en katalog, existerar inte eller kan inte skapas.',
   'writeProtectedSavePath' => 'Session: Angivna sökvägen "{0}" är inte skrivbar för PHP processen.',
   'emptySavePath'          => 'Session: Ingen sökväg angivien.',
   'invalidSavePathFormat'  => 'Session: Ogiltigt format för Redis: {0}',
   'invalidSameSiteSetting' => 'Session: SameSite måste vara None, Lax, Strict, eller en blank sträng. Givet: {0}',
];
