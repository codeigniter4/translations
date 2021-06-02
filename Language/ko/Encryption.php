<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Encryption language settings
return [
	'noDriverRequested'    => '드라이버가 요청되지 않았습니다.', // No driver requested; Miss Daisy will be so upset! => 미스 데이지가 화낼 것입니다. (역자 주: 영화 Driving Miss Daisy)', // 영어권 문화와 관련된 유머 - 미스 데이지 제외 : (역자 주: 1989년 개봉된 아카데미 작품상을 받은 드라마/코미디 영화 Driving Miss Daisy) @see: https://en.wikipedia.org/wiki/Driving_Miss_Daisy) - cikorea timothy님 해석
	'noHandlerAvailable'   => '사용 가능한 {0} 암호화 핸들러를 찾을 수 없습니다.', // Unable to find an available {0} encryption handler.
	'unKnownHandler'       => '"{0}"을 (를) 구성 할 수 없습니다.', // "{0}" cannot be configured.
	'starterKeyNeeded'     => '암호화를 하려면 시작 키가 필요합니다.', // Encrypter needs a starter key.
	'authenticationFailed' => '복호화: 인증에 실패했습니다.', // Decrypting: authentication failed.
	'encryptionFailed'     => '암호화 실패', // Encryption failed.
];
