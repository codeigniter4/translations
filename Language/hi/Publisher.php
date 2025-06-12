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
    'collision'             => 'पब्लिशर को "{1}" से "{2}" में कॉपी करते समय एक अप्रत्याशित "{0}" का सामना करना पड़ा।', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".'
    'destinationNotAllowed' => 'गंतव्य पब्लिशर की अनुमत डायरेक्टरी सूची में नहीं है: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"'
    'fileNotAllowed'        => '"{0}" "{1}" के लिए निम्नलिखित प्रतिबंध में विफल रहता है: {2}', // '"{0}" fails the following restriction for "{1}": {2}'

    // Publish Command
    'publishMissing'          => 'सभी नेमस्पेस में {0} में कोई पब्लिशर क्लास नहीं मिली।', // 'No Publisher classes detected in {0} across all namespaces.'
    'publishMissingNamespace' => '{1} नेमस्पेस में {0} में कोई पब्लिशर क्लास नहीं मिली।', // 'No Publisher classes detected in {0} in the {1} namespace.'
    'publishSuccess'          => '"{0}" ने "{2}" में {1} फ़ाइलें प्रकाशित कीं।', // '"{0}" published {1} file(s) to "{2}".'
    'publishFailure'          => '"{0}" "{1}" में प्रकाशित करने में विफल रहा।', // '"{0}" failed to publish to "{1}".'
];
