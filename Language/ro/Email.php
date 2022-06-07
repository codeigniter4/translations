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
    'mustBeArray'          => 'Metoda de validare a e-mailului trebuie să primească o matrice.',
    'invalidAddress'       => 'Adresa de e-mail invalidă: {0}',
    'attachmentMissing'    => 'Nu s-a putut găsi următorul atașament de e-mail: {0}',
    'attachmentUnreadable' => 'Nu se poate deschide acest atașament: {0}',
    'noFrom'               => 'Nu se pot trimite e-mailuri fără antet "From".',
    'noRecipients'         => 'Trebuie să includeți destinatarii: To, Cc, sau Bcc',
    'sendFailurePHPMail'   => 'Nu se poate trimite e-mail folosind PHP mail(). Este posibil ca serverul dvs. să nu fie configurat pentru a trimite e-mail folosind această metodă.',
    'sendFailureSendmail'  => 'Nu se poate trimite e-mail folosind PHP Sendmail. Este posibil ca serverul dvs. să nu fie configurat pentru a trimite e-mail folosind această metodă.',
    'sendFailureSmtp'      => 'Nu se poate trimite e-mail folosind PHP SMTP. Este posibil ca serverul dvs. să nu fie configurat pentru a trimite e-mail folosind această metodă.',
    'sent'                 => 'Mesajul dvs. a fost trimis cu succes folosind următorul protocol: {0}',
    'noSocket'             => 'Nu se poate deschide un socket la Sendmail. Vă rugăm să verificați setările.',
    'noHostname'           => 'Nu ați specificat un nume de gazdă SMTP.',
    'SMTPError'            => 'A fost întâlnită următoarea eroare SMTP: {0}',
    'noSMTPAuth'           => 'Eroare: Trebuie să atribuiți un nume de utilizator și o parolă SMTP.',
    'failedSMTPLogin'      => 'Trimiterea comenzii AUTH LOGIN a eșuat. Eroare: {0}',
    'SMTPAuthUsername'     => 'Autentificare eșuată cu numele de utilizator. Eroare: {0}',
    'SMTPAuthPassword'     => 'Autentificare eșuată cu parola. Eroare: {0}',
    'SMTPDataFailure'      => 'Nu se pot trimite date: {0}',
    'exitStatus'           => 'Cod stare de ieșire: {0}',
];
