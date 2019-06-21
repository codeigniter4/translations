<?php

/**
 * Migration language strings.
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
	// Migration Runner
   'missingTable'      => 'Таблица переносов должна быть установлена.',
   'invalidType'       => 'Указан неверный тип нумерации переноса: {0}',
   'disabled'          => 'Переносы были загружены, но отключены или настроены неправильно.',
   'notFound'          => 'Файл переносов не найден: ',
   'empty'             => 'Файлы переносов не найдены',
   'gap'               => 'Существует пробел в последовательности переноса рядом с номером версии: ',
   'classNotFound'     => 'Класс переноса "%s" не найден.',
   'missingMethod'     => 'В классе переноса отсутствует метод "%s".',

	// Migration Command
   'migHelpLatest'     => "\t\tПереносит базу данных в последнюю доступную миграцию.",
   'migHelpCurrent'    => "\t\tПереносит базу данных в версию, указанную в конфигурации как «текущая».",
   'migHelpVersion'    => "\tПереносит базу данных в версию {v}.",
   'migHelpRollback'   => "\tЗапускает все переносы вниз до версии 0.",
   'migHelpRefresh'    => "\t\tУдаляет и повторно запускает все переносы для обновления базы данных.",
   'migHelpSeed'       => "\tЗапускает версию с именем [name].",
   'migCreate'         => "\tСоздает новый перенос с именем [name]",
   'nameMigration'     => 'Назовите файл переноса',
   'badCreateName'     => 'Вы должны указать имя файла переноса.',
   'writeError'        => 'Ошибка при попытке создать файл.',
   'migNumberError'    => 'Номер переноса должен состоять из трех цифр, и в последовательности не должно быть пробелов.',

   'toLatest'          => 'Перенос на последнию версию...',
   'migInvalidVersion' => 'Указан неверный номер версии.',
   'toVersionPH'       => 'Перенос на версию %s...',
   'toVersion'         => 'Перенос на текущую версию...',
   'rollingBack'       => 'Откат всех переносов...',
   'noneFound'         => 'Перенсов не было найдено.',
   'on'                => 'Перенос на: ',
   'migSeeder'         => 'Имя версии',
   'migMissingSeeder'  => 'Вы должны указать имя версии.',
   'removed'           => 'Откат: ',
   'added'             => 'Запуск: ',

   'version'           => 'Версия',
   'filename'          => 'Имя файла',
];
