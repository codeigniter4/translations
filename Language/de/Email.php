<?php

/**
 * Email language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2018 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'Der E-Mail-Validierungsmethode muss ein Array übergeben werden.',
   'invalidAddress'       => 'Ungültige E-Mail-Adresse: {0}',
   'attachmentMissing'    => 'Der folgende E-Mail-Anhang konnte nicht geladen werden: {0}',
   'attachmentUnreadable' => 'Dieser Anhang kann nicht geöffnet werden: {0}',
   'noFrom'               => 'E-Mails ohne "From"-Header können nicht gesendet werden.',
   'noRecipients'         => 'Es muss ein Empfänger angeben werden: To, Cc, or Bcc',
   'sendFailurePHPMail'   => 'Es ist nicht möglich, E-Mails mit PHP mail() zu senden. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode senden kann.',
   'sendFailureSendmail'  => 'Es ist nicht möglich, E-Mails mit PHP Sendmail zu senden. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode senden kann.',
   'sendFailureSmtp'      => 'Es ist nicht möglich, E-Mails mit SMTP zu senden. Möglicherweise ist der Server nicht so konfiguriert, dass er E-Mails mit dieser Methode senden kann.',
   'sent'                 => 'Die Nachricht wurde mit dem folgenden Protokoll erfolgreich gesendet: {0, string}',
   'noSocket'             => 'Es ist nicht möglich, einen Socket für Sendmail zu öffnen. Bitte Einstellungen überprüfen.',
   'noHostname'           => 'Es ist kein SMTP-Hostname angegeben.',
   'SMTPError'            => 'Der folgende SMTP-Fehler wurde festgestellt: {0}',
   'noSMTPAuth'           => 'Fehler: Es muss ein SMTP-Benutzername und ein Passwort angegeben werden.',
   'failedSMTPLogin'      => 'Der Befehl AUTH LOGIN konnte nicht gesendet werden. Fehler: {0}',
   'SMTPAuthUsername'     => 'Der SMTP-Benutzername konnte nicht authentifiziert werden. Fehler: {0}',
   'SMTPAuthPassword'     => 'Das SMTP-Passwort konnte nicht authentifiziert werden. Fehler: {0}',
   'SMTPDataFailure'      => 'SMTP-Daten können nicht gesendet werden: {0}',
   'exitStatus'           => 'Exit Statuscode: {0}',
];
