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
    'missingTable'  => 'Потрібно встановити таблицю міграцій.',
    'disabled'      => 'Міграції завантажено, але вони відключені або налаштовані неправильно.',
    'notFound'      => 'Файл міграції не знайдено: ',
    'batchNotFound' => 'Цільовий пакет не знайдено: ',
    'empty'         => 'Файлів міграції не знайдено.',
    'gap'           => 'У послідовності міграції біля номера версії є розрив: ',
    'classNotFound' => 'Не вдалося знайти клас міграції "%s".',
    'missingMethod' => 'У класі міграції відсутній метод "%s".',

    // Migration Command
    'migHelpLatest'     => "\t\tПереносить дані про останню доступну міграцію.",
    'migHelpCurrent'    => "\t\tПереносить базу даних у версію, встановлену як 'поточну' в конфігурації.",
    'migHelpVersion'    => "\tПеренос бази даних у версію {v}.",
    'migHelpRollback'   => "\tЗапуск всіх міграцій 'вниз' до версії 0.",
    'migHelpRefresh'    => "\t\tВидаляє і повторно запускає всі міграції для оновлення баз даних.",
    'migHelpSeed'       => "\tЗапускає сівалку з іменем [name].",
    'migCreate'         => "\tСтворює нову міграцію з іменем [name].",
    'nameMigration'     => 'Ім’я файлу міграції',
    'migNumberError'    => 'Номер міграції має бути з трьох цифр без пробілів.',
    'rollBackConfirm'   => 'Ви впевнені, що хочете відкотитися назад?',
    'refreshConfirm'    => 'Ви впевнені, що хочете оновити?',
    'latest'            => 'Запуск всіх нових міграцій...',
    'generalFault'      => 'Міграція не вдалась !',
    'migInvalidVersion' => 'Вказано некорректний номер версії.',
    'toVersionPH'       => 'Перехід на версію %s...',
    'toVersion'         => 'Перехід до поточної версії...',
    'rollingBack'       => 'Відкат міграції в: ',
    'noneFound'         => 'Міграцій не знайдено.',
    'on'                => 'Міграція на: ',
    'migSeeder'         => 'Ім’я сівалки',
    'migMissingSeeder'  => 'Слід вказати ім’я сівалки.',
    'removed'           => 'Відкат: ',
    'added'             => 'Запуск: ',

    'version'  => 'Версія',
    'filename' => 'Ім’я файлу',
];
