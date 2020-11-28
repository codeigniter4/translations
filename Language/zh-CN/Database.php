<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'          => '{0} 不是有效的模型回调事件。',
    'invalidArgument'       => '必须提供有效的 {0}。',
    'invalidAllowedFields'  => '模型中必须有指定的允许字段: {0}。',
    'emptyDataset'          => '{0} 没有任何数据。',
    'failGetFieldData'      => '无法在数据库中获取字段数据。',
    'failGetIndexData'      => '无法在数据库中获取索引数据。',
    'failGetForeignKeyData' => '无法在数据库中获取外键数据。',
    'parseStringFail'       => '解析密钥字符串失败。',
    'featureUnavailable'    => '您正在使用的数据库不适用本功能。',
    'tableNotFound'                    => 'Table `{0}` was not found in the current database.',
    'noPrimaryKey'                     => '`{0}` model class does not specify a Primary Key.',
    'noDateFormat'                     => '`{0}` model class does not have a valid dateFormat.',
    'fieldNotExists'                   => 'Field `{0}` not found.',
    'forEmptyInputGiven'               => 'Empty statement is given for the field `{0}`',
    'forFindColumnHaveMultipleColumns' => 'Only single column allowed in Column name.',
];
