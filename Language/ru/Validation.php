<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'В конфигурации проверки не указаны наборы правил.',
   'ruleNotFound'          => '{0} не является допустимым правилом.',
   'groupNotFound'         => '{0} не является группой правил проверки.',
   'groupNotArray'         => '{0} группа правил должна быть массивом.',
   'invalidTemplate'       => '{0} не является допустимым шаблоном проверки.',

	// Rule Messages
   'alpha'                 => 'Поле {field} может содержать только буквы алфавита.',
   'alpha_dash'            => 'Поле {field} может содержать только буквенно-цифровые символы, подчеркивания и тире.',
   'alpha_numeric'         => 'Поле {field} может содержать только буквенно-цифровые символы.',
   'alpha_numeric_space'   => 'Поле {field} может содержать только буквенно-цифровые символы и пробелы.',
   'alpha_space'           => 'Поле {field} может содержать только алфавитные символы и пробелы.',
   'decimal'               => 'Поле {field} должно содержать десятичное число.',
   'differs'               => 'Поле {field} должно отличаться от поля {param}.',
   'equals'                => 'Поле {field} должно быть точно {param}.',
   'exact_length'          => 'Поле {field} должно быть длиной ровно {param} символов.',
   'greater_than'          => 'Поле {field} должно содержать число больше, чем {param}.',
   'greater_than_equal_to' => 'Поле {field} должно содержать число, большее или равное {param}.',
   'in_list'               => 'Поле {field} должно быть одним из: {param}.',
   'integer'               => 'Поле {field} должно содержать целое число.',
   'is_natural'            => 'Поле {field} должно содержать только цифры.',
   'is_natural_no_zero'    => 'Поле {field} должно содержать только цифры и должно быть больше нуля.',
   'is_unique'             => 'Поле {field} должно содержать уникальное значение.',
   'less_than'             => 'Поле {field} должно содержать число меньше {param}.',
   'less_than_equal_to'    => 'Поле {field} должно содержать число, меньшее или равное {param}.',
   'matches'               => 'Поле {field} не соответствует полю {param}.',
   'max_length'            => 'Длина поля {field} не может превышать {param} символов.',
   'min_length'            => 'Поле {field} должно быть длиной не менее {param} символов.',
   'not_equals'            => 'Поле {field} не может быть {param}.',
   'numeric'               => 'Поле {field} должно содержать только цифры.',
   'regex_match'           => 'Поле {field} имеет неверный формат.',
   'required'              => 'Поле {field} обязательно для заполнения.',
   'required_with'         => 'Поле {field} обязательно для заполнения, когда присутствует {param}.',
   'required_without'      => 'Поле {field} является обязательным, когда {param} отсутствует.',
   'timezone'              => 'Поле {field} должно быть действительным часовым поясом.',
   'valid_base64'          => 'Поле {field} должно быть допустимой строкой base64.',
   'valid_email'           => 'Поле {field} должно содержать действительный адрес электронной почты.',
   'valid_emails'          => 'Поле {field} должно содержать все действительные адреса электронной почты.',
   'valid_ip'              => 'Поле {field} должно содержать действительную IP.',
   'valid_url'             => 'Поле {field} должно содержать действительную URL.',
   'valid_date'            => 'Поле {field} должно содержать действительную дату.',

	// Credit Cards
   'valid_cc_num'          => '{field} не является действительным номером кредитной карты.',

	// Files
   'uploaded'              => '{field} не является допустимым загруженным файлом.',
   'max_size'              => '{field} слишком большой файл.',
   'is_image'              => '{field} не является допустимым загруженным файлом изображения.',
   'mime_in'               => '{field} не имеет допустимого типа MIME.',
   'ext_in'                => '{field} не имеет допустимого расширения файла.',
   'max_dims'              => '{field} либо не является изображением, либо оно слишком широкое или высокое.',
];
