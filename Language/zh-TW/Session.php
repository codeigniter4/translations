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
    'missingDatabaseTable'   => '`sessionSavePath` 必須設定資料庫中存在的資料表名稱。',
    'invalidSavePath'        => "Session: 所設定的儲存路徑 '{0}' 不是資料夾、不存在，或是無法創建。",
    'writeProtectedSavePath' => "Session: PHP 無法寫入您所設定的儲存路徑 '{0}' 。",
    'emptySavePath'          => 'Session: 沒有設定儲存路徑。',
    'invalidSavePathFormat'  => 'Session: 無效的Redis儲存路徑: {0}',

    // @deprecated
    'invalidSameSiteSetting' => 'SameSite 必須設定為 None、Lax、Strict 或是空字串，而數值卻是：{0} 。',
];
