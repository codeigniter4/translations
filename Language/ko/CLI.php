<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// CLI language settings
return [
	'commandNotFound'    => '"{0}" 명령어를 찾지 못했습니다.', // 'Command "{0}" not found.',
	'altCommandSingular' => '이게 맞습니까?', // 'Did you mean this?',
	'altCommandPlural'   => '이중 하나입니까?', // 'Did you mean one of these?',
	'helpUsage'          => '사용:', // 'Usage:',
	'helpDescription'    => '설명:', // 'Description:',
	'helpOptions'        => '옵션:', // 'Options:',
	'helpArguments'      => '인수:', //'Arguments:',
	'invalidColor'       => '유효하지 않은 {0} 색상: {1}.', // CI4 기준 : {0}에는 'foreground' 또는 'background' 문자열이 들어감. // 'Invalid {0} color: {1}.',

	// Generators
	'generateClassName'   => '클래스 이름', // 'Name of class',
	'generateParentClass' => '확장할 상위 클래스의 이름', // 'Name of parent class to extend from',
	'generateFileExists'  => '{0}는 이미 존재합니다.', // '{0} already exists.',
	'generateFileSuccess' => '생성된 파일: ', // 'Created file: ',
	'generateFileError'   => '파일 생성 오류: ', // 'Error in creating file: ',
	'namespaceNotDefined' => '네임 스페이스 "{0}"이(가) 정의되지 않았습니다.', // 'Namespace "{0}" is not defined.',
];
