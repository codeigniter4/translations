<?php

/**
 * Session language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'missingDatabaseTable'   => '`sessionSavePath` 必須設定資料庫中存在的資料表名稱。',
   'invalidSavePath'        => "Session: 所設定的儲存路徑 '{0}' 不是資料夾、不存在，或是無法創建。",
   'writeProtectedSavePath' => "Session: PHP 無法寫入您所設定的儲存路徑 '{0}' 。",
   'emptySavePath'          => 'Session: 沒有設定儲存路徑。',
   'invalidSavePathFormat'  => 'Session: 無效的Redis儲存路徑: {0}',
];
