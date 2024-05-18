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
    'copyError'                    => '"{0}" கோப்பை மாற்ற முயற்சிக்கும்போது பிழை ஏற்பட்டது. உங்கள் கோப்பு கோப்பகம் எழுதக்கூடியது என்பதை உறுதிப்படுத்தவும்.', // 'An error was encountered while attempting to replace the file "{0}". Please make sure your file directory is writable.',
    'enabledZlibOutputCompression' => 'உங்கள் zlib.output_compression ini உத்தரவு இயக்கப்பட்டது. இது வெளியீட்டு இடையகங்களுடன் நன்றாக வேலை செய்யாது.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.',
    'invalidFile'                  => 'தவறான கோப்பு: "{0}"', // 'Invalid file: "{0}"',
    'invalidDirectory'             => 'கோப்பகம் இல்லை: "{0}"', // 'Directory does not exist: "{0}"',
    'invalidPhpVersion'            => 'CodeIgniter ஐ இயக்க உங்கள் PHP பதிப்பு {0} அல்லது அதற்கு மேல் இருக்க வேண்டும். தற்போதைய பதிப்பு: {1}', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}',
    'missingExtension'             => 'கட்டமைப்பிற்கு (framework) பின்வரும் நீட்டிப்பு(கள்) நிறுவப்பட்டு ஏற்றப்பட வேண்டும்: "{0}".', // 'The framework needs the following extension(s) installed and loaded: "{0}".',
    'noHandlers'                   => '"{0}" குறைந்தது ஒரு handler வழங்க வேண்டும்.', // '"{0}" must provide at least one Handler.',
];
