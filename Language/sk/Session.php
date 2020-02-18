<?php

/**
 * Session language strings.
 *
 * @package    CodeIgniter
 * @author     Jozef Botka - xbotkaj on Github
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'missingDatabaseTable'   => '`sessionSavePath` musí mať tabuľku aby pracoval Database Session Handler.',
   'invalidSavePath'        => 'Session: Nastavená cesta uloženia "{0}" nie je zložka, neexistuje alebo nemôže byť vytvorená.',
   'writeProtectedSavePath' => 'Session: Nastavená cesta uloženia "{0}" nie je zapisovateľná cez PHP proces.',
   'emptySavePath'          => 'Session: Nie je nastavená cesta na uloženie.',
   'invalidSavePathFormat'  => 'Session: Neplatný formát Redis cesty: {0}',
];
