<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'В метод проверки электронной почты должен быть передан массив.',
	'invalidAddress'       => 'Неверный адрес электронной почты: {0}',
	'attachmentMissing'    => 'Не удается найти следующее вложение: {0}',
	'attachmentUnreadable' => 'Не удается открыть это вложение: {0}',
	'noFrom'               => 'Не удается отправить почту без заголовка "From".',
	'noRecipients'         => 'Необходимо указать получателей "To".',
	'sendFailurePHPMail'   => 'Невозможно отправить письмо с помощью PHP_Mail().',
	'sendFailureSendmail'  => 'Невозможно отправить письмо с помощью PHP_SendMail().',
	'sendFailureSmtp'      => 'Невозможно отправить письмо с помощью PHP_SMTP().',
	'sent'                 => 'Ваше сообщение было отправлено по протоколу: {0}',
	'noSocket'             => 'Не удается открыть сокет для PHP_SendMail(). Пожалуйста, проверьте настройки.',
	'noHostname'           => 'Вы не указали имя хоста SMTP.',
	'SMTPError'            => 'Произошла следующая ошибка SMTP: {0}',
	'noSMTPAuth'           => 'Ошибка: Необходимо указать логин и пароль SMTP.',
	'failedSMTPLogin'      => 'Не удалось выполнить команду AUTH LOGIN. Ошибка: {0}',
	'SMTPAuthUsername'     => 'Не удалось проверить подлинность логина. Ошибка: {0}',
	'SMTPAuthPassword'     => 'Не удалось проверить подлинность пароля. Ошибка: {0}',
	'SMTPDataFailure'      => 'Не удается отправить данные: {0}',
	'exitStatus'           => 'Статус-код выхода: {0}',
];
