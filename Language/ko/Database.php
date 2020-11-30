<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Database language settings
return [
	'invalidEvent'                     => '{0}의 경우는 유효하지 않은 Model Event callback입니다.', //  CI4 기준 : {0}에는 method가 들어감. '은, 는, 이, 가' 조사를 붙이기가 애매해서 '{0}의 경우는'라고 덧붙임. // '{0} is not a valid Model Event callback.',
	'invalidArgument'                  => '{0} 대신 반드시 유효한 인수가 제공되어야 합니다.', //  CI4 기준 : {0}에는 argument가 들어감. // 'You must provide a valid {0}.',
	'invalidAllowedFields'             => 'Model을 위한 fileds는 반드시 명시가 되어야 합니다: {0}', // 'Allowed fields must be specified for model: {0}',
	'emptyDataset'                     => '{0} : data가 들어있지 않습니다.', // CI4 기준 : DB 작업 관련, data가 없는 경우. {0}에는 'insert', 'update', 'chunk'가 들어감. // 'There is no data to {0}.',
	'emptyPrimaryKey'                  => '{0}을(를) 만들려고 할때 정의 된 기본키가 없습니다.', // 'There is no primary key defined when trying to make {0}.',
	'failGetFieldData'                 => '데이터베이스로부터 field 가져오기 실패.', // 'Failed to get field data from database.',
	'failGetIndexData'                 => '데이터베이스로부터 index 데이터 가져오기 실패.', // 'Failed to get index data from database.',
	'failGetForeignKeyData'            => '데이터베이스로부터 foreign key 데이터 가져오기 실패.', // 'Failed to get foreign key data from database.',
	'parseStringFail'                  => 'key string 구문 분석을 실패함.', // CI4 rc.3기준 : 'parseStringFail'를 사용하는 곳을 찾지 못했음. 차후 CI 팀에 의해서 변경될 수도 있을 듯함. 차후, 사용되는 구문에 따라서 해석이 변경될 수 있음. // 'Parsing key string failed.',
	'featureUnavailable'               => '사용 중인 데이터베이스에서 이 기능을 사용할 수 없습니다.', // 'This feature is not available for the database you are using.',
	'tableNotFound'                    => '데이터베이스에서 찾을 수 없는 테이블: `{0}`', // 'Table `{0}` was not found in the current database.',
	'noPrimaryKey'                     => 'Primary Key가 명시되지 않은 model class: `{0}`', // '`{0}` model class does not specify a Primary Key.',
	'noDateFormat'                     => '유효한 dateFormat(날짜 형식)을 갖고 있지 않은 model class: `{0}`', // '`{0}` model class does not have a valid dateFormat.',
	'fieldNotExists'                   => '`{0}` 경우, 필드를 찾지 못했습니다: `{0}`', // 'Field `{0}` not found.',
	'forEmptyInputGiven'               => '필드에 `{0}` 경우를 사용하기 위해서 비어있는 구문이 지정되었습니다.', // CI4 기준 : {0}에 string $argument 또는 'Select'가 들어감. // 'Empty statement is given for the field `{0}`',
	'forFindColumnHaveMultipleColumns' => 'column 명에는 오직 하나의 column만이 허용됩니다.', // 'Only single column allowed in Column name.',
];
