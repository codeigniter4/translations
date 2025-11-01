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

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'Необходимо указать таблицу миграций.',
    'disabled'      => 'Миграции загружены, но отключены или настроены некорректно.',
    'notFound'      => 'Файл миграции не найден: ',
    'batchNotFound' => 'Целевая партия не найдена: ',
    'empty'         => 'Файлы миграций не найдены',
    'gap'           => 'В последовательности миграций есть разрыв около версии: ',
    'classNotFound' => 'Класс миграции "%s" не найден.',
    'missingMethod' => 'В классе миграции отсутствует метод "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tМигрирует базу данных до последней доступной миграции.",
    'migHelpCurrent'  => "\t\tМигрирует базу данных до версии, указанной как 'current' в конфигурации.",
    'migHelpVersion'  => "\tМигрирует базу данных до версии {v}.",
    'migHelpRollback' => "\tОткатывает все миграции 'down' до версии 0.",
    'migHelpRefresh'  => "\t\tУдаляет и повторно выполняет все миграции для обновления базы данных.",
    'migHelpSeed'     => "\tВыполняет сидер с именем [name].",
    'migCreate'       => "\tСоздаёт новую миграцию с именем [name]",
    'nameMigration'   => 'Укажите имя файла миграции',
    'migNumberError'  => 'Номер миграции должен состоять из трёх цифр, без разрывов в последовательности.',
    'rollBackConfirm' => 'Вы уверены, что хотите откатить?',
    'refreshConfirm'  => 'Вы уверены, что хотите обновить?',

    'latest'            => 'Выполняются все новые миграции...',
    'generalFault'      => 'Миграция не удалась!',
    'migrated'          => 'Миграции завершены.',
    'migInvalidVersion' => 'Указан недопустимый номер версии.',
    'toVersionPH'       => 'Миграция до версии %s...',
    'toVersion'         => 'Миграция до текущей версии...',
    'rollingBack'       => 'Откат миграций до партии: ',
    'noneFound'         => 'Миграции не найдены.',
    'migSeeder'         => 'Имя сидера',
    'migMissingSeeder'  => 'Необходимо указать имя сидера.',
    'nameSeeder'        => 'Укажите имя файла сидера',
    'removed'           => 'Откат: ',
    'added'             => 'Выполняется: ',

    // Migrate Status
    'namespace' => 'Пространство имён',
    'filename'  => 'Имя файла',
    'version'   => 'Версия',
    'group'     => 'Группа',
    'on'        => 'Мигрировано: ',
    'batch'     => 'Партия',
];
