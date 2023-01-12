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
    'baseCastMissing'        => '"{0}" 클래스는 "CodeIgniter\Entity\Cast\BaseCast" 클래스를 상속해야 합니다.', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'invalidCastMethod'      => '"{0}"는 유효하지 않은 캐스팅 메소드이며, 유효한 메소드들은 ["get", "set"]입니다.', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].'
    'invalidTimestamp'       => '"timestamp" 캐스팅 유형은 timestamp여야 합니다.', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => '예상치 못한 제어 문자 존재', // 'Unexpected control character found.'
    'jsonErrorDepth'         => '최대 스택 깊이 초과', // 'Maximum stack depth exceeded.'
    'jsonErrorStateMismatch' => 'Underflow 또는 modes 불일치', // 'Underflow or the modes mismatch.'
    'jsonErrorSyntax'        => 'JSON 구문 오류', // 'Syntax error, malformed JSON.'
    'jsonErrorUnknown'       => '알 수 없는 에러', // 'Unknown error.'
    'jsonErrorUtf8'          => 'UTF-8 문자열 구문 오류. 인코딩이 잘못되었을 수도 있습니다.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.'
];
