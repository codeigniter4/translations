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
   'mustBeArray'          => 'В метод проверки электронной почты должен быть передан массив',
   'invalidAddress'       => 'Не верный почтовый адрес: {0}',
   'attachmentMissing'    => 'Не удается найти следующее вложение: {0}',
   'attachmentUnreadable' => 'Не удается открыть это вложение: {0}',
   'noFrom'               => 'Не удается отправить почту без заголовка "From"',
   'noRecipients'         => 'Необходимо указать получателей почты',
   'sendFailurePHPMail'   => 'Невозможно отправить письмо с помощью PHP-Mail',
   'sendFailureSendmail'  => 'Не удается отправить электронную почту с помощью PHP-Sendmail',
   'sendFailureSmtp'      => 'Не удается отправить электронную почту с помощью PHP-SMTP',
   'sent'                 => 'Ваше сообщение было успешно отправлено по следующему протоколу: {0, string}',
   'noSocket'             => 'Не удается открыть сокет для PHP-Sendmail',
   'noHostname'           => 'Вы не указали имя хоста SMTP',
   'SMTPError'            => 'Произошла следующая ошибка SMTP: {0}',
   'noSMTPAuth'           => 'Ошибка: Необходимо назначить имя пользователя и пароль SMTP',
   'failedSMTPLogin'      => 'Не удалось отправить команду AuthLogin. Ошибка: {0}',
   'SMTPAuthUsername'     => 'Не удалось проверить имя пользователя. Ошибка: {0}',
   'SMTPAuthPassword'     => 'Не удалось проверить пароль пользователя. Ошибка: {0}',
   'SMTPDataFailure'      => 'Не удается отправить эти данные: {0}',
   'exitStatus'           => 'Код статуса: {0}',
];
