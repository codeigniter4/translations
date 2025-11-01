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

// Session language settings
return [
    'missingDatabaseTable'   => '"sessionSavePath" должен содержать имя таблицы для работы Database Session Handler.',
    'invalidSavePath'        => 'Сессия: указанный путь для сохранения "{0}" не является каталогом, не существует или не может быть создан.',
    'writeProtectedSavePath' => 'Сессия: указанный путь для сохранения "{0}" недоступен для записи процессом PHP.',
    'emptySavePath'          => 'Сессия: путь для сохранения не настроен.',
    'invalidSavePathFormat'  => 'Сессия: недопустимый формат пути Redis: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Сессия: настройка SameSite должна быть None, Lax, Strict или пустой строкой. Указано: "{0}"',
];
