<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Publisher language settings
return [
    'collision'             => '"{1}"을(를) "{2}"에 복사하는 동안 예기치 않은 에러("{0}")가 발생했습니다.', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".'
    'destinationNotAllowed' => '"{0}" 대상이 디렉토리의 허용 목록에 없습니다.', // 'Destination is not on the allowed list of Publisher directories: "{0}"'
    'fileNotAllowed'        => '"{0}"은(는) "{1}"제한에 의해 실패했습니다. ("{2}")', // '"{0}" fails the following restriction for "{1}": {2}'

    // Publish Command
    'publishMissing' => '모든 네임스페이스에서 {0} 클래스를 찾지 못했습니다.', // 'No Publisher classes detected in {0} across all namespaces.'
    'publishSuccess' => '"{0}"가 {1} 파일들을 "{2}"에 게시했습니다.', // '"{0}" published {1} file(s) to "{2}".'
    'publishFailure' => '"{0}"가 "{1}"에 게시하지 못했습니다!', // '"{0}" failed to publish to "{1}".'
];
