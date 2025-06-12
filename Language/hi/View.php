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
    'invalidCellMethod'     => '{class}::{method} एक मान्य विधि नहीं है।', // '{class}::{method} is not a valid method.'
    'missingCellParameters' => '{class}::{method} में कोई पैरामीटर नहीं है।', // '{class}::{method} has no params.'
    'invalidCellParameter'  => '"{0}" एक मान्य पैरामीटर नाम नहीं है।', // '"{0}" is not a valid param name.'
    'noCellClass'           => 'कोई व्यू सेल क्लास प्रदान नहीं की गई है।', // 'No view cell class provided.'
    'invalidCellClass'      => 'व्यू सेल क्लास का पता लगाने में असमर्थ: "{0}"।', // 'Unable to locate view cell class: "{0}".'
    'tagSyntaxError'        => 'आपके पार्सर टैग में एक सिंटैक्स त्रुटि है: "{0}"', // 'You have a syntax error in your Parser tags: "{0}"'
    'invalidDecoratorClass' => '"{0}" एक मान्य व्यू डेकोरेटर नहीं है।', // '"{0}" is not a valid View Decorator.'
];
