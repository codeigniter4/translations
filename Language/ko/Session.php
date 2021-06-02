<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => '데이터베이스 세션 핸들러가 동작하기 위해서, 반드시 `sessionSavePath`에 테이블 명이 지정되어야 합니다.', // '`sessionSavePath` must have the table name for the Database Session Handler to work.',
	'invalidSavePath'        => 'Session: 설정된 세션 저장 경로 "{0}"의 경우, 디렉터리가 아니거나 존재하지 않거나 생성할 수 없습니다.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.',
	'writeProtectedSavePath' => 'Session: 설정된 세션 저장 경로 "{0}"의 경우, PHP 프로세스에 의해 쓰기를 할 수 없습니다.', // 'Session: Configured save path "{0}" is not writable by the PHP process.',
	'emptySavePath'          => 'Session: 저장 경로가 설정되어 있지 않습니다.', // 'Session: No save path configured.',
	'invalidSavePathFormat'  => 'Session: 유효하지 않는 Redis 세션 저장 경로 형식: {0}', // 'Session: Invalid Redis save path format: {0}',

	// @deprecated
	'invalidSameSiteSetting' => 'Session : SameSite 설정은 None, Lax, Strict 또는 빈 문자열이어야합니다. 주어진 값 : {0}', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
