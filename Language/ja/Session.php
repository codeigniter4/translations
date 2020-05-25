<?php
/**
 * Session language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'missingDatabaseTable'   => '`sessionSavePath`はDBセッションハンドラが動作するテーブルが必要です。', //`sessionSavePath` must have the table name for the Database Session Handler to work.
   'invalidSavePath'        => 'Session: 設定された保存パス"{0}"はディレクトリではないか、存在しないか、作成できません。', //Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.
   'writeProtectedSavePath' => 'Session: 設定された保存パス"{0}"はPHPプロセスから書き込みができません。', //Session: Configured save path "{0}" is not writable by the PHP process.
   'emptySavePath'          => 'Session: 保存パスが存在しません。', //Session: No save path configured.
   'invalidSavePathFormat'  => 'Session: 無効な Redis 保存パス形式です。: {0}', //Session: Invalid Redis save path format: {0}
];
