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
    'invalidEvent'                     => '{0} 不是一个有效的模型事件回调函数。',
    'invalidArgument'                  => '必须提供一个有效的 {0}。',
    'invalidAllowedFields'             => '必须指定模型中允许的字段: {0}',
    'emptyDataset'                     => '执行 {0} 操作时发现数据集为空。',
    'emptyPrimaryKey'                  => '执行 {0} 操作时发现没有定义主键。',
    'failGetFieldData'                 => '从数据库中获取字段信息时失败。',
    'failGetIndexData'                 => '从数据库中获取索引信息时失败。',
    'failGetForeignKeyData'            => '从数据库中获取外键信息时失败。',
    'parseStringFail'                  => '解析索引键字符串失败。',
    'featureUnavailable'               => '当前数据库无法提供这个功能。',
    'tableNotFound'                    => '当前数据库中 `{0}` 表不存在。',
    'noPrimaryKey'                     => '`{0}` 模型类没有指定主键。',
    'noDateFormat'                     => '`{0}` 模型类指定的 dateFormat 无效。',
    'fieldNotExists'                   => '字段 `{0}` 不存在。',
    'forEmptyInputGiven'               => '字段 `{0}` 不能声明为空。',
    'forFindColumnHaveMultipleColumns' => '只允许有一个列名。',
];
