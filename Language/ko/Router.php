<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Router language settings
return [
    'invalidParameter'         => '파라미터가 예상한 타입으로 매치되지 않았습니다.', // 'A parameter does not match the expected type.'
    'missingDefaultRoute'      => '어떤 페이지를 표시해야 하는지 결정할 수 없습니다. 라우팅 파일에 기본 경로가 지정되지 않았습니다.', // 'Unable to determine what should be displayed. A default route has not been specified in the routing file.'
    'invalidDynamicController' => '보안상의 이유로 동적 컨트롤러는 허용되지 않습니다. 라우터 경로: {0}', // A dynamic controller is not allowed for security reasons. Route handler: {0}
    'invalidControllerName'    => '네임스페이스 구분 기호는 슬래시(/)가 아니라 백슬래시(\)입니다. 라우터 경로: {0}', // The namespace delimiter is a backslash (\), not a slash (/). Route handler: {0}
];
