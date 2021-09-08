<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'                     => '{0} 並不是一個有效的模型回呼。',
    'invalidArgument'                  => '必須提供有效的：{0} 。',
    'invalidAllowedFields'             => '必須為模型指定允許的欄位：{0} 。',
    'emptyDataset'                     => '{0} 中沒有資料。',
    'emptyPrimaryKey'                  => '嘗試執行 {0} 時發現沒有宣告主鍵。',
    'failGetFieldData'                 => '無法從資料庫中取得欄位資料。',
    'failGetIndexData'                 => '無法從資料庫中取得索引資料。',
    'failGetForeignKeyData'            => '無法從資料庫中取得外來鍵資料。',
    'parseStringFail'                  => '解析密鑰字串失敗。',
    'featureUnavailable'               => '此功能不適用於您所使用的資料庫。',
    'tableNotFound'                    => '在目前的資料庫中找不到資料表：`{0}` 。',
    'noPrimaryKey'                     => '在 `{0}` 模型類別中未指定主鍵。',
    'noDateFormat'                     => '在 `{0}` 模型類別中的 dateFormat 無效。',
    'fieldNotExists'                   => '找不到欄位：`{0}` 。',
    'forEmptyInputGiven'               => '`{0}` 欄位不可宣告為空（empty）。',
    'forFindColumnHaveMultipleColumns' => '欄位名稱不可為多值。',
];
