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
    'mustBeArray'          => 'Metoda weryfikacji e-maila musi być przekazana w tablicy.',
    'invalidAddress'       => 'Niepoprawny adres e-mail: {0}',
    'attachmentMissing'    => 'Nie można zlokalizować następujących załączników: {0}',
    'attachmentUnreadable' => 'Nie można otworzyć następujących załączników: {0}',
    'noFrom'               => 'Nie można wysłać wiadomości bez nagłówka "From".',
    'noRecipients'         => 'Należy dodać odbiorców: To, Cc lub Bcc',
    'sendFailurePHPMail'   => 'Nie można wysłać e-maila za pomocą PHP mail(). Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
    'sendFailureSendmail'  => 'Nie można wysłać e-maila za pomocą PHP Sendmail. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
    'sendFailureSmtp'      => 'Nie można wysłać e-maila za pomoc PHP SMTP. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
    'sent'                 => 'Twój e-mail został pomyślnie wysłany za pomocą metody: {0}',
    'noSocket'             => 'Nie można otworzyć socketu do Sendmail. Proszę sprawdzić ustawienia.',
    'noHostname'           => 'Nie podano nazwy hosta SMTP.',
    'SMTPError'            => 'Wystąpił następujący błąd SMTP: {0}',
    'noSMTPAuth'           => 'Błąd: Należy podać nazwę użytkownika i hasło SMTP.',
    'failedSMTPLogin'      => 'Błąd przy wysyłaniu komendy AUTH LOGIN. Błąd: {0}',
    'SMTPAuthUsername'     => 'Błąd autentykacji nazwy użytkownika. Błąd: {0}',
    'SMTPAuthPassword'     => 'Błąd autentykacji hasła. Błąd: {0}',
    'SMTPDataFailure'      => 'Nie można wysłać danych: {0}',
    'exitStatus'           => 'Status kodu wyjścia: {0}',
];
