<?php

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
    'missingDatabaseTable'   => '`sessionSavePath` трябва да има името на таблицата, за да работи манипулаторът на сесии на базата данни.',
    'invalidSavePath'        => 'Сесия: Конфигурираният път за запис "{0}" не е директория, не съществува или не може да бъде създаден.',
    'writeProtectedSavePath' => 'Сесия: Конфигурираният път за запис "{0}" не може да се записва от PHP процеса.',
    'emptySavePath'          => 'Сесия: Няма конфигуриран път за запис.',
    'invalidSavePathFormat'  => 'Сесия: Невалиден формат на пътя за запис на Redis: {0}',
    'invalidSameSiteSetting' => 'Сесия: Настройката SameSite трябва да е None, Lax, Strict или празен низ. Дадено: {0}',
];
