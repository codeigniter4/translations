<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'                     => '{0}의 경우는 유효하지 않은 모델 이벤트 콜백입니다.', // {0} is not a valid Model Event callback.
    'invalidArgument'                  => '{0} 대신 반드시 유효한 인수가 제공되어야 합니다.', // You must provide a valid {0}.
    'invalidAllowedFields'             => 'Model을 위한 fileds는 반드시 명시가 되어야 합니다: {0}', // Allowed fields must be specified for model: {0}
    'emptyDataset'                     => '{0}에 데이터가 없습니다.', // There is no data to {0}.
    'emptyPrimaryKey'                  => '{0}을(를) 만들려고 할때 정의 된 기본키가 없습니다.', // There is no primary key defined when trying to make {0}.
    'failGetFieldData'                 => '데이터베이스에서 필드 데이터를 가져 오지 못했습니다.', // Failed to get field data from database.
    'failGetIndexData'                 => '데이터베이스에서 인덱스 데이터를 가져 오지 못했습니다.', // Failed to get index data from database.
    'failGetForeignKeyData'            => '데이터베이스에서 외래 키 데이터를 가져 오지 못했습니다.', // Failed to get foreign key data from database.
    'parseStringFail'                  => '키 문자열 구문 분석에 실패했습니다.', // Parsing key string failed.
    'featureUnavailable'               => '이 기능은 사용중인 데이터베이스에서 사용할 수 없습니다.', // This feature is not available for the database you are using.
    'tableNotFound'                    => '현재 데이터베이스에서 `{0}` 테이블을 찾을 수 없습니다.', // Table `{0}` was not found in the current database.
    'noPrimaryKey'                     => '`{0}` 모델 클래스가 기본 키를 지정하지 않습니다.', // `{0}` model class does not specify a Primary Key.
    'noDateFormat'                     => '`{0}` 모델 클래스에 유효한 dateFormat이 없습니다.', // `{0}` model class does not have a valid dateFormat.
    'fieldNotExists'                   => '`{0}` 필드를 찾을 수 없습니다.', // Field `{0}` not found.
    'forEmptyInputGiven'               => '필드 `{0}`에 빈 값이 들어있습니다.', // Empty statement is given for the field `{0}`
    'forFindColumnHaveMultipleColumns' => '열 이름에는 하나의 열만 허용됩니다.', // Only single column allowed in Column name.
];
