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
    'mustBeArray'          => 'Email validacijski metod mora prosljeđivati niz.',
    'invalidAddress'       => 'Nevalidna email adresa: {0}',
    'attachmentMissing'    => 'Nije moguće pronaći sljedeći email privitak: {0}',
    'attachmentUnreadable' => 'Nije moguće otvoriti sljedeći privitak: {0}',
    'noFrom'               => 'Email se ne može poslati bez "From" headera.',
    'noRecipients'         => 'Morate dodati primaoce: To, Cc, or Bcc',
    'sendFailurePHPMail'   => 'Nije moguće poslati email koristeći PHP mail(). Vaš server možda nije konfigurisan da šalje email koristeći ovaj metod.',
    'sendFailureSendmail'  => 'Nije moguće poslati email koristeći PHP Sendmail. Vaš server možda nije konfigurisan da šalje email koristeći ovaj metod.',
    'sendFailureSmtp'      => 'Nije moguće poslati email koristeći PHP SMTP. Vaš server možda nije konfigurisan da šalje email koristeći ovaj metod.',
    'sent'                 => 'Vaša poruka je uspješno poslata koristeći protokol: {0}',
    'noSocket'             => 'Nije moguće otvoriti soket prema Sendmail. Molimo provjerite postavke.',
    'noHostname'           => 'Niste naveli SMTP hostname.',
    'SMTPError'            => 'Dogodila se sljedeća SMTP greška: {0}',
    'noSMTPAuth'           => 'Greška: Morate dodijeliti SMTP korisničko ime i šifru.',
    'failedSMTPLogin'      => 'Neuspješno slanje AUTH LOGIN komande. Greška: {0}',
    'SMTPAuthUsername'     => 'Neuspješna autentifikacija korisničkog imena. Greška: {0}',
    'SMTPAuthPassword'     => 'Neuspješna autentifikacija šifre. Greška: {0}',
    'SMTPDataFailure'      => 'Nije moguće poslati podatke: {0}',
    'exitStatus'           => 'Status kod izlaza: {0}',
];
