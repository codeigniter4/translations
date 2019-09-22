<?php

/**
 * Migration language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => 'Должна быть установлена таблица миграций',
   'disabled'          => 'Миграции были загружены, но отключены или настроены неправильно',
   'notFound'          => 'Файл миграции не найден: ',
   'batchNotFound'     => 'Целевой пакет не найден: ',
   'empty'             => 'Нет переноса файлов',
   'gap'               => 'Существует разрыв в последовательности миграции рядом с номером версии: ',
   'classNotFound'     => 'Не удалось найти класс миграции %s',
   'missingMethod'     => 'В классе миграции отсутствует метод %s',

	// Migration Command
   'migHelpLatest'     => "\t\tПереносит базу данных на последнюю доступную миграцию",
   'migHelpCurrent'    => "\t\tПереносит базу данных в версию, установленную как 'текущая' в конфигурации",
   'migHelpVersion'    => "\tПеренос базы данных в версию {v}",
   'migHelpRollback'   => "\tЗапускает все миграции 'вниз' до версии 0",
   'migHelpRefresh'    => "\t\tУдаляет и повторно запускает все миграции для обновления базы данных",
   'migHelpSeed'       => "\tЗапускает сеялку c именем [name]",
   'migCreate'         => "\tСоздает новую миграцию с именем [name]",
   'nameMigration'     => 'Имя файла миграции',
   'badCreateName'     => 'Необходимо указать имя файла миграции',
   'writeError'        => 'Ошибка при попытке создать файл',
   'migNumberError'    => 'Номер миграции должен состоять из трех цифр, и в последовательности не должно быть пробелов',

   'latest'            => 'Запуск всех новых миграций...',
   'generalFault'      => 'Миграция не удалась !',
   'migInvalidVersion' => 'Указан неверный номер версии',
   'toVersionPH'       => 'Переход к версии %s...',
   'toVersion'         => 'Переход к текущей версии...',
   'rollingBack'       => 'Откат миграции в пакет: ',
   'noneFound'         => 'Миграций не обнаружено',
   'on'                => 'Перенесено на: ',
   'migSeeder'         => 'Название сеялки',
   'migMissingSeeder'  => 'Необходимо указать имя сеялки',
   'removed'           => 'Откат назад: ',
   'added'             => 'Работает: ',

   'version'           => 'Версия',
   'filename'          => 'Имя файла',
];
