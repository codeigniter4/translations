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

// Session language settings
return [
    'missingDatabaseTable'   => 'डेटाबेस सेशन हैंडलर के काम करने के लिए "sessionSavePath" में टेबल का नाम होना चाहिए।', // '"sessionSavePath" must have the table name for the Database Session Handler to work.'
    'invalidSavePath'        => 'सेशन: कॉन्फ़िगर किया गया सेव पाथ "{0}" एक डायरेक्टरी नहीं है, मौजूद नहीं है या बनाया नहीं जा सकता है।', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.'
    'writeProtectedSavePath' => 'सेशन: कॉन्फ़िगर किया गया सेव पाथ "{0}" PHP प्रक्रिया द्वारा लिखने योग्य नहीं है।', // 'Session: Configured save path "{0}" is not writable by the PHP process.'
    'emptySavePath'          => 'सेशन: कोई सेव पाथ कॉन्फ़िगर नहीं किया गया है।', // 'Session: No save path configured.'
    'invalidSavePathFormat'  => 'सेशन: अमान्य रेडिस सेव पाथ प्रारूप: "{0}"', // 'Session: Invalid Redis save path format: "{0}"'

    // @deprecated
    'invalidSameSiteSetting' => 'सेशन: SameSite सेटिंग None, Lax, Strict, या एक खाली स्ट्रिंग होनी चाहिए। दिया गया: "{0}"', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: "{0}"'
];
