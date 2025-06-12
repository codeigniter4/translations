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
    'unableToWrite'   => 'कैश "{0}" पर लिख नहीं सकता।', // 'Cache unable to write to "{0}".'
    'invalidHandlers' => 'कैश कॉन्फ़िग में $validHandlers का एक सरणी होना चाहिए।', // 'Cache config must have an array of $validHandlers.'
    'noBackup'        => 'कैश कॉन्फ़िग में एक हैंडलर और backupHandler सेट होना चाहिए।', // 'Cache config must have a handler and backupHandler set.'
    'handlerNotFound' => 'कैश कॉन्फ़िग में एक अमान्य हैंडलर या बैकअप हैंडलर निर्दिष्ट है।', // 'Cache config has an invalid handler or backup handler specified.'
];
