<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cast language settings
return [
	'jsonErrorDepth'         => '最大スタックの深さを超えました。', //'Maximum stack depth exceeded.',
	'jsonErrorStateMismatch' => 'アンダーフローまたはモードの不一致です。', //'Underflow or the modes mismatch.',
	'jsonErrorCtrlChar'      => '予期しない制御文字が見つかりました。', //'Unexpected control character found.',
	'jsonErrorSyntax'        => '構文エラー、不正な JSON。', //'Syntax error, malformed JSON.',
	'jsonErrorUtf8'          => '不正な UTF-8 文字があり、誤ってエンコードされた可能性があります。', //'Malformed UTF-8 characters, possibly incorrectly encoded.',
	'jsonErrorUnknown'       => '未知のエラー。', //'Unknown error.',
	'abstractCastMissing'    => '{0} クラスは CodeIgniter\EntityCast\AbstractCast を継承しなければいけません。', //'The {0} class must inherit the CodeIgniter\EntityCast\AbstractCast class.',
	'wrongCastMethod'        => 'キャストに使用できるメソッドは "get" と "set" です。', //'Allowed methods for cast is "get" and "set".',
	'invalidTimestamp'       => '型キャスト "timestamp" には正しいタイムスタンプを指定してください。', //'Type casting "timestamp" expects a correct timestamp.',
];
