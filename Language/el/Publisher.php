<?php

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
    'collision'             => 'Ο Publisher αντιμετώπισε ένα απροσδόκητο "{0}" κατά την αντιγραφή του "{1}" στο "{2}".', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".',
    'destinationNotAllowed' => 'Ο προορισμός δεν περιλαμβάνεται στην επιτρεπόμενη λίστα καταλόγων του Publisher: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"',
    'fileNotAllowed'        => '"{0}" αποτυγχάνει στον ακόλουθο περιορισμό για το "{1}": {2}', // '"{0}" fails the following restriction for "{1}": {2}',

    // Publish Command
    'publishMissing' => 'Δεν εντοπίστηκαν κατηγορίες Publisher στο {0} σε όλους τους χώρους ονομάτων.', // 'No Publisher classes detected in {0} across all namespaces.',
    'publishSuccess' => '"{0}" δημοσίευσε {1} αρχείο/α στο "{2}".', // '"{0}" published {1} file(s) to "{2}".',
    'publishFailure' => 'Απέτυχε η δημοσίευση του "{0}" στο "{1}".', // '"{0}" failed to publish to "{1}".',
];
