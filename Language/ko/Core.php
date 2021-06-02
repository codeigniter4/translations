<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Core language settings
return [
	'copyError'                    => '파일({0}) 교체를 시도하는 도중에 에러가 발생하였습니다. 파일 디렉터리에 쓰기 권한이 있는지 확인해주십시오.', // An error was encountered while attempting to replace the file ({0}). Please make sure your file directory is writable.
	'enabledZlibOutputCompression' => 'zlib.output_compression ini 지시문이 켜져 있습니다. 이것은 출력 버퍼에서 잘 작동하지 않습니다.', // Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.
	'invalidFile'                  => '유효하지 않은 파일: {0}', // Invalid file: {0}
	'invalidPhpVersion'            => 'CodeIgniter를 실행하려면 PHP 버전이 {0} 이상이어야합니다. 현재 버전: {1}', // Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}
	'missingExtension'             => '프레임 워크에는 {0} 확장 프로그램이 설치 및 로드 되어야합니다.', // The framework needs the following extension(s) installed and loaded: {0}.
	'noHandlers'                   => '{0}은 (는) 하나 이상의 핸들러를 제공해야합니다.', // {0} must provide at least one Handler.
];
