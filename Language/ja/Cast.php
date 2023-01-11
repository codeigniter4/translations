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
    'baseCastMissing'        => 'クラス "{0}" は "CodeIgniter\Entity\Cast\BaseCast" を継承しなければいけません。', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'invalidCastMethod'      => 'メソッド "{0}" は無効なキャストメソッドです。有効なメソッド: ["get", "set"]', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].'
    'invalidTimestamp'       => '型キャスト "timestamp" には正しいタイムスタンプを指定してください。', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => '予期しない制御文字が見つかりました。', // 'Unexpected control character found.'
    'jsonErrorDepth'         => '最大スタックの深さを超えました。', // 'Maximum stack depth exceeded.'
    'jsonErrorStateMismatch' => 'アンダーフローまたはモードの不一致です。', // 'Underflow or the modes mismatch.'
    'jsonErrorSyntax'        => '構文エラー、不正なJSON。', // 'Syntax error, malformed JSON.'
    'jsonErrorUnknown'       => '未知のエラー。', // 'Unknown error.'
    'jsonErrorUtf8'          => '不正なUTF-8文字があり、誤ってエンコードされた可能性があります。', // 'Malformed UTF-8 characters, possibly incorrectly encoded.'
];
