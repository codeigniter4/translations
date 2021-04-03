<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'E-pasta validācijas metodei ir jānodod masīvs.', // 'The email validation method must be passed an array.'
	'invalidAddress'       => 'Nederīga e-pasta adrese: {0}', // 'Invalid email address: {0}'
	'attachmentMissing'    => 'Nevar atrast šo e-pasta pielikumu: {0}', // 'Unable to locate the following email attachment: {0}'
	'attachmentUnreadable' => 'Nevar atvērt šo e-pasta pielikumu: {0}', // 'Unable to open this attachment: {0}'
	'noFrom'               => 'Nevar nosūtīt e-pastu bez galvenes `From`.', // 'Cannot send mail with no "From" header.'
	'noRecipients'         => 'Jums ir jāiekļauj adresāti: `To`, `Cc` vai `Bcc`', // 'You must include recipients: To, Cc, or Bcc'
	'sendFailurePHPMail'   => 'Nevar nosūtīt e-pastu, izmantojot PHP mail() funkciju. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.'
	'sendFailureSendmail'  => 'Nevar nosūtīt e-pastu, izmantojot PHP Sendmail metodi. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.', // 'Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.'
	'sendFailureSmtp'      => 'Nevar nosūtīt e-pastu, izmantojot PHP SMTP metodi. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.', // 'Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.'
	'sent'                 => 'Jūsu ziņojums ir veiksmīgi nosūtīts, izmantojot šo protokolu: {0}', // 'Your message has been successfully sent using the following protocol: {0}'
	'noSocket'             => 'Nevar atvērt soketu priekš Sendmail. Lūdzu, pārbaudiet iestatījumus.', // 'Unable to open a socket to Sendmail. Please check settings.'
	'noHostname'           => 'Jūs nenorādījāt SMTP hosta nosaukumu.', // 'You did not specify a SMTP hostname.'
	'SMTPError'            => 'Tika konstatēta šāda SMTP kļūda: {0}', // 'The following SMTP error was encountered: {0}'
	'noSMTPAuth'           => 'Kļūda: jums jānorāda SMTP lietotājvārds un parole.', // 'Error: You must assign a SMTP username and password.'
	'failedSMTPLogin'      => 'Neizdevās nosūtīt komandu AUTH LOGIN. Kļūda: {0}', // 'Failed to send AUTH LOGIN command. Error: {0}'
	'SMTPAuthUsername'     => 'Neizdevās autentificēt lietotājvārdu. Kļūda: {0}', // 'Failed to authenticate username. Error: {0}'
	'SMTPAuthPassword'     => 'Neizdevās autentificēt paroli. Kļūda: {0}', // 'Failed to authenticate password. Error: {0}'
	'SMTPDataFailure'      => 'Nevar nosūtīt datus: {0}', // 'Unable to send data: {0}'
	'exitStatus'           => 'Izejas statusa kods: {0}', // 'Exit status code: {0}'
];
