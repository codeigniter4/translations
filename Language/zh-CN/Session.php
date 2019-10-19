<?php

/**
 * Session language strings.
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
   'missingDatabaseTable'   => '`sessionSavePath` 必须是数据库中的表名才能正常工作。',
   'invalidSavePath'        => 'Session: 配置的保存路径 "{0}" , 目录不存在或无法创建。',
   'writeProtectedSavePath' => 'Session: 配置的保存路径 "{0}" , PHP 程序无法写入。',
   'emptySavePath'          => 'Session: 没有配置保存路径。',
   'invalidSavePathFormat'  => 'Session: 无效的 Redis 保存路径: {0}',
];
