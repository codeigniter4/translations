<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => '`sessionSavePath` はDBセッションハンドラが動作するテーブルが必要です。', //`sessionSavePath` must have the table name for the Database Session Handler to work.
	'invalidSavePath'        => 'Session: 設定された保存パス "{0}" はディレクトリではないか、存在しないか、作成できません。', //Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.
	'writeProtectedSavePath' => 'Session: 設定された保存パス "{0}" はPHPプロセスから書き込みができません。', //Session: Configured save path "{0}" is not writable by the PHP process.
	'emptySavePath'          => 'Session: 保存パスが存在しません。', //Session: No save path configured.
	'invalidSavePathFormat'  => 'Session: 無効な Redis 保存パス形式です。: {0}', //Session: Invalid Redis save path format: {0}
	'invalidSameSiteSetting' => 'Session: SameSite 設定には None、Lax、Strict または空文字列を指定する必要がありますが、「{0}」が指定されました。', //Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}
];
