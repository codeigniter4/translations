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

// Cache language settings
return [
    'unableToWrite'   => 'தற்காலிக சேமிப்பிற்கு எழுத முடியவில்லை "{0}".', // 'Cache unable to write to "{0}".',
    'invalidHandlers' => 'தற்காலிக சேமிப்பின் கட்டமைப்பானது $validHandlers வரிசையைக் கொண்டிருக்க வேண்டும்.', // 'Cache config must have an array of $validHandlers.',
    'noBackup'        => 'தற்காலிக சேமிப்பின் கட்டமைப்பில் handler மற்றும் backupHandler set இருக்க வேண்டும்.', // 'Cache config must have a handler and backupHandler set.',
    'handlerNotFound' => 'Cache config has an invalid handler or backup handler specified. தற்காலிக சேமிப்பின் கட்டமைப்பில் மதிப்பில்லாத (invalid) handler or backup handler குறிப்பிடப்பட்டுள்ளது.', // 'Cache config has an invalid handler or backup handler specified.',
];
