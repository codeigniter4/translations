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
    'copyError'                    => 'ફાઈલ "{0}" ને બદલવાનો પ્રયાસ કરતી વખતે એક ભૂલ આવી. કૃપા કરીને ખાતરી કરો કે તમારી ફાઇલ ડિરેક્ટરી લખી શકાય તેવી છે.', // 'An error was encountered while attempting to replace the file "{0}". Please make sure your file directory is writable.'
    'enabledZlibOutputCompression' => 'તમારી zlib.output_compression ini ડિરેક્ટિવ ચાલુ છે. આ આઉટપુટ બફર્સ સાથે સારી રીતે કામ કરશે નહીં.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.'
    'invalidFile'                  => 'અમાન્ય ફાઇલ: "{0}"', // 'Invalid file: "{0}"'
    'invalidDirectory'             => 'ડિરેક્ટરી અસ્તિત્વમાં નથી: "{0}"', // 'Directory does not exist: "{0}"'
    'invalidPhpVersion'            => 'CodeIgniter ચલાવવા માટે તમારી PHP આવૃત્તિ {0} અથવા તેથી વધુ હોવી આવશ્યક છે. વર્તમાન આવૃત્તિ: {1}', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}'
    'missingExtension'             => 'ફ્રેમવર્કને નીચેના એક્સ્ટેંશન ઇન્સ્ટોલ કરેલા અને લોડ થયેલા હોવા જરૂરી છે: "{0}".', // 'The framework needs the following extension(s) installed and loaded: "{0}".'
    'noHandlers'                   => '"{0}" ઓછામાં ઓછો એક હેન્ડલર પ્રદાન કરવો આવશ્યક છે.', // '"{0}" must provide at least one Handler.'
];
