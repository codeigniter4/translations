<?php

/**
 * Session language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'missingDatabaseTable'   => 'I `sessionSavePath` må tabellnavnet spesifiseres slik at økthåndteringen fungerer via databasen.',
   'invalidSavePath'        => 'Hurtiglager: Den konfigurerte lagringsstien "{0}" er ikke en katalog, eksisterer ikke eller kan ikke opprettes.',
   'writeProtectedSavePath' => 'Hurtiglager: Den konfigurerte lagringsstien "{0}" kan ikke beskrives av PHP-prosessen.',
   'emptySavePath'          => 'Hurtiglager: Ingen lagringsbane konfigurert.',
   'invalidSavePathFormat'  => 'Hurtiglager: Ugyldig Redis lagringsbaneformat: {0}',
];
