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
    'unableToWrite'   => 'कॅश "{0}" मध्ये लिहू शकत नाही.', // 'Cache unable to write to "{0}".'
    'invalidHandlers' => 'कॅश कॉन्फिगमध्ये $validHandlers ची array असणे आवश्यक आहे.', // 'Cache config must have an array of $validHandlers.'
    'noBackup'        => 'कॅश कॉन्फिगमध्ये handler आणि backupHandler सेट असणे आवश्यक आहे.', // 'Cache config must have a handler and backupHandler set.'
    'handlerNotFound' => 'कॅश कॉन्फिगमध्ये अवैध handler किंवा backup handler दिलेला आहे.', // 'Cache config has an invalid handler or backup handler specified.'
];
