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
    'disallowedAction' => '요청하신 작업은 허용되지 않습니다.', // 'The action you requested is not allowed.'
    'insecureCookie'   => '비보안(non-secure) 연결을 통해 보안 쿠키를 전송하려고 시도했습니다.', // 'Attempted to send a secure cookie over a non-secure connection.'

    // @deprecated
    'invalidSameSite' => 'SameSite 값("{0}")은 None, Lax, Strict 또는 빈 문자열이어야합니다.', // 'The SameSite value must be None, Lax, Strict, or a blank string. Given: "{0}"'
];
