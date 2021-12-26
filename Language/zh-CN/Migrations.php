<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => '迁移表必须被设置。',
    'disabled'      => '迁移已被加载，但被禁用或设置不正确。',
    'notFound'      => '没有找到迁移文件: ',
    'batchNotFound' => '没有找到目标批次: ',
    'empty'         => '没有找到迁移文件。', // not used
    'gap'           => '在以下迁移版本号附近出现了缺失: ',
    'classNotFound' => '无法找到迁移类 "%s"。',
    'missingMethod' => '迁移类缺少 "%s" 方法。',

    // Migration Command
    'migHelpLatest'   => "\t\t将数据库迁移到最新的可用迁移。",
    'migHelpCurrent'  => "\t\t将数据库迁移到配置中设置为 \"current\" 的版本。",
    'migHelpVersion'  => "\t将数据库迁移到版本 {v}。",
    'migHelpRollback' => "\t运行迁移器降级至版本 0。",
    'migHelpRefresh'  => "\t\t卸载并重新运行所有迁移器以刷新数据库。",
    'migHelpSeed'     => "\t运行名为 [name] 的填充器。",
    'migCreate'       => "\t创建名为 [name] 的新迁移器。",
    'nameMigration'   => '命名迁移器文件',
    'migNumberError'  => '迁移器编号必须是三位数字，而且序列中不能有任何空格。',
    'rollBackConfirm' => '你确定你要执行回滚操作吗？',
    'refreshConfirm'  => '你确定你要执行刷新操作吗？',

    'latest'            => '运行所有新的迁移项目...',
    'generalFault'      => '迁移失败!',
    'migInvalidVersion' => '提供的版本号无效。',
    'toVersionPH'       => '迁移到版本 %s...',
    'toVersion'         => '迁移到当前版本...',
    'rollingBack'       => '回滚迁移到批次: ',
    'noneFound'         => '没有找到迁移',
    'migSeeder'         => '填充器名',
    'migMissingSeeder'  => '你必须提供一个填充器的名字。',
    'nameSeeder'        => '命名填充器文件',
    'removed'           => '回滚操作: ',
    'added'             => '执行操作: ',

    // Migrate Status
    'namespace' => '命名空间',
    'filename'  => '文件名',
    'version'   => '版本',
    'group'     => '组',
    'on'        => '迁移日期: ', // huh?
    'batch'     => '批次',
];
