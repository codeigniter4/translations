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
    'copyError'                    => 'फाइल "{0}" बदलण्याचा प्रयत्न करताना त्रुटी आली. कृपया तुमची file directory writable आहे याची खात्री करा.', // 'An error was encountered while attempting to replace the file "{0}". Please make sure your file directory is writable.'
    'enabledZlibOutputCompression' => 'तुमचे zlib.output_compression ini directive चालू आहे. हे output buffers सोबत नीट काम करणार नाही.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.'
    'invalidFile'                  => 'अवैध फाइल: "{0}"', // 'Invalid file: "{0}"'
    'invalidDirectory'             => 'Directory अस्तित्वात नाही: "{0}"', // 'Directory does not exist: "{0}"'
    'invalidPhpVersion'            => 'CodeIgniter चालवण्यासाठी तुमचा PHP version {0} किंवा त्यापेक्षा जास्त असणे आवश्यक आहे. सध्याचा version: {1}', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}'
    'missingExtension'             => 'Framework ला खालील extension(s) install आणि load केलेले असणे आवश्यक आहे: "{0}".', // 'The framework needs the following extension(s) installed and loaded: "{0}".'
    'noHandlers'                   => '"{0}" ने किमान एक Handler द्यायला हवा.', // '"{0}" must provide at least one Handler.'
];
