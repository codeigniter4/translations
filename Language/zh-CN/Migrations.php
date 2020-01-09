<?php

/**
 * Migration language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => '必须设置迁移表。',
//   'invalidType'       => '指定的迁移类型编号无效: {0}',
   'disabled'          => '迁移状态为禁用或不正确，请确认 app/Config/Migrations 文件的 $enabled 值是否为 true。',
   'notFound'          => '找不到指定的迁移文件：',
   'batchNotFound'     => 'Target batch not found: ',
   'empty'             => '没有指定的迁移文件。',
   'gap'               => '版本号附近的迁移序列存在差异: ',
   'classNotFound'     => '找不到指定的迁移类 "%s" 。',
   'missingMethod'     => '迁移类缺少 "%s" 方法。',

	// Migration Command
   'migHelpLatest'     => "\t\t数据库将迁移至最新的可用迁移。",
   'migHelpCurrent'    => "\t\t数据库将迁移至配置文件中 'current' 的版本。",
   'migHelpVersion'    => "\t数据库将迁移至 {v} 版本。",
   'migHelpRollback'   => "\t运行所有迁移 'down'方法 至 0 版本。",
   'migHelpRefresh'    => "\t\t卸载且重新运行所有迁移，重置数据库。",
   'migHelpSeed'       => "\t运行填充程序，名称：[name]",
   'migCreate'         => "\t创建一个新的迁移，名称：[name]",
   'nameMigration'     => '命名迁移文件。',
   'badCreateName'     => '你必须提供迁移文件名。',
   'writeError'        => '尝试创建文件时出错。',
   'migNumberError'    => '迁移号必须为3位数字且中间不能有任何空格。',

//   'toLatest'          => '迁移到最新版本...',
   'latest'            => 'Running all new migrations...',
   'generalFault'      => 'Migration failed!',
   'migInvalidVersion' => '提供的版本号无效。',
   'toVersionPH'       => '迁移至 %s...',
   'toVersion'         => '迁移至当前（current）版本...',
   'rollingBack'       => '回滚所有迁移...',
   'noneFound'         => '没有发现任何迁移。',
   'on'                => '迁移: ',
   'migSeeder'         => '填充（seeder）名',
   'migMissingSeeder'  => '必须提供一个填充（seeder）名',
   'removed'           => '回滚操作: ',
   'added'             => '执行操作: ',

   'version'           => '版本',
   'filename'          => '文件名',
];
