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

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'В конфигурации проверки нет наборов правил.',
    'ruleNotFound'    => '{0} не является допустимым правилом.',
    'groupNotFound'   => '{0} не является допустимой группой правил.',
    'groupNotArray'   => '{0} группа правил должна быть массивом.',
    'invalidTemplate' => '{0} не является допустимым шаблоном проверки.',

    // Rule Messages
    'alpha'                 => 'Поле {field} может содержать только алфавитные символы.',
    'alpha_dash'            => 'Поле {field} может содержать только буквенно-цифровые символы, символы подчеркивания и тире.',
    'alpha_numeric'         => 'Поле {field} может содержать только буквенно-цифровые символы.',
    'alpha_numeric_punct'   => 'Поле {field} может содержать только буквенно-цифровые символы, пробелы и символы: ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'Поле {field} может содержать только буквенно-цифровые символы и пробелы.',
    'alpha_space'           => 'Поле {field} может содержать только алфавитные символы и пробелы.',
    'decimal'               => 'Поле {field} должно содержать десятичное число.',
    'differs'               => 'Поле {field} должно отличаться от поля {param}.',
    'equals'                => 'Поле {field} должно совпадать с полем {param}.',
    'exact_length'          => 'Поле {field} должно быть ровно {param} символов в длину.',
    'field_exists'          => 'Поле {field} должно существовать.',
    'greater_than'          => 'Поле {field} должно содержать число, большее, чем {param}.',
    'greater_than_equal_to' => 'Поле {field} должно содержать число, большее или равное {param}.',
    'hex'                   => 'Поле {field} должно содержать только шестнадцатеричные символы.',
    'in_list'               => 'Поле {field} должно быть одним из следующих: {param}.',
    'integer'               => 'Поле {field} должно содержать целое число.',
    'is_natural'            => 'Поле {field} должно содержать только цифры.',
    'is_natural_no_zero'    => 'Поле {field} должно содержать только цифры и должно быть больше нуля.',
    'is_not_unique'         => 'Поле {field} должно содержать уже существующее значение в базе данных.',
    'is_unique'             => 'Поле {field} должно содержать уникальное значение.',
    'less_than'             => 'Поле {field} должно содержать число меньше, чем {param}.',
    'less_than_equal_to'    => 'Поле {field} должно содержать число, меньшее или равное {param}.',
    'matches'               => 'Поле {field} не соответствует полю {param}.',
    'max_length'            => 'Длина поля {field} не может превышать {param} символов.',
    'min_length'            => 'Длина поля {field} должна быть не менее {param} символов.',
    'not_equals'            => 'Поле {field} не может быть: {param}.',
    'not_in_list'           => 'Поле {field} не должно быть одно из: {param}.',
    'numeric'               => 'Поле {field} должно содержать только числа.',
    'regex_match'           => 'Поле {field} имеет неправильный формат.',
    'required'              => 'Поле {field} является обязательным.',
    'required_with'         => 'Поле {field} является обязательным, если присутствует {param}.',
    'required_without'      => 'Поле {field} является обязательным, если {param} отсутствует.',
    'string'                => 'Поле {field} должно быть допустимой строкой.',
    'timezone'              => 'Поле {field} должно быть допустимым часовым поясом.',
    'valid_base64'          => 'Поле {field} должно быть допустимой строкой base64.',
    'valid_email'           => 'Поле {field} должно содержать действительный адрес электронной почты.',
    'valid_emails'          => 'Поле {field} должно содержать все допустимые адреса электронной почты.',
    'valid_ip'              => 'Поле {field} должно содержать допустимый IP-адрес.',
    'valid_url'             => 'Поле {field} должно содержать допустимый URL-адрес.',
    'valid_url_strict'      => 'Поле {field} должно содержать допустимый URL-адрес.',
    'valid_date'            => 'Поле {field} должно содержать допустимую дату.',
    'valid_json'            => 'Поле {field} должно содержать допустимый JSON.',

    // Credit Cards
    'valid_cc_num' => 'Поле {field} должно содержать действительный номер кредитной карты.',

    // Files
    'uploaded' => 'Поле {field} не содержит файл.',
    'max_size' => 'Поле {field} содержит слишком большой файл.',
    'is_image' => 'Поле {field} должно содержать файл изображения.',
    'mime_in'  => 'Поле {field} должно содержать допустимый тип файла.',
    'ext_in'   => 'Поле {field} должно содержать допустимое расширение файла.',
    'max_dims' => 'Поле {field} не содержит изображение либо превышает допустимую ширину или высоту.',
    'min_dims' => 'Поле {field} не содержит изображение либо имеет недостаточную ширину или высоту.',
];
