<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// CLI language settings
return [
	'altCommandPlural'   => '이중 하나입니까?', // Did you mean one of these?
	'altCommandSingular' => '이게 맞습니까?', // Did you mean this?
	'commandNotFound'    => '"{0}" 명령어를 찾지 못했습니다.', // Command "{0}" not found.
	'generator'          => [
		'cancelOperation' => '작업이 취소되었습니다.', // Operation has been cancelled.
		'className'       => [
			'command'    => '커멘드 클래스 이름', // Command class name
			'config'     => '설정 클래스 이름', // Config class name
			'controller' => '컨트롤러 클래스 이름', // Controller class name
			'default'    => '클래스 이름', // Class name
			'entity'     => '엔티티 클래스 이름', // Entity class name
			'filter'     => '필터 클래스 이름', // Filter class name
			'migration'  => '마이그레이션 클래스 이름', // Migration class name
			'model'      => '모델 클래스 이름', // Model class namel
			'seeder'     => '시더 클래스 이름', // Seeder class name
			'validation' => '벨리데이션 클래스 이름', // Validation class name
		],
		'commandType'      => '커멘드 타입', // Command type
		'databaseGroup'    => '데이터베이스 그룹', // Database group
		'fileCreate'       => '생성 된 파일 : {0}', // File created: {0}
		'fileError'        => '파일 생성 중 오류 : {0}', // Error while creating file: {0}
		'fileExist'        => '이미 파일이 있습니다 : {0}', // File exists: {0}
		'fileOverwrite'    => '덮어 쓴 파일 : {0}', // File overwritten: {0}
		'parentClass'      => '부모 클래스', // Parent class
		'returnType'       => '리턴 타입', // Return type
		'tableName'        => '테이블 이름', // Table name
		'usingCINamespace' => '경고 : "CodeIgniter" 네임스페이스를 사용하면 시스템 디렉터리에 파일이 생성됩니다.', // Warning: Using the "CodeIgniter" namespace will generate the file in the system directory.
	],
	'helpArguments'       => '인수:', // Arguments:
	'helpDescription'     => '설명:', // Description:
	'helpOptions'         => '옵션:', // Options:
	'helpUsage'           => '사용:', // Usage:
	'invalidColor'        => '유효하지 않은 {0} 색상: {1}.', // Invalid {0} color: {1}.
	'namespaceNotDefined' => '네임 스페이스 "{0}"이(가) 정의되지 않았습니다.', // Namespace "{0}" is not defined.
];
