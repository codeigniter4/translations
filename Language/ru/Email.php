<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'Метод проверки email должен получать массив.',
    'invalidAddress'       => 'Недопустимый адрес электронной почты: "{0}"',
    'attachmentMissing'    => 'Не удалось найти вложение: "{0}"',
    'attachmentUnreadable' => 'Не удалось открыть вложение: "{0}"',
    'noFrom'               => 'Невозможно отправить письмо без заголовка "From".',
    'noRecipients'         => 'Необходимо указать получателей: To, Cc или Bcc',
    'sendFailurePHPMail'   => 'Не удалось отправить письмо с помощью PHP mail(). Возможно, сервер не настроен для отправки почты этим методом.',
    'sendFailureSendmail'  => 'Не удалось отправить письмо с помощью Sendmail. Возможно, сервер не настроен для отправки почты этим методом.',
    'sendFailureSmtp'      => 'Не удалось отправить письмо через SMTP. Возможно, сервер не настроен для отправки почты этим методом.',
    'sent'                 => 'Ваше сообщение успешно отправлено с использованием протокола: {0}',
    'noSocket'             => 'Не удалось открыть сокет для Sendmail. Проверьте настройки.',
    'noHostname'           => 'Вы не указали SMTP hostname.',
    'SMTPError'            => 'Произошла следующая ошибка SMTP: {0}',
    'noSMTPAuth'           => 'Ошибка: необходимо указать имя пользователя и пароль SMTP.',
    'failedSMTPLogin'      => 'Не удалось выполнить команду AUTH LOGIN. Ошибка: {0}',
    'SMTPAuthUsername'     => 'Не удалось аутентифицировать имя пользователя. Ошибка: {0}',
    'SMTPAuthPassword'     => 'Не удалось аутентифицировать пароль. Ошибка: {0}',
    'SMTPDataFailure'      => 'Не удалось отправить данные: {0}',
    'exitStatus'           => 'Код состояния выхода: {0}',
];
