<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// View language settings
return [
    'invalidCellMethod'     => '{class}::{method} 메서드가 유효하지 않습니다.', // '{class}::{method} is not a valid method.',
    'missingCellParameters' => '{class}::{method} 메서드가 가진 파라미터가 없습니다.', // '{class}::{method} has no params.',
    'invalidCellParameter'  => '{0} 경우, 유효한 파라미터가 아닙니다.', // '{0} is not a valid param name.',
    'noCellClass'           => '지원되는 뷰 셀 클래스가 아닙니다.', // 'No view cell class provided.',
    'invalidCellClass'      => '뷰 셀 클래스의 위치를 찾을 수 없습니다: {0}', // 'Unable to locate view cell class: {0}.',
    'tagSyntaxError'        => 'Parse 태그에 구문 오류가 있습니다: {0}', // 'You have a syntax error in your Parser tags: {0}',
];
