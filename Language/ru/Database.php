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

// Database language settings
return [
    'invalidEvent'                     => '"{0}" не является допустимым callback-ом события модели.',
    'invalidArgument'                  => 'Вы должны указать корректный "{0}".',
    'invalidAllowedFields'             => 'Для модели "{0}" необходимо указать разрешённые поля.',
    'emptyDataset'                     => 'Нет данных для {0}.',
    'emptyPrimaryKey'                  => 'Не определён первичный ключ при попытке выполнить {0}.',
    'failGetFieldData'                 => 'Не удалось получить данные поля из базы данных.',
    'failGetIndexData'                 => 'Не удалось получить данные индекса из базы данных.',
    'failGetForeignKeyData'            => 'Не удалось получить данные внешнего ключа из базы данных.',
    'parseStringFail'                  => 'Не удалось распарсить строку ключа.',
    'featureUnavailable'               => 'Эта функция недоступна для используемой базы данных.',
    'tableNotFound'                    => 'Таблица "{0}" не найдена в текущей базе данных.',
    'noPrimaryKey'                     => 'Класс модели "{0}" не указывает первичный ключ.',
    'noDateFormat'                     => 'Класс модели "{0}" не имеет корректного dateFormat.',
    'fieldNotExists'                   => 'Поле "{0}" не найдено.',
    'forEmptyInputGiven'               => 'Для поля "{0}" передано пустое значение.',
    'forFindColumnHaveMultipleColumns' => 'В имени столбца допускается только один столбец.',
    'methodNotAvailable'               => 'Невозможно использовать "{1}" в "{0}". Это метод класса Query Builder.',
];
