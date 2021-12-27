<?php

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
    'missingDatabaseTable'   => '使用数据库作为 Session Handler 时，`sessionSavePath` 必须指定表名。',
    'invalidSavePath'        => 'Session: 配置的保存路径 "{0}" 不是一个目录，不存在或无法创建。',
    'writeProtectedSavePath' => 'Session: 配置的保存路径 "{0}" 不能被 PHP 进程写入。',
    'emptySavePath'          => 'Session: 没有配置保存路径。',
    'invalidSavePathFormat'  => 'Session: 无效的 Redis 保存路径格式: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'Session: SameSite 的值必须是 None, Lax, Strict 或者空白字符串。当前是 {0}。',
];
