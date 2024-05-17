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
    'missingDatabaseTable'   => 'டேட்டாபேஸ் செஷன் ஹேண்ட்லர் வேலை செய்ய அட்டவணைப் பெயரைக் கொண்டிருக்க வேண்டும்.', // '"sessionSavePath" must have the table name for the Database Session Handler to work.',
    'invalidSavePath'        => 'அமர்வு: உள்ளமைக்கப்பட்ட சேமிப்பு பாதை "{0}" என்பது ஒரு கோப்பகம் அல்ல, அது இதுவரை இல்லை அல்லது உருவாக்க முடியாது.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.',
    'writeProtectedSavePath' => 'அமர்வு: உள்ளமைக்கப்பட்ட சேமிப்பு பாதை "{0}" PHP செயல்முறையால் எழுத முடியாது.', // 'Session: Configured save path "{0}" is not writable by the PHP process.',
    'emptySavePath'          => 'அமர்வு: சேமிக்கும் பாதை எதுவும் கட்டமைக்கப்படவில்லை.', // 'Session: No save path configured.',
    'invalidSavePathFormat'  => 'அமர்வு: தவறான Redis சேமிப்பு பாதை வடிவம்: "{0}"', // 'Session: Invalid Redis save path format: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'SameSite அமைப்பானது None, Lax, Strict, அல்லது blank string ஆக இருக்க வேண்டும். வழங்கப்பட்டது: {0}', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: "{0}"',
];
