<?php

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
    'invalidEvent'                     => '{0} не е валидно обратно извикване на моделно събитие.',
    'invalidArgument'                  => 'Трябва да предоставите валиден {0}.',
    'invalidAllowedFields'             => 'Позволените полета трябва да бъдат посочени за модел: {0}',
    'emptyDataset'                     => 'Няма данни за {0}.',
    'emptyPrimaryKey'                  => 'Няма дефиниран първичен ключ при опит за създаване на {0}.',
    'failGetFieldData'                 => 'Неуспешно получаване на данни от полето от базата данни.',
    'failGetIndexData'                 => 'Неуспешно получаване на индексни данни от базата данни.',
    'failGetForeignKeyData'            => 'Неуспешно получаване на данни за външен ключ от базата данни.',
    'parseStringFail'                  => 'Анализът на ключов низ е неуспешен.',
    'featureUnavailable'               => 'Тази функция не е налична за базата данни, която използвате.',
    'tableNotFound'                    => 'Таблица `{0}` не беше намерена в текущата база данни.',
    'noPrimaryKey'                     => '`{0}` моделният клас не указва първичен ключ.',
    'noDateFormat'                     => '`{0}` моделният клас няма валиден dateFormat.',
    'fieldNotExists'                   => 'Полето `{0}` не е намерено.',
    'forEmptyInputGiven'               => 'За полето `{0}` е дадено празно изявление.',
    'forFindColumnHaveMultipleColumns' => 'В името на колоната е разрешена само една колона.',
    'methodNotAvailable'               => 'Не можете да използвате „{1}“ в „{0}“. Това е метод от класа `Query Builder`.',
];
