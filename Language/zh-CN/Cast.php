<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cast language settings
return [
    'baseCastMissing'        => '"{0}" 必须继承 "CodeIgniter\Entity\Cast\BaseCast"。',
    'invalidCastMethod'      => '"{0}" 是一个无效的转换器方法, 可用的方法有: ["get", "set"]。',
    'invalidTimestamp'       => '转换 "timestamp" 类型期望一个正确的时间戳。',
    'jsonErrorCtrlChar'      => '控制字符错误，可能是编码不对。',
    'jsonErrorDepth'         => '到达了最大堆栈深度。',
    'jsonErrorStateMismatch' => '出现了下溢 (underflow) 或者模式不匹配。',
    'jsonErrorSyntax'        => '语法错误。',
    'jsonErrorUnknown'       => '未知错误。',
    'jsonErrorUtf8'          => '异常的 UTF-8 字符，也许是因为不正确的编码。',
];
