<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// CLI language settings
return [
    'altCommandPlural'   => 'この中の1つですか？', // Did you mean one of these?
    'altCommandSingular' => 'これですか？', // Did you mean this?
    'commandNotFound'    => '"{0}" というコマンドはありません。', // Command "{0}" not found.
    'generator'          => [
        'cancelOperation' => '操作はキャンセルされました。', // 'Operation has been cancelled.',
        'className'       => [
            'command'    => 'コマンドクラス名', // 'Command class name',
            'config'     => '設定クラス名', // 'Config class name',
            'controller' => 'コントローラークラス名', // 'Controller class name',
            'default'    => 'クラス名', // 'Class name',
            'entity'     => 'エンティティクラス名', // 'Entity class name',
            'filter'     => 'フィルタークラス名', // 'Filter class name',
            'migration'  => 'マイグレーションクラス名', // 'Migration class name',
            'model'      => 'モデルクラス名', // 'Model class namel',
            'seeder'     => 'シーダークラス名', // 'Seeder class name',
            'validation' => 'バリデーションクラス名', // 'Validation class name',
        ],
        'commandType'      => 'コマンドのタイプ', // 'Command type',
        'databaseGroup'    => 'データベースグループ', // 'Database group',
        'fileCreate'       => '作成されたファイル: {0}', // 'File created: {0}',
        'fileError'        => 'ファイル作成エラー: {0}', // 'Error while creating file: {0}',
        'fileExist'        => '存在するファイル: {0}', // 'File exists: {0}',
        'fileOverwrite'    => '上書きされたファイル: {0}', // 'File overwritten: {0}',
        'parentClass'      => '親クラス名', // 'Parent class',
        'returnType'       => '戻り値の型', // 'Return type',
        'tableName'        => 'テーブル名', // 'Table name',
        'usingCINamespace' => '警告: 名前空間 "CodeIgniter" を使用すると system ディレクトリにファイルが生成されます。', // 'Warning: Using the "CodeIgniter" namespace will generate the file in the system directory.'
    ],
    'helpArguments'       => '引数:', // Arguments:
    'helpDescription'     => '説明:', // Description:
    'helpOptions'         => 'オプション:', // Options:
    'helpUsage'           => '使用法:', // Usage:
    'invalidColor'        => '「{1}」は無効な {0} カラーです。', // Invalid {0} color: {1}.
    'namespaceNotDefined' => '名前空間 "{0}" は定義されていません。', // Namespace "{0}" is not defined.
];
