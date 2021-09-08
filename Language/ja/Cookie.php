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
    'invalidExpiresTime'    => '"Expires" 属性のタイプ "{0}" が無効です。期待される値は文字列、整数、DateTimeInterface オブジェクトです。', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'クッキーの有効期限が無効です。', // 'The cookie expiration time is not valid.',
    'invalidCookieName'     => 'クッキー名 "{0}" が不正な文字が含まれています。', // 'The cookie name "{0}" contains invalid characters.',
    'emptyCookieName'       => 'クッキー名を空にすることはできません。', // 'The cookie name cannot be empty.',
    'invalidSecurePrefix'   => '接頭辞 "__Secure-" を使用するには "Secure" 属性を設定する必要があります。', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.',
    'invalidHostPrefix'     => '接頭辞 "__Host-" を使用するには "Secure" フラグを設定し、"Domain" 属性を持ち、"Path" を "/" に設定する必要があります。', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".',
    'invalidSameSite'       => 'SameSite の値は、None、Lax、Strict または空文字列ですが、「{0}」が与えられました。', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.',
    'invalidSameSiteNone'   => '"SameSite=None" 属性の使用には "Secure" 属性の設定が必要です。', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.',
    'invalidCookieInstance' => '"{0}" クラスは、"{1}" のインスタンスであるクッキーの配列を期待していましたが、インデックス {3} で "{2}" を取得しました。', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.',
    'unknownCookieInstance' => '名前が "{0}" で接頭辞が "{1}" のクッキーオブジェクトがコレクション内で見つかりませんでした。', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.',
];
