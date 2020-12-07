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
	'invalidEvent'                     => '{0} は有効なモデルイベントコールバックではありません。', //{0} is not a valid Model Event callback.
	'invalidArgument'                  => '有効な {0} を与えてください。', //You must provide a valid {0}.
	'invalidAllowedFields'             => 'モデル「{0}」には許可フィールドを指定する必要があります。: ', //Allowed fields must be specified for model: {0}
	'emptyDataset'                     => '{0} へのデータはありません。', //There is no data to {0}.
	'emptyPrimaryKey'                  => '{0} 作成時にプライマリキーが定義されていません。', //There is no primary key defined when trying to make {0}.
	'failGetFieldData'                 => 'データベースからフィールド・データの取得に失敗しました。', //Failed to get field data from database.
	'failGetIndexData'                 => 'データベースからインデックス・データの取得に失敗しました。', //Failed to get index data from database.
	'failGetForeignKeyData'            => 'データベースからの外部キー・データの取得に失敗しました。', //Failed to get foreign key data from database.
	'parseStringFail'                  => 'キー文字列の解析に失敗しました。', //Parsing key string failed.
	'featureUnavailable'               => 'この機能は、使用しているデータベースでは利用できません。', //This feature is not available for the database you are using.
	'tableNotFound'                    => 'テーブル `{0}` が現在のデータベースに見つかりませんでした。', //Table `{0}` was not found in the current database.
	'noPrimaryKey'                     => 'モデルクラス `{0}` で主キーを指定していません。', //`{0}` model class does not specify a Primary Key.
	'noDateFormat'                     => 'モデルクラス `{0}` に有効なdateFormatがありません。', //`{0}` model class does not have a valid dateFormat.
	'fieldNotExists'                   => 'フィールド `{0}` はありません。', //Field `{0}` not found.
	'forEmptyInputGiven'               => 'フィールド `{0}` に空の文が与えられてます。', //Empty statement is given for the field `{0}`
	'forFindColumnHaveMultipleColumns' => 'カラム名には単一のカラムのみ使用可能です。', //Only single column allowed in Column name.
];
