<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Email language settings
return [
   'mustBeArray'          => 'Die E-Mail-Validierungsmethode muss in einem Array übergeben werden.',
   'invalidAddress'       => 'Ungültige E-Mailadresse: {0}',
   'attachmentMissing'    => 'Der folgende E-Mail-Anhang konnte nicht gefunden werden: {0}',
   'attachmentUnreadable' => 'Fehler beim Öffnen des Attachments: {0}',
   'noFrom'               => 'E-Mails ohne "From"-Header können nicht gesendet werden.',
   'noRecipients'         => 'Kein Empfänger gesetzt. Wert für To, Cc oder Bcc erforderlich',
   'sendFailurePHPMail'   => 'E-Mailversand mit PHP mail() fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode sendet.',
   'sendFailureSendmail'  => 'E-Mailversand mit Sendmail fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode sendet.',
   'sendFailureSmtp'      => 'E-Mailversand mit PHP SMTP fehlgeschlagen. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode sendet.',
   'sent'                 => 'Die Nachricht wurde erfolgreich mit folgendem Protokoll gesendet: {0}',
   'noSocket'             => 'Der socket für Sendmail konnte nicht geöffnet werden. Bitte Einstellungen prüfen.',
   'noHostname'           => 'SMTP-Hostname ist nicht definiert',
   'SMTPError'            => 'Folgender SMTP-Fehler ist aufgetreten: {0}',
   'noSMTPAuth'           => 'Fehler: Es muss ein SMTP Benutzername und Passwort zugeordnet werden.',
   'failedSMTPLogin'      => 'Das AUTH LOGIN konnte nicht gesendet werden. Fehler: {0}',
   'SMTPAuthUsername'     => 'Der Benutzername konnte nicht authentifiziert werden. Fehler: {0}',
   'SMTPAuthPassword'     => 'Das Passwort konnte nicht authentifiziert werden. Fehler: {0}',
   'SMTPDataFailure'      => 'Daten können nicht gesendet werden: {0}',
   'exitStatus'           => 'Exit Status Code: {0}',
];
