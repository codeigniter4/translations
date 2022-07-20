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
    'missingTable'  => 'Таблицата за миграции трябва да бъде зададена.',
    'disabled'      => 'Миграциите са заредени, но са деактивирани или настроени неправилно.',
    'notFound'      => 'Файлът за мигриране не е намерен: ',
    'batchNotFound' => 'Целевата партида не е намерена: ',
    'empty'         => 'Няма намерени файлове за мигриране',
    'gap'           => 'Има пропуск в последователността за мигриране близо до номера на версията: ',
    'classNotFound' => 'Класът за миграция "%s" не може да бъде намерен.',
    'missingMethod' => 'В класа за миграция липсва метод "%s".',

    // Migration Command
    'migHelpLatest'   => "\t\t Мигрира базата данни към последната налична миграция.",
    'migHelpCurrent'  => "\t\t Мигрира базата данни към версия, зададена като 'текуща' в конфигурацията.",
    'migHelpVersion'  => "\t Мигрира базата данни към версия {v}.",
    'migHelpRollback' => "\t Изпълнява всички миграции „надолу“ до версия 0.",
    'migHelpRefresh'  => "\t\t Деинсталира и стартира отново всички миграции за опресняване на базата данни.",
    'migHelpSeed'     => "\t Изпълнява seeder с име [name].",
    'migCreate'       => "\t Създава нова миграция с име [name].",
    'nameMigration'   => 'Име на файла за мигриране',
    'migNumberError'  => 'Миграционният номер трябва да е трицифрен и не трябва да има пропуски в последователността.',
    'rollBackConfirm' => 'Сигурни ли сте, че искате да върнете назад?',
    'refreshConfirm'  => 'Сигурни ли сте, че искате да обновите?',

    'latest'            => 'Изпълняват се всички нови миграции...',
    'generalFault'      => 'Мигрирането е неуспешно!',
    'migrated'          => 'Миграциите завършени.',
    'migInvalidVersion' => 'Предоставен е невалиден номер на версията.',
    'toVersionPH'       => 'Мигриране към версия %s...',
    'toVersion'         => 'Мигриране към текущата версия...',
    'rollingBack'       => 'Връщане на миграции към партида: ',
    'noneFound'         => 'Не бяха намерени миграции.',
    'migSeeder'         => 'Име на seeder-а',
    'migMissingSeeder'  => 'Трябва да предоставите име на seeder.',
    'nameSeeder'        => 'Име на seeder файлът',
    'removed'           => 'Връщане назад: ',
    'added'             => 'В процес: ',

    // Migrate Status
    'namespace' => 'Пространство от имена',
    'filename'  => 'Име на файл',
    'version'   => 'Версия',
    'group'     => 'Група',
    'on'        => 'Мигрирано на: ',
    'batch'     => 'Партида',
];
