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
    'missingDatabaseTable'   => '`sessionSavePath` moet een tabelnaam bevatten om Database Session Handler te laten werken.',
    'invalidSavePath'        => 'Session: Pad "{0}" is geen folder, bestaat niet of kon niet worden aangemaakt.',
    'writeProtectedSavePath' => 'Session: Pad "{0}" is niet schrijfbaar voor het PHP proces.',
    'emptySavePath'          => 'Session: Geen "save" pad opgegeven.',
    'invalidSavePathFormat'  => 'Session: Ongeldig Redis pad formaat: {0}',
];
