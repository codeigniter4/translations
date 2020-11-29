<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => '`sessionSavePath` 必须是数据库中的表名才能正常工作。',
	'invalidSavePath'        => 'Session: 配置的保存路径 "{0}" , 目录不存在或无法创建。',
	'writeProtectedSavePath' => 'Session: 配置的保存路径 "{0}" , PHP 程序无法写入。',
	'emptySavePath'          => 'Session: 没有配置保存路径。',
	'invalidSavePathFormat'  => 'Session: 无效的 Redis 保存路径: {0}',
];
