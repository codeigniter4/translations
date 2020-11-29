<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Encryption language settings
return [
	'noDriverRequested'    => '드라이버가 요청되지 않았습니다.', // 미스 데이지가 화낼 것입니다. (역자 주: 영화 Driving Miss Daisy)', // 영어권 문화와 관련된 유머 - 미스 데이지 제외 : (역자 주: 1989년 개봉된 아카데미 작품상을 받은 드라마/코미디 영화 Driving Miss Daisy) @see: https://en.wikipedia.org/wiki/Driving_Miss_Daisy)', // 'No driver requested; Miss Daisy will be so upset!',
	'noHandlerAvailable'   => '사용이 가능한 {0} 암호화 핸들러를 찾을 수 없습니다.', // 'Unable to find an available {0} encryption handler.',
	'unKnownHandler'       => '알 수 없는 드라이버: "{0}" 경우는 설정될 수 없습니다.', // '"{0}" cannot be configured.',
	'starterKeyNeeded'     => '암호화 처리 시 start key가 필요합니다.', // CI4 기준 : Encryption.php initialize()에서 key가 없거나, OpenSSLHandler.php encrypt()에서 암호화 키값이 없는 경우. 에러 메시지. // 'Encrypter needs a starter key.',
	'authenticationFailed' => '복호화: 인증 실패', // 'Decrypting: authentication failed.',
	'encryptionFailed'     => '암호화 실패함', // 'Encryption failed.',
];
