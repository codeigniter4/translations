<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'Няма посочени набори от правила в конфигурацията за валидиране.',
    'ruleNotFound'    => '{0} не е валидно правило.',
    'groupNotFound'   => '{0} не е валидна група от правила.',
    'groupNotArray'   => '{0} групата от правила трябва да е масив.',
    'invalidTemplate' => '{0} не е валиден шаблон.',

    // Rule Messages
    'alpha'                 => 'Полето {field} може да съдържа само латински букви.',
    'alpha_dash'            => 'Полето {field} може да съдържа само латински букви, цифри, долна черта и тире.',
    'alpha_numeric'         => 'Полето {field} може да съдържа само латински букви и цифри.',
    'alpha_numeric_punct'   => 'Полето {field} може да съдържа само латински букви, цифри, интервали и следните символи: ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'Полето {field} може да съдържа само латински букви, цифри и интервали.',
    'alpha_space'           => 'Полето {field} може да съдържа само букви и интервали.',
    'decimal'               => 'Полето {field} трябва да съдържа десетично число.',
    'differs'               => 'Полето {field} не трябва да съвпада с полето "{param}".',
    'equals'                => 'Полето {field} трябва да бъде точно: {param}.',
    'exact_length'          => 'Полето {field} трябва да бъде дълго точно {param}s символа.',
    'greater_than'          => 'Полето {field} трябва да съдържа число, по-голямо от {param}.',
    'greater_than_equal_to' => 'Полето {field} трябва да съдържа число, по-голямо или равно на {param}.',
    'hex'                   => 'Полето {field} може да съдържа само шестнадесетични символи.',
    'in_list'               => 'Полето {field} трябва да е измежду стойностите {param}.',
    'integer'               => 'Полето {field} може да съдържа само цeли числа.',
    'is_natural'            => 'Полето {field} трябва да съдържа само числа.',
    'is_natural_no_zero'    => 'Полето {field} трябва да е цяло положително число.',
    'is_not_unique'         => 'Полето {field} трябва да съдържа съществуваща преди това стойност в базата данни.',
    'is_unique'             => 'Полето {field} трябва да съдържа уникална стойност.',
    'less_than'             => 'Полето {field} трябва да съдържа число, по-малко от {param}.',
    'less_than_equal_to'    => 'Полето {field} трябва да съдържа число, по-малко или равно на {param}.',
    'matches'               => 'Полето {field} не съвпада с полето "{param}".',
    'max_length'            => 'Полето {field} трябва да бъде дълго най-много {param} символа.',
    'min_length'            => 'Полето {field} трябва да бъде дълго най-малко {param} символа.',
    'not_equals'            => 'Полето {field} не може да бъде: {param}.',
    'not_in_list'           => 'Полето {field} не трябва да бъде едно от: {param}.',
    'numeric'               => 'Полето {field} трябва да е число.',
    'regex_match'           => 'Полето {field} не е в правилен формат.',
    'required'              => 'Полето {field} е задължително.',
    'required_with'         => 'Полето {field} е задължително, когато присъства {param}.',
    'required_without'      => 'Полето {field} е задължително, когато {param} не присъства.',
    'string'                => 'Полето {field} трябва да е валиден низ.',
    'timezone'              => 'Полето {field} трябва да е валидна часова зона.',
    'valid_base64'          => 'Полето {field} трябва да съдържа валиден Base64 символен низ.',
    'valid_email'           => 'Полето {field} трябва да съдържа валиден email адрес.',
    'valid_emails'          => 'Полето {field} трябва да съдържа валидни email адреси.',
    'valid_ip'              => 'Полето {field} трябва да съдържа валиден IP адрес.',
    'valid_url'             => 'Полето {field} трябва да съдържа валиден URL адрес.',
    'valid_url_strict'      => 'Полето {field} трябва да съдържа валиден URL адрес.',
    'valid_date'            => 'Полето {field} трябва да съдържа валидна дата.',

    // Credit Cards
    'valid_cc_num' => 'Изглежда, че полето {field} не е валиден номер на кредитна карта.',

    // Files
    'uploaded' => '{field} не е валиден качен файл.',
    'max_size' => '{field} е твърде голям файл.',
    'is_image' => '{field} не е валиден, качен файл с изображение.',
    'mime_in'  => '{field} няма валиден mime тип.',
    'ext_in'   => '{field} няма валидно файлово разширение.',
    'max_dims' => '{field} или не е изображение, или е твърде широко или високо.',
];
