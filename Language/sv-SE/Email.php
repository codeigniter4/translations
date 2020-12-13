<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

return [
	'mustBeArray'          => 'Valideringsmetoden för epost måste vara en array.',
	'invalidAddress'       => 'Ogiltig epostadress: {0}',
	'attachmentMissing'    => 'Kan inte hitta epostbilagan: {0}',
	'attachmentUnreadable' => 'Kan inte öppna epostbilagan: {0}',
	'noFrom'               => 'Kan inte skicka meddelandet utan "From" angivet.',
	'noRecipients'         => 'Mottagare måste anges: To, Cc, or Bcc',
	'sendFailurePHPMail'   => 'Kan inte skicka epost med PHP mail(). Servern verkar inte vara konfigurerad för att skicka epost med denna metod.',
	'sendFailureSendmail'  => 'Kan inte skicka epost med PHP Sendmail. Servern verkar inte vara konfigurerad för att skicka epost med denna metod.',
	'sendFailureSmtp'      => 'Kan inte skicka epost med PHP SMTP. Servern verkar inte vara konfigurerad för att skicka epost med denna metod.',
	'sent'                 => 'Meddelandet kunde skickas med detta protokoll: {0}',
	'noSocket'             => 'Kunde inte öppna en anslutning till Sendmail. Kontrollera inställningarna.',
	'noHostname'           => 'Inget hostname för SMTP är angivet.',
	'SMTPError'            => 'Följande SMTP fel inträffade: {0}',
	'noSMTPAuth'           => 'Fel: SMTP användarnamn och lösenord måste anges.',
	'failedSMTPLogin'      => 'Kunde inte skicka AUTH LOGIN kommandot. Fel: {0}',
	'SMTPAuthUsername'     => 'Kunde inte verifiera användarnamnet. Fel: {0}',
	'SMTPAuthPassword'     => 'Kunde inte verifiera lösenordet. Fel: {0}',
	'SMTPDataFailure'      => 'Kunde inte skicka data: {0}',
	'exitStatus'           => 'Resultat: {0}',
];
