<?php

/**
 * Session language strings.
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
   'missingDatabaseTable'   => '$sessionSavePath должен иметь имя таблицы для работы обработчика сеанса базы данных',
   'invalidSavePath'        => 'Ошибка: Настроенный путь сохранения {0} не является каталогом, не существует или не может быть создан',
   'writeProtectedSavePath' => 'Ошибка: Настроенный путь сохранения {0} не доступен для записи процессом PHP',
   'emptySavePath'          => 'Ошибка: не настроен путь сохранения сеансов',
   'invalidSavePathFormat'  => 'Ошибка: Недопустимый формат пути сохранения сеансов в Redis: {0}',
];
