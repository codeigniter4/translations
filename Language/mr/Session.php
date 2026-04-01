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
    'missingDatabaseTable'   => 'Database Session Handler काम करण्यासाठी "sessionSavePath" मध्ये table name असणे आवश्यक आहे.', // '"sessionSavePath" must have the table name for the Database Session Handler to work.'
    'invalidSavePath'        => 'Session: Configured save path "{0}" ही directory नाही, अस्तित्वात नाही किंवा तयार करता येत नाही.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.'
    'writeProtectedSavePath' => 'Session: Configured save path "{0}" हा PHP process ला writable नाही.', // 'Session: Configured save path "{0}" is not writable by the PHP process.'
    'emptySavePath'          => 'Session: कोणताही save path configured नाही.', // 'Session: No save path configured.'
    'invalidSavePathFormat'  => 'Session: Redis save path format अवैध आहे: "{0}"', // 'Session: Invalid Redis save path format: "{0}"'

    // @deprecated
    'invalidSameSiteSetting' => 'Session: SameSite setting None, Lax, Strict किंवा रिकामी string असणे आवश्यक आहे. दिलेले: "{0}"', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: "{0}"'
];
