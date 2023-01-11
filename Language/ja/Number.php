<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Number language settings
return [
    'terabyteAbbr' => 'TB', // 'TB'
    'gigabyteAbbr' => 'GB', // 'GB'
    'megabyteAbbr' => 'MB', // 'MB'
    'kilobyteAbbr' => 'KB', // 'KB'
    'bytes'        => 'Bytes', // 'Bytes'

    // don't forget the space in front of these!
    // Japanese numeral are ten-thousand-based, cause it can not adapt 'number_to_amount()' as below.
    // 日本語の位取りは万進法なのでnumber_to_amount()の動作に適応するのは困難なためローカライズしません。
    // あえて使いたい人は、完全ではありませんが以下の内容に置き換えることも可能です。
    // thousand → '千'
    // million → '百万'
    // billion → '0億' 1 billionは 10億 ただし、カンマ位取りがおかしくなります（1,0000億というような表示になります）
    // trillion → '兆'
    // quadrillion → ',000兆' 京としたいところだが 1 quadrillion は 1000兆なので
    'thousand'    => ' thousand', // ' thousand'
    'million'     => ' million', // ' million'
    'billion'     => ' billion', // ' billion'
    'trillion'    => ' trillion', // ' trillion'
    'quadrillion' => ' quadrillion', // ' quadrillion'
];
