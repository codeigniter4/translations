<?php

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
    'copyError'                    => 'Radās kļūda mēģinot aizstāt failu ({0}). Lūdzu, pārliecinieties, vai failu direktorija ir rakstāma.', // 'An error was encountered while attempting to replace the file ({0}). Please make sure your file directory is writable.'
    'enabledZlibOutputCompression' => 'Jūsu zlib.output_compression ini direktīva ir ieslēgta. Tas nedarbosies labi ar izvades buferiem.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.'
    'invalidFile'                  => 'Nederīgs fails: {0}', // 'Invalid file: {0}'
    'invalidPhpVersion'            => 'Jūsu PHP versijai ir jābūt {0} vai jaunākai, lai lietotu CodeIgniter. Pašreizējā versija: {1}', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}'
    'missingExtension'             => 'Sistēmai ir jāinstalē un jāielādē šāds paplašinājums: {0}.', // 'The framework needs the following extension(s) installed and loaded: {0}.'
    'noHandlers'                   => '{0} ir jānodrošina vismaz viens apstrādātājs.', // '{0} must provide at least one Handler.'
];
