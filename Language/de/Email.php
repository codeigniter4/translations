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
    'mustBeArray'          => 'Der E-Mail-Validierungsmethode muss ein Array übergeben werden.',
    'invalidAddress'       => 'Ungültige E-Mailadresse: {0}',
    'attachmentMissing'    => 'Der folgende E-Mail-Anhang konnte nicht gefunden werden: {0}',
    'attachmentUnreadable' => 'Fehler beim Öffnen des Anhangs: {0}',
    'noFrom'               => 'E-Mails ohne "From"-Header können nicht gesendet werden.',
    'noRecipients'         => 'Kein Empfänger gesetzt. Ein Wert für To, Cc oder Bcc ist erforderlich.',
    'sendFailurePHPMail'   => 'E-Mailversand mit PHP mail() fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode senden kann.',
    'sendFailureSendmail'  => 'E-Mailversand mit PHP Sendmail fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode senden kann.',
    'sendFailureSmtp'      => 'E-Mailversand mit PHP SMTP fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode senden kann.',
    'sent'                 => 'Die Nachricht wurde erfolgreich mit folgendem Protokoll gesendet: {0}',
    'noSocket'             => 'Der socket für Sendmail konnte nicht geöffnet werden. Bitte Einstellungen prüfen.',
    'noHostname'           => 'Der SMTP-Hostname wurde nicht definiert.',
    'SMTPError'            => 'Folgender SMTP-Fehler ist aufgetreten: {0}',
    'noSMTPAuth'           => 'Fehler: Es muss ein SMTP Benutzername und Passwort angegeben werden.',
    'failedSMTPLogin'      => 'Das AUTH LOGIN konnte nicht gesendet werden. Fehler: {0}',
    'SMTPAuthUsername'     => 'Der Benutzername konnte nicht authentifiziert werden. Fehler: {0}',
    'SMTPAuthPassword'     => 'Das Passwort konnte nicht authentifiziert werden. Fehler: {0}',
    'SMTPDataFailure'      => 'Daten können nicht gesendet werden: {0}',
    'exitStatus'           => 'Exit Status Code: {0}',
];
