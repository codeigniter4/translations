<?php

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
    'mustBeArray'          => 'Методът за валидиране на имейл трябва да бъде подаден като масив.',
    'invalidAddress'       => 'Невалиден имейл адрес: {0}',
    'attachmentMissing'    => 'Следния прикачен към имейла файл не може да бъде намерен: {0}',
    'attachmentUnreadable' => 'Не може да се отвори този прикачен файл: {0}',
    'noFrom'               => 'Не може да се изпрати имейл без подател.',
    'noRecipients'         => 'Трябва да включите получатели: получател, Cc или Bcc',
    'sendFailurePHPMail'   => 'Не може да се изпрати имейл чрез PHP mail(). Вашият сървър може да не е конфигуриран да изпраща поща чрез този метод.',
    'sendFailureSendmail'  => 'Не може да се изпрати имейл чрез PHP Sendmail. Вашият сървър може да не е конфигуриран да изпраща поща чрез този метод.',
    'sendFailureSmtp'      => 'Не може да се изпрати имейл чрез PHP SMTP. Вашият сървър може да не е конфигуриран да изпраща поща чрез този метод.',
    'sent'                 => 'Вашето съобщение е изпратено успешно чрез следния протокол: {0}',
    'noSocket'             => 'Не може да се отвори сокет към Sendmail. Моля, проверете настройките.',
    'noHostname'           => 'Не сте посочили SMTP име на хост.',
    'SMTPError'            => 'Открита е следната SMTP грешка: {0}',
    'noSMTPAuth'           => 'Грешка: Трябва да зададете SMTP потребителско име и парола.',
    'failedSMTPLogin'      => 'Неуспешно изпращане на команда AUTH LOGIN. Грешка: {0}',
    'SMTPAuthUsername'     => 'Неуспешно удостоверяване на потребителското име. Грешка: {0}',
    'SMTPAuthPassword'     => 'Неуспешно удостоверяване на паролата. Грешка: {0}',
    'SMTPDataFailure'      => 'Не могат да се изпратят данни: {0}',
    'exitStatus'           => 'Код на състоянието на изход: {0}',
];
