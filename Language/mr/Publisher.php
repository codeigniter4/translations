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
    'collision'             => '"{1}" ला "{2}" येथे कॉपी करताना Publisher ला अनपेक्षित "{0}" आढळले.', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".'
    'destinationNotAllowed' => 'Destination हे Publisher directories च्या allowed list मध्ये नाही: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"'
    'fileNotAllowed'        => '"{0}" हे "{1}" साठी खालील निर्बंध पूर्ण करत नाही: {2}', // '"{0}" fails the following restriction for "{1}": {2}'

    // Publish Command
    'publishMissing'          => 'सर्व namespaces मध्ये {0} मध्ये कोणत्याही Publisher classes आढळल्या नाहीत.', // 'No Publisher classes detected in {0} across all namespaces.'
    'publishMissingNamespace' => '{1} namespace मध्ये {0} मध्ये कोणत्याही Publisher classes आढळल्या नाहीत.', // 'No Publisher classes detected in {0} in the {1} namespace.'
    'publishSuccess'          => '"{0}" ने {1} फाइल(स्) "{2}" येथे publish केल्या.', // '"{0}" published {1} file(s) to "{2}".'
    'publishFailure'          => '"{0}" ला "{1}" येथे publish करता आले नाही.', // '"{0}" failed to publish to "{1}".'
];
