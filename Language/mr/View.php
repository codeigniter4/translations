<?php

declare(strict_types=1);

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
    'invalidCellMethod'     => '{class}::{method} ही वैध method नाही.', // '{class}::{method} is not a valid method.'
    'missingCellParameters' => '{class}::{method} ला params नाहीत.', // '{class}::{method} has no params.'
    'invalidCellParameter'  => '"{0}" हे वैध param नाव नाही.', // '"{0}" is not a valid param name.'
    'noCellClass'           => 'कोणताही view cell class दिलेला नाही.', // 'No view cell class provided.'
    'invalidCellClass'      => 'View cell class सापडत नाही: "{0}".', // 'Unable to locate view cell class: "{0}".'
    'tagSyntaxError'        => 'तुमच्या Parser tags मध्ये syntax error आहे: "{0}"', // 'You have a syntax error in your Parser tags: "{0}"'
    'invalidDecoratorClass' => '"{0}" हा वैध View Decorator नाही.', // '"{0}" is not a valid View Decorator.'
];
