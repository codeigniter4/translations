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
    'mustBeArray'          => 'Metoda validace emailu musí být předána jako pole.',
    'invalidAddress'       => 'Neplatná emailová adresa: {0}',
    'attachmentMissing'    => 'Nelze nalézt následující emailové přílohy: {0}',
    'attachmentUnreadable' => 'Nepodařilo se otevřít přílohu: {0}',
    'noFrom'               => 'Nelze odeslat email bez hlavičky (header) "From".',
    'noRecipients'         => 'Musíte přidat adresáta: To, Cc, nebo Bcc',
    'sendFailurePHPMail'   => 'Nepodařilo se odeslat email skrze PHP mail(). Váš server zřejmě není nakonfigurován pro odesílání e-mailů touto metodou.',
    'sendFailureSendmail'  => 'Nepodařilo se odeslat email skrze PHP Sendmail. Váš server zřejmě není nakonfigurován pro odesílání e-mailů touto metodou.',
    'sendFailureSmtp'      => 'Nepodařilo se odeslat email skrze PHP SMTP. Váš server zřejmě není nakonfigurován pro odesílání e-mailů touto metodou.',
    'sent'                 => 'Vaše zpráva byla úspěšně odeslána použitím protokolu: {0}',
    'noSocket'             => 'Nepodařilo se otevřít socket pro Sendmail. Zkontrolujte prosím nastavení.',
    'noHostname'           => 'Nespecifikovali jste SMTP hostname.',
    'SMTPError'            => 'Nastala tato SMTP chyba: {0}',
    'noSMTPAuth'           => 'Chyba: Musíte zadat SMTP jméno a heslo.',
    'failedSMTPLogin'      => 'Selhalo odeslání příkazu AUTH LOGIN. Chyba: {0}',
    'SMTPAuthUsername'     => 'Selhala autentizace přihlašovacího jména. Chyba: {0}',
    'SMTPAuthPassword'     => 'Selhala autentizace hesla. Chyba: {0}',
    'SMTPDataFailure'      => 'Nelze odeslat data: {0}',
    'exitStatus'           => 'Stavový kód Exit: {0}',
];
