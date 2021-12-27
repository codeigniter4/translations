<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => '"{0}" 类型不能作为 "Expires" 属性. 可用的类型有: string, integer, DateTimeInterface 对象。',
    'invalidExpiresValue'   => 'Cookie 过期时间无效。',
    'invalidCookieName'     => 'Cookie 的名称 "{0}" 包含无效字符。',
    'emptyCookieName'       => 'Cookie 的名称不能为空。',
    'invalidSecurePrefix'   => '使用 "__Secure-" 前缀时需要设置 "Secure" 属性。',
    'invalidHostPrefix'     => '使用 "__Host-" 前缀时必须设置 "Secure" 标记, 且不能包含 "Domain" 属性, 以及 "Path" 需要设置为 "/"。',
    'invalidSameSite'       => 'SameSite 的值必须是 None, Lax, Strict 或者空白字符串。当前是 {0}。',
    'invalidSameSiteNone'   => '设置 SameSite 属性为 None 时也必须设置 "Secure" 属性。',
    'invalidCookieInstance' => '"{0}" 预期 cookies 数组是 "{1}" 的实体，但是在索引 {3} 上是 "{2}"。',
    'unknownCookieInstance' => '在集合中没有找到名称是 "{0}" 且前缀是 "{1}" 的 cookie 对象。',
];
