<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Time language settings
return [
    'invalidFormat'  => '"{0}"은 유효한 날짜/시간 형식이 아닙니다.', // "{0}" is not a valid datetime format
    'invalidMonth'   => '"월"은 1에서 12가 되어야 합니다. 지정한 값: {0}', // 'Months must be between 1 and 12. Given: {0}'
    'invalidDay'     => '"일"은 1에서 31이 되어야 합니다. 지정한 값: {0}', // 'Days must be between 1 and 31. Given: {0}'
    'invalidOverDay' => '"일"은 1에서 {0}경우가 되어야 합니다. 지정한 값: {1}', // 'Days must be between 1 and {0}. Given: {1}'
    'invalidHours'   => '"시간"은 0에서 23이 되어야 합니다. 지정한 값: {0}', // 'Hours must be between 0 and 23. Given: {0}'
    'invalidMinutes' => '"분"은 0에서 59가 되어야 합니다. 지정한 값: {0}', // 'Minutes must be between 0 and 59. Given: {0}'
    'invalidSeconds' => '"초"는 0에서 59가 되어야 합니다. 지정한 값: {0}', // 'Seconds must be between 0 and 59. Given: {0}'
    'years'          => '{0, plural, =1{# 년} other{# 년}}', // {0, plural, =1{# year} other{# years}}
    'months'         => '{0, plural, =1{# 월} other{# 월}}', // {0, plural, =1{# month} other{# months}}
    'weeks'          => '{0, plural, =1{# 주} other{# 주}}', // {0, plural, =1{# week} other{# weeks}}
    'days'           => '{0, plural, =1{# 일} other{# 일}}', // {0, plural, =1{# day} other{# days}}
    'hours'          => '{0, plural, =1{# 시간} other{# 시간}}', // {0, plural, =1{# hour} other{# hours}}
    'minutes'        => '{0, plural, =1{# 분} other{# 분}}', // {0, plural, =1{# minute} other{# minutes}}
    'seconds'        => '{0, plural, =1{# 초} other{# 초}}', // {0, plural, =1{# second} other{# seconds}}
    'ago'            => '과거 {0} 전에', // '{0} ago'
    'inFuture'       => '앞으로 {0} 이내에', // 'in {0}'
    'yesterday'      => '어제', // 'Yesterday'
    'tomorrow'       => '내일', // 'Tomorrow'
    'now'            => '현재', // 'Just now'
];
