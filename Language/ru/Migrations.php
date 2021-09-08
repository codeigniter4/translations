<?php

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
    'missingTable'  => 'Должна быть установлена таблица миграций.',
    'disabled'      => 'Миграции были загружены, но отключены или неправильно настроены.',
    'notFound'      => 'Файл миграции не найден: ',
    'batchNotFound' => 'Целевой пакет не найден: ',
    'empty'         => 'Не найдены файлы миграции.',
    'gap'           => 'Существует разрыв в последовательности миграции рядом с номером версии: ',
    'classNotFound' => 'Не удалось найти класс миграции "%s".',
    'missingMethod' => 'В классе миграции отсутствует метод "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\tПереносит базу данных на последнюю доступную миграцию.",
    'migHelpCurrent'  => "\t\tПереносит базу данных в версию, установленную как 'текущая' в конфигурации.",
    'migHelpVersion'  => "\tПеренос базы данных в версию {v}.",
    'migHelpRollback' => "\tЗапускает все миграции 'вниз' до версии 0.",
    'migHelpRefresh'  => "\t\tУдаляет и повторно запускает все миграции для обновления базы данных.",
    'migHelpSeed'     => "\tРаботает SEEDER имени [name].",
    'migCreate'       => "\tСоздает новую миграцию с именем [name].",
    'nameMigration'   => 'Имя файла миграции',
    'migNumberError'  => 'Номер миграции должен состоять из трех цифр, и в нем не должно быть пробелов.',
    'rollBackConfirm' => 'Вы уверены, что хотите откатиться назад ?',
    'refreshConfirm'  => 'Вы уверены, что хотите обновить ?',

    'latest'            => 'Запуск всех новых миграций...',
    'generalFault'      => 'Миграция не удалась !',
    'migInvalidVersion' => 'Указан неверный номер версии.',
    'toVersionPH'       => 'Переход к версии %s...',
    'toVersion'         => 'Переход к текущей версии...',
    'rollingBack'       => 'Откат миграции в: ',
    'noneFound'         => 'Миграций не обнаружено.',
    'on'                => 'Миграция на: ',
    'migSeeder'         => 'Имя SEEDER`a',
    'migMissingSeeder'  => 'Необходимо указать имя для SEEDER`a.',
    'removed'           => 'Откат: ',
    'added'             => 'Запуск: ',

    'version'  => 'Версия',
    'filename' => 'Имя файла',
];
