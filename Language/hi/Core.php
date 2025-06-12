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

// Core language settings
return [
    'copyError'                    => 'फ़ाइल "{0}" को बदलने का प्रयास करते समय एक त्रुटि हुई। कृपया सुनिश्चित करें कि आपकी फ़ाइल डायरेक्टरी लिखने योग्य है।', // 'An error was encountered while attempting to replace the file "{0}". Please make sure your file directory is writable.'
    'enabledZlibOutputCompression' => 'आपका zlib.output_compression ini निर्देश चालू है। यह आउटपुट बफ़र्स के साथ ठीक से काम नहीं करेगा।', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.'
    'invalidFile'                  => 'अमान्य फ़ाइल: "{0}"', // 'Invalid file: "{0}"'
    'invalidDirectory'             => 'डायरेक्टरी मौजूद नहीं है: "{0}"', // 'Directory does not exist: "{0}"'
    'invalidPhpVersion'            => 'CodeIgniter चलाने के लिए आपकी PHP संस्करण {0} या उससे अधिक होना चाहिए। वर्तमान संस्करण: {1}', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}'
    'missingExtension'             => 'फ्रेमवर्क को निम्नलिखित एक्सटेंशन स्थापित और लोड करने की आवश्यकता है: "{0}"।', // 'The framework needs the following extension(s) installed and loaded: "{0}".'
    'noHandlers'                   => '"{0}" को कम से कम एक हैंडलर प्रदान करना होगा।', // '"{0}" must provide at least one Handler.'
];
