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
    'mustBeArray'           => 'Metodě validace e-mailu musí být předáno pole.',
    'invalidAddress'        => 'Neplatná e-mailová adresa: "{0}"',
    'attachmentMissing'     => 'Nepodařilo se najít následující přílohu e-mailu: "{0}"',
    'attachmentUnreadable'  => 'Nepodařilo se otevřít tuto přílohu: "{0}"',
    'noFrom'                => 'Nelze odeslat e-mail bez hlavičky "From".',
    'noRecipients'          => 'Musíte zadat příjemce: To, Cc nebo Bcc',
    'sendFailurePHPMail'    => 'Nepodařilo se odeslat e-mail pomocí PHP mail(). Váš server zřejmě není nakonfigurován pro odesílání e-mailů touto metodou.',
    'sendFailureSendmail'   => 'Nepodařilo se odeslat e-mail pomocí Sendmail. Váš server zřejmě není nakonfigurován pro odesílání e-mailů touto metodou.',
    'sendFailureSmtp'       => 'Nepodařilo se odeslat e-mail pomocí SMTP. Váš server zřejmě není nakonfigurován pro odesílání e-mailů touto metodou.',
    'sent'                  => 'Vaše zpráva byla úspěšně odeslána pomocí protokolu: {0}',
    'noSocket'              => 'Nepodařilo se otevřít socket pro Sendmail. Zkontrolujte prosím nastavení.',
    'noHostname'            => 'Nezadali jste název hostitele SMTP.',
    'SMTPError'             => 'Došlo k následující chybě SMTP: {0}',
    'noSMTPAuth'            => 'Chyba: Musíte zadat uživatelské jméno a heslo SMTP.',
    'invalidSMTPAuthMethod' => 'Chyba: Metoda autorizace SMTP "{0}" není v CodeIgniter podporována, nastavte metodu autorizace "login" nebo "plain"',
    'failureSMTPAuthMethod' => 'Nepodařilo se spustit příkaz AUTH. Váš server zřejmě není nakonfigurován pro použití metody ověření AUTH {0}.',
    'SMTPAuthCredentials'   => 'Nepodařilo se ověřit přihlašovací údaje uživatele. Chyba: {0}',
    'SMTPAuthUsername'      => 'Nepodařilo se ověřit uživatelské jméno. Chyba: {0}',
    'SMTPAuthPassword'      => 'Nepodařilo se ověřit heslo. Chyba: {0}',
    'SMTPDataFailure'       => 'Nelze odeslat data: {0}',
    'exitStatus'            => 'Návratový kód (exit status): {0}',
    // @deprecated
    'failedSMTPLogin' => 'Nepodařilo se odeslat příkaz AUTH LOGIN. Chyba: {0}',
];
