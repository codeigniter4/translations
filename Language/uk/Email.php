<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'В метод перевірки електронної пошти мусить передаватися масив.',
	'invalidAddress'       => 'Некорректна адреса електронної пошти: {0}',
	'attachmentMissing'    => 'Не вдається знайти наступне вкладення: {0}',
	'attachmentUnreadable' => 'Не вдається відкрити це вкладення: {0}',
	'noFrom'               => 'Не вдається відправити пошту без заголовку "From".',
	'noRecipients'         => 'Слід вказати отримувача "To".',
	'sendFailurePHPMail'   => 'Неможливо відправити лист за допомогою PHP_Mail().',
	'sendFailureSendmail'  => 'Неможливо відправити лист за допомогою PHP_SendMail().',
	'sendFailureSmtp'      => 'Неможливо відправити лист за допомогою PHP_SMTP().',
	'sent'                 => 'Ваше повідомлення відправлено по протоколу: {0}',
	'noSocket'             => 'Не вдається відкрити сокет для PHP_SendMail(). Будь ласка, перевірте налаштування.',
	'noHostname'           => 'Ви не вказали ім’я хосту SMTP.',
	'SMTPError'            => 'Трапилась така помилка SMTP: {0}',
	'noSMTPAuth'           => 'Помилка: Слід вказати логін та пароль SMTP.',
	'failedSMTPLogin'      => 'Не вдалось виконати команду AUTH LOGIN. Помилка: {0}',
	'SMTPAuthUsername'     => 'Не вдалося автентифікувати ім’я користувача. Помилка: {0}',
	'SMTPAuthPassword'     => 'Не вдалось автентифікувати пароль. Помилка: {0}',
	'SMTPDataFailure'      => 'Не вдалось відправити дані: {0}',
	'exitStatus'           => 'Статус-код завершення: {0}',
];
