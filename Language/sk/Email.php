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
    'mustBeArray'           => 'Metóde overenia e-mailu musí byť odovzdané pole.',
    'invalidAddress'        => 'Neplatná e-mailová adresa: "{0}"',
    'attachmentMissing'     => 'Nepodarilo sa nájsť nasledujúcu prílohu e-mailu: "{0}"',
    'attachmentUnreadable'  => 'Túto prílohu nie je možné otvoriť: "{0}"',
    'noFrom'                => 'Nie je možné odoslať e-mail bez hlavičky "From".',
    'noRecipients'          => 'Musíte zadať príjemcov: To, Cc alebo Bcc',
    'sendFailurePHPMail'    => 'Nepodarilo sa odoslať e-mail pomocou PHP mail(). Váš server nemusí byť nakonfigurovaný na odosielanie pošty pomocou tejto metódy.',
    'sendFailureSendmail'   => 'Nepodarilo sa odoslať e-mail pomocou Sendmail. Váš server nemusí byť nakonfigurovaný na odosielanie pošty pomocou tejto metódy.',
    'sendFailureSmtp'       => 'Nepodarilo sa odoslať e-mail pomocou SMTP. Váš server nemusí byť nakonfigurovaný na odosielanie pošty pomocou tejto metódy.',
    'sent'                  => 'Vaša správa bola úspešne odoslaná pomocou nasledujúceho protokolu: {0}',
    'noSocket'              => 'Nepodarilo sa otvoriť soket pre Sendmail. Skontrolujte nastavenia.',
    'noHostname'            => 'Nezadali ste názov hostiteľa SMTP.',
    'SMTPError'             => 'Vyskytla sa nasledujúca chyba SMTP: {0}',
    'noSMTPAuth'            => 'Chyba: Musíte zadať používateľské meno a heslo SMTP.',
    'invalidSMTPAuthMethod' => 'Chyba: Metóda autorizácie SMTP "{0}" nie je v CodeIgniter podporovaná, nastavte metódu autorizácie "login" alebo "plain"',
    'failureSMTPAuthMethod' => 'Nepodarilo sa spustiť príkaz AUTH. Váš server nemusí byť nakonfigurovaný na používanie metódy overenia AUTH {0}.',
    'SMTPAuthCredentials'   => 'Nepodarilo sa overiť prihlasovacie údaje používateľa. Chyba: {0}',
    'SMTPAuthUsername'      => 'Nepodarilo sa overiť používateľské meno. Chyba: {0}',
    'SMTPAuthPassword'      => 'Nepodarilo sa overiť heslo. Chyba: {0}',
    'SMTPDataFailure'       => 'Nie je možné odoslať údaje: {0}',
    'exitStatus'            => 'Návratový kód (exit status): {0}',
    // @deprecated
    'failedSMTPLogin' => 'Nepodarilo sa odoslať príkaz AUTH LOGIN. Chyba: {0}',
];
