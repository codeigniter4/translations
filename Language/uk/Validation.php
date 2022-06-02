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
    'noRuleSets'      => 'Набори правил не вказано в налаштуваннях перевірки.',
    'ruleNotFound'    => '{0} не є дійсним правилом',
    'groupNotFound'   => '{0} не є групою правил перевірки.',
    'groupNotArray'   => '{0} група правил повинна бути масивом.',
    'invalidTemplate' => '{0} не є дійсним шаблоном перевірки.',

    // Rule Messages
    'alpha'                 => 'Поле {field} може містити лише алфавітні символи.',
    'alpha_dash'            => 'Поле {field} може містити лише буквено-цифрові символи, символи підкреслення та тире.',
    'alpha_numeric'         => 'Поле {field} може містити лише буквено-цифрові символи.',
    'alpha_numeric_punct'   => 'Поле {field} може містити лише буквено-цифрові символи, пробіли та ~! # $% & * - _ + = | .: символи.',
    'alpha_numeric_space'   => 'Поле {field} може містити лише буквено-цифрові та пробільні символи.',
    'alpha_space'           => 'Поле {field} може містити лише алфавітні символи та пробіли.',
    'decimal'               => 'Поле {field} має містити десяткове число.',
    'differs'               => 'Поле {field} повинно відрізнятися від поля {param}.',
    'equals'                => 'Поле {field} повинно співпадати з полем {param}.',
    'exact_length'          => 'Поле {field} повинно мати довжину {param} символів.',
    'greater_than'          => 'Поле {field} повинно мати число, більше від {param}.',
    'greater_than_equal_to' => 'Поле {field} повинно мати число, не менше ніж {param}.',
    'hex'                   => 'Поле {field} може містити лише шістнадцяткові символи.',
    'in_list'               => 'Поле {field} має бути одним із:  {param}.',
    'integer'               => 'Поле {field} має містити ціле число.',
    'is_natural'            => 'Поле {field} має містити лише цифри.',
    'is_natural_no_zero'    => 'Поле {field} має містити лише цифри і має бути більше нуля.',
    'is_not_unique'         => 'Поле {field} має містити раніше існуюче значення в базі даних.',
    'is_unique'             => 'Поле {field} має містити унікальне значення.',
    'less_than'             => 'Поле {field}  має містити число менше {param}.',
    'less_than_equal_to'    => 'Поле {field} має містити число менше або рівне {param}.',
    'matches'               => 'Поле {field} не відповідає полю {param}.',
    'max_length'            => 'Довжина поля {field} не може перевищувати {param} символів.',
    'min_length'            => 'Довжина поля {field} має містити не менше {param} символів.',
    'not_equals'            => 'Поле {field} не може бути: {param}.',
    'numeric'               => 'Поле {field} має містити лише цифри.',
    'regex_match'           => 'Поле {field} має неправильний формат.',
    'required'              => 'Поле {field} є обов’язковим.',
    'required_with'         => 'Поле {field} є обов’язковим, якщо присутній параметр {param}.',
    'required_without'      => 'Поле {field} є обов’язковим, якщо параметр {param} відсутній.',
    'string'                => 'Поле {field} має бути дійсним рядком.',
    'timezone'              => 'Поле {field} має бути дійсним часовим поясом.',
    'valid_base64'          => 'Поле {field} має бути дійсним рядком base64.',
    'valid_email'           => 'Поле {field} має містити дійсну адресу електронної пошти.',
    'valid_emails'          => 'Поле {field} має містити всі дійсні адреси електронної пошти.',
    'valid_ip'              => 'Поле {field} має містити дійсну IP-адресу.',
    'valid_url'             => 'Поле {field} має містити дійсну URL-адресу.',
    'valid_url_strict'      => 'Поле {field} має містити дійсну URL-адресу.',
    'valid_date'            => 'Поле {field} має містити дійсну дату.',

    // Credit Cards
    'valid_cc_num' => 'Поле {field} має містити дійсний номер кредитної картки.',

    // Files
    'uploaded' => 'Поле {field} не містить файл.',
    'max_size' => 'Поле {field} містить занадто великий файл.',
    'is_image' => 'Поле {field} повинно містити файл зображення.',
    'mime_in'  => 'Поле {field} повинно містити допустимий тип файлу.',
    'ext_in'   => 'Поле {field} повинно містити допустиме розширення файлу.',
    'max_dims' => 'Поле {field} не містить зображення, або це зображення занадто широке чи високе.',
];
