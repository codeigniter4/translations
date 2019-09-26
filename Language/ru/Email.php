<?php

/**
 * Email language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'В метод проверки электронной почты должен быть передан массив.',
   'invalidAddress'       => 'Неверный адрес электронной почты: {0}',
   'attachmentMissing'    => 'Не удается найти следующее вложение электронной почты: {0}',
   'attachmentUnreadable' => 'Не удается открыть это вложение: {0}',
   'noFrom'               => 'Не удается отправить почту без заголовка "From".',
   'noRecipients'         => 'Необходимо указать получателей.',
   'sendFailurePHPMail'   => 'Невозможно отправить письмо с помощью PHP_Mail().',
   'sendFailureSendmail'  => 'Не удается отправить электронную почту с помощью PHP_Sendmail().',
   'sendFailureSmtp'      => 'Не удается отправить электронную почту с помощью PHP SMTP.',
   'sent'                 => 'Ваше сообщение было отправлено по протоколу: {0, string}',
   'noSocket'             => 'Не удается открыть сокет для Sendmail.',
   'noHostname'           => 'Вы не указали имя хоста SMTP.',
   'SMTPError'            => 'Произошла следующая ошибка SMTP: {0}',
   'noSMTPAuth'           => 'Ошибка: необходимо назначить имя пользователя и пароль SMTP.',
   'failedSMTPLogin'      => 'Не удалось выполнить команду AUTH_LOGIN. Ошибка: {0}',
   'SMTPAuthUsername'     => 'Не удалось проверить подлинность логина. Ошибка: {0}',
   'SMTPAuthPassword'     => 'Не удалось проверить подлинность пароля. Ошибка: {0}',
   'SMTPDataFailure'      => 'Не удается отправить данные: {0}',
   'exitStatus'           => 'Статус выхода: {0}',
];
