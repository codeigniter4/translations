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
    'invalidExpiresTime'    => '"Expires" 屬性的 "{0}" 型別無效。預期的是：字串、整數或 DateTimeInterface 物件。',
    'invalidExpiresValue'   => 'Cookie 的失效時間是無效的。',
    'invalidCookieName'     => 'Cookie 的名稱 "{0}" 含有無效的字元。',
    'emptyCookieName'       => 'Cookie 的名稱不可為空（empty）。',
    'invalidSecurePrefix'   => '使用 "__Secure-" 前綴詞需要設定 "Secure" 屬性。',
    'invalidHostPrefix'     => '使用 "__Host-" 前綴詞必須設定 "Secure" 標記，且不能含有 "Domain" 屬性，以及 "Path" 須設定為 "/" 。',
    'invalidSameSite'       => 'SameSite 的數值必須是 None、Lax、Strict或是一個空字串，而數值卻是 {0} 。',
    'invalidSameSiteNone'   => '使用 "SameSite=None" 屬性需要設定 "Secure" 屬性。',
    'invalidCookieInstance' => '"{0}" 預期 cookies 陣列是以 "{1}" 的實體所組成，但卻在索引 {3} 發現了 "{2}" 。',
    'unknownCookieInstance' => '在集合中並沒有找到名稱是 "{0}" 且前綴詞為 "{1}" 的 Cookie 物件。',
];
