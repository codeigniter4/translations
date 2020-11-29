<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Cache language settings
return [
	'unableToWrite'   => '{0} へキャッシュの書き込みができません。', //Cache unable to write to {0}
	'invalidHandlers' => 'キャッシュコンフィグは $validHandlers の配列が必要です。', //Cache config must have an array of $validHandlers.
	'noBackup'        => 'キャッシュコンフィグはハンドラとバックアップ・ハンドラが必要です。', //Cache config must have a handler and backupHandler set.
	'handlerNotFound' => 'キャッシュコンフィグに無効なハンドラまたはバックアップ・ハンドラが指定されています。', //Cache config has an invalid handler or backup handler specified.
];
