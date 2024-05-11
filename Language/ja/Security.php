<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Security language settings
return [
    'disallowedAction' => '要求されたアクションは許可されていません。', // 'The action you requested is not allowed.'
    'insecureCookie'   => 'セキュアでない接続でセキュアクッキーを送信しようとしました。', // 'Attempted to send a secure cookie over a non-secure connection.'

    // @deprecated
    'invalidSameSite' => 'SameSite設定には、None、Lax、Strict、または空文字列を指定する必要がありますが、"{0}" が指定されました。', // 'The SameSite value must be None, Lax, Strict, or a blank string. Given: "{0}"'
];
