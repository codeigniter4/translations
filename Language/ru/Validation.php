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
    'noRuleSets'      => 'В конфигурации Validation не указаны наборы правил.',
    'ruleNotFound'    => '"{0}" не является допустимым правилом.',
    'groupNotFound'   => '"{0}" не является группой правил валидации.',
    'groupNotArray'   => 'Группа правил "{0}" должна быть массивом.',
    'invalidTemplate' => '"{0}" не является допустимым шаблоном Validation.',

    // Rule Messages
    'alpha'                 => 'Поле {field} может содержать только буквенные символы.',
    'alpha_dash'            => 'Поле {field} может содержать только буквы, цифры, подчеркивания и дефисы.',
    'alpha_numeric'         => 'Поле {field} может содержать только буквенно-цифровые символы.',
    'alpha_numeric_punct'   => 'Поле {field} может содержать только буквенно-цифровые символы, пробелы и символы ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'Поле {field} может содержать только буквенно-цифровые символы и пробелы.',
    'alpha_space'           => 'Поле {field} может содержать только буквенные символы и пробелы.',
    'decimal'               => 'Поле {field} должно содержать десятичное число.',
    'differs'               => 'Поле {field} должно отличаться от поля {param}.',
    'equals'                => 'Поле {field} должно быть точно: {param}.',
    'exact_length'          => 'Длина поля {field} должна быть ровно {param} символов.',
    'field_exists'          => 'Поле {field} должно существовать.',
    'greater_than'          => 'Поле {field} должно содержать число больше {param}.',
    'greater_than_equal_to' => 'Поле {field} должно содержать число больше или равно {param}.',
    'hex'                   => 'Поле {field} может содержать только шестнадцатеричные символы.',
    'in_list'               => 'Поле {field} должно быть одним из: {param}.',
    'integer'               => 'Поле {field} должно содержать целое число.',
    'is_natural'            => 'Поле {field} может содержать только цифры.',
    'is_natural_no_zero'    => 'Поле {field} может содержать только цифры и должно быть больше нуля.',
    'is_not_unique'         => 'Поле {field} должно содержать ранее существующее значение в базе данных.',
    'is_unique'             => 'Поле {field} должно содержать уникальное значение.',
    'less_than'             => 'Поле {field} должно содержать число меньше {param}.',
    'less_than_equal_to'    => 'Поле {field} должно содержать число меньше или равно {param}.',
    'matches'               => 'Поле {field} не совпадает с полем {param}.',
    'max_length'            => 'Длина поля {field} не может превышать {param} символов.',
    'min_length'            => 'Длина поля {field} должна быть не менее {param} символов.',
    'not_equals'            => 'Поле {field} не может быть: {param}.',
    'not_in_list'           => 'Поле {field} не должно быть одним из: {param}.',
    'numeric'               => 'Поле {field} должно содержать только числа.',
    'regex_match'           => 'Поле {field} имеет неверный формат.',
    'required'              => 'Поле {field} обязательно для заполнения.',
    'required_with'         => 'Поле {field} обязательно, когда присутствует {param}.',
    'required_without'      => 'Поле {field} обязательно, когда {param} отсутствует.',
    'string'                => 'Поле {field} должно быть корректной строкой.',
    'timezone'              => 'Поле {field} должно быть допустимой временной зоной.',
    'valid_base64'          => 'Поле {field} должно быть корректной строкой base64.',
    'valid_email'           => 'Поле {field} должно содержать корректный адрес электронной почты.',
    'valid_emails'          => 'Поле {field} должно содержать только корректные адреса электронной почты.',
    'valid_ip'              => 'Поле {field} должно содержать корректный IP-адрес.',
    'valid_url'             => 'Поле {field} должно содержать корректный URL.',
    'valid_url_strict'      => 'Поле {field} должно содержать корректный URL.',
    'valid_date'            => 'Поле {field} должно содержать корректную дату.',
    'valid_json'            => 'Поле {field} должно содержать корректный JSON.',

    // Credit Cards
    'valid_cc_num' => '{field} не похоже на корректный номер кредитной карты.',

    // Files
    'uploaded' => '{field} не является корректным загруженным файлом.',
    'max_size' => '{field} слишком большой файл.',
    'is_image' => '{field} не является корректным загруженным изображением.',
    'mime_in'  => '{field} имеет недопустимый MIME-тип.',
    'ext_in'   => '{field} имеет недопустимое расширение файла.',
    'max_dims' => '{field} либо не является изображением, либо слишком широкое или высокое.',
    'min_dims' => '{field} либо не является изображением, либо слишком узкое или низкое.',
];
