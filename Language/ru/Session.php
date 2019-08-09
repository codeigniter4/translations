<?php

/**
 * Session language strings.
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
   'missingDatabaseTable'   => '`sessionSavePath` должен иметь имя таблицы, чтобы обработчик сеанса базы данных работал.',
   'invalidSavePath'        => "Сессия: Настроенный путь сохранения '{0}' не является каталогом, не существует или не может быть создан.",
   'writeProtectedSavePath' => "Сессия: Настроенный путь сохранения '{0}' недоступен для записи процессом PHP.",
   'emptySavePath'          => 'Сессия: не настроен путь сохранения.',
   'invalidSavePathFormat'  => 'Сеанс: неверный формат восстановления пути Redis: {0}',
];
