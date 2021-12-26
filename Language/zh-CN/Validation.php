<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => '验证器配置中没有指定规则集。',
    'ruleNotFound'    => '{0} 不是有效的规则。',
    'groupNotFound'   => '{0} 不是验证器规则组。',
    'groupNotArray'   => '规则组 {0} 必须是数组类型。',
    'invalidTemplate' => '{0} 不是有效的验证器模板。',

    // Rule Messages
    'alpha'                 => '{field} 字段的值只能包含字母字符。',
    'alpha_dash'            => '{field} 字段的值只能包含字母、数字、下划线和减号。',
    'alpha_numeric'         => '{field} 字段的值只能包含字母和数字。',
    'alpha_numeric_punct'   => '{field} 字段的值只能包含字母、数字、空格和以下字符 ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => '{field} 字段的值只能包含字母、数字和空格。',
    'alpha_space'           => '{field} 字段的值只能包含字母和空格。',
    'decimal'               => '{field} 字段的值只能包含十进制数字。',
    'differs'               => '{field} 字段的值必须和 {param} 字段的值不同。',
    'equals'                => '{field} 字段的值必须是 {param}。',
    'exact_length'          => '{field} 字段的值长度必须是 {param} 个字符。',
    'greater_than'          => '{field} 字段的值必须大于 {param}',
    'greater_than_equal_to' => '{field} 字段的值必须大于或等于 {param}',
    'hex'                   => '{field} 字段的值只能包含十六进制数字。',
    'in_list'               => '{field} 字段的值必须是以下中的一种: {param}.',
    'integer'               => '{field} 字段的值必须是整数。',
    'is_natural'            => '{field} 字段的值必须是自然数。',
    'is_natural_no_zero'    => '{field} 字段的值必须是自然数 (不含0)。',
    'is_not_unique'         => '{field} 字段的值必须是数据库中存在的值。',
    'is_unique'             => '{field} 字段的值必须是数据库中不存在的值。',
    'less_than'             => '{field} 字段的值必须小于 {param}。',
    'less_than_equal_to'    => '{field} 字段的值必须小于或等于 {param}.',
    'matches'               => '{field} 字段的值必须和 {param} 字段的值相同。',
    'max_length'            => '{field} 字段的值长度不能超过 {param} 个字符。',
    'min_length'            => '{field} 字段的值长度不能小于 {param} 个字符。',
    'not_equals'            => '{field} 字段的值不能是 {param}.',
    'not_in_list'           => '{field} 字段的值不能是以下中的一种: {param}.',
    'numeric'               => '{field} 字段的值只能包含数字。',
    'regex_match'           => '{field} 字段的值格式不正确。',
    'required'              => '{field} 字段必填。',
    'required_with'         => '当 {param} 存在时 {field} 字段必填。',
    'required_without'      => '当 {param} 不存在时 {field} 字段必填。',
    'string'                => '{field} 字段的值必须是字符串。',
    'timezone'              => '{field} 字段的值必须是有效的时区。',
    'valid_base64'          => '{field} 字段的值必须是有效的 base64 字符串。',
    'valid_email'           => '{field} 字段的值必须是有效的邮箱地址。',
    'valid_emails'          => '{field} 字段的值必须均是有效的邮箱地址。',
    'valid_ip'              => '{field} 字段的值必须是有效的 IP。',
    'valid_url'             => '{field} 字段的值必须是有效的 URL。',
    'valid_date'            => '{field} 字段的值必须是有效的日期。',

    // Credit Cards
    'valid_cc_num' => '{field} 似乎不是一个有效的信用卡号码。',

    // Files
    'uploaded' => '{field} 不是一个有效的上传文件。',
    'max_size' => '{field} 的文件太大。',
    'is_image' => '{field} 不是一个有效的、上传的图像文件。',
    'mime_in'  => '{field} 没有有效的 mime 类型。',
    'ext_in'   => '{field} 没有一个有效的文件扩展名。',
    'max_dims' => '{field} 要么不是图像，要么太宽或太高。',
];
