<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Number language settings
return [
	'terabyteAbbr' => 'TB',
	'gigabyteAbbr' => 'GB',
	'megabyteAbbr' => 'MB',
	'kilobyteAbbr' => 'KB',
	'bytes'        => 'Bytes',

	// don't forget the space in front of these!
	// Japanese numeral are ten-thousand-based, cause it can not adapt 'number_to_amount()' as below.
	// 日本語の位取りは万進法なのでnumber_to_amount()の動作に適応するのは困難なためローカライズしません。
	// あえて使いたい人は、完全ではありませんがコメントの内容に置き換えることも可能です
	'thousand'    => ' thousand', //thousand → '千'
	'million'     => ' million', //million → '百万'
	'billion'     => ' billion', //billion → '0億' 1 billionは 10億 ただし、カンマ位取りがおかしくなります（1,0000億というような表示になります）
	'trillion'    => ' trillion', //trillion → '兆'
	'quadrillion' => ' quadrillion', //quadrillion → ',000兆' 京としたいところだが 1 quadrillion は 1000兆なので
];
