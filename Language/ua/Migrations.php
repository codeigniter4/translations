<?php

/**
 * Migrations language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => 'Потрібно встановити таблицю міграцій.',
   'disabled'          => 'Міграції завантажено, але вимкнено або встановлено неправильно.',
   'notFound'          => 'Файл міграції не знайдено: ',
   'batchNotFound'     => 'Цільовий пакет не знайдено: ',
   'empty'             => 'Файлів міграції не знайдено.',
   'gap'               => 'Існує пропуск у послідовності міграції біля номера версії: ',
   'classNotFound'     => 'Клас міграції "%s" не знайдено.',
   'missingMethod'     => 'У класі міграції відсутній метод "%s".',

	// Migration Command
   'migHelpLatest'     => "\t\tПроводить міграцію бази даних до останньої доступної міграції.",
   'migHelpCurrent'    => "\t\tПроводить міграцію бази даних до версії, встановленої як 'поточна' в конфігурації.",
   'migHelpVersion'    => "\tПроводить міграцію бази даних до версії {v}.",
   'migHelpRollback'   => "\tЗапускає всі міграції 'вниз' до версії 0.",
   'migHelpRefresh'    => "\t\tВидаляє та повторно запускає всі міграції, щоб оновити базу даних.",
   'migHelpSeed'       => "\tЗапускає seeder з іменем [name].",
   'migCreate'         => "\tСтворює нову міграцію з іменем [name]",
   'nameMigration'     => 'Назвіть файл міграції',
   'badCreateName'     => "Необхідно вказати ім'я файлу міграції.",
   'writeError'        => 'Помилка спроби створити файл {0}. Перевірте, чи каталог доступний для запису.',
   'migNumberError'    => 'Номер міграції повинен бути тризначним, і в послідовності не повинно бути пропусків.',
   'rollBackConfirm'   => 'Ви впевнені, що хочете відкатити?',
   'refreshConfirm'    => 'Ви впевнені, що хочете оновити?',

   'latest'            => 'Запуск усіх нових міграцій...',
   'generalFault'      => 'Помилка міграції!',
   'migInvalidVersion' => 'Недійсний номер версії.',
   'toVersionPH'       => 'Перехід до версії %s...',
   'toVersion'         => 'Перехід до поточної версії...',
   'rollingBack'       => 'Відкат міграцій до пакету: ',
   'noneFound'         => 'Міграцій не виявлено.',
   'on'                => 'Перенесено на: ',
   'migSeeder'         => 'Назва seeder',
   'migMissingSeeder'  => "Необхідно вказати ім'я seeder.",
   'removed'           => 'Відкат назад: ',
   'added'             => 'Запуск: ',

   'version'           => 'Версія',
   'filename'          => "Ім'я файлу",
];
