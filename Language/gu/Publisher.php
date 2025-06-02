<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Publisher language settings
return [
    'collision'             => 'પબ્લિશરને "{1}" ને "{2}" માં કોપી કરતી વખતે અનપેક્ષિત "{0}" નો સામનો કરવો પડ્યો.', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".'
    'destinationNotAllowed' => 'ગંતવ્ય પબ્લિશર ડિરેક્ટરીઓની માન્ય સૂચિમાં નથી: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"'
    'fileNotAllowed'        => '"{0}" "{1}" માટે નીચેના પ્રતિબંધમાં નિષ્ફળ જાય છે: {2}', // '"{0}" fails the following restriction for "{1}": {2}'

    // Publish Command
    'publishMissing'          => 'તમામ નેમસ્પેસમાં {0} માં કોઈ પબ્લિશર ક્લાસ મળ્યા નથી.', // 'No Publisher classes detected in {0} across all namespaces.'
    'publishMissingNamespace' => '{1} નેમસ્પેસમાં {0} માં કોઈ પબ્લિશર ક્લાસ મળ્યા નથી.', // 'No Publisher classes detected in {0} in the {1} namespace.'
    'publishSuccess'          => '"{0}" એ {1} ફાઇલ(ઓ) ને "{2}" માં પ્રકાશિત કરી.', // '"{0}" published {1} file(s) to "{2}".'
    'publishFailure'          => '"{0}" "{1}" માં પ્રકાશિત કરવામાં નિષ્ફળ.', // '"{0}" failed to publish to "{1}".'
];
