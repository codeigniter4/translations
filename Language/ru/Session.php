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
   'missingDatabaseTable'   => '$sessionSavePath должен содержать имя таблицы для работы сессий с базой данных.',
   'invalidSavePath'        => 'Ошибка: Настроенный путь сохранения "{0}" не является каталогом, не существует или не может быть создан.',
   'writeProtectedSavePath' => 'Ошибка: Настроенный путь сохранения "{0}" не доступен для записи процессом PHP.',
   'emptySavePath'          => 'Ошибка: Не настроен путь сохранения сессий.',
   'invalidSavePathFormat'  => 'Ошибка: Недопустимый формат пути сохранения для Redis: {0}.',
];
