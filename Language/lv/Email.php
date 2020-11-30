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
	'mustBeArray'          => 'E-pasta validācijas metodei ir jānodod masīvs.',
	'invalidAddress'       => 'Nederīga e-pasta adrese: {0}',
	'attachmentMissing'    => 'Nevar atrast šo e-pasta pielikumu: {0}',
	'attachmentUnreadable' => 'Nevar atvērt šo e-pasta pielikumu: {0}',
	'noFrom'               => 'Nevar nosūtīt e-pastu bez galvenes `From`.',
	'noRecipients'         => 'Jums ir jāiekļauj adresāti: `To`, `Cc` vai `Bcc`',
	'sendFailurePHPMail'   => 'Nevar nosūtīt e-pastu, izmantojot PHP mail() funkciju. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.',
	'sendFailureSendmail'  => 'Nevar nosūtīt e-pastu, izmantojot PHP Sendmail metodi. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.',
	'sendFailureSmtp'      => 'Nevar nosūtīt e-pastu, izmantojot PHP SMTP metodi. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.',
	'sent'                 => 'Jūsu ziņojums ir veiksmīgi nosūtīts, izmantojot šo protokolu: {0}',
	'noSocket'             => 'Nevar atvērt soketu priekš Sendmail. Lūdzu, pārbaudiet iestatījumus.',
	'noHostname'           => 'Jūs nenorādījāt SMTP hosta nosaukumu.',
	'SMTPError'            => 'Tika konstatēta šāda SMTP kļūda: {0}',
	'noSMTPAuth'           => 'Kļūda: jums jānorāda SMTP lietotājvārds un parole.',
	'failedSMTPLogin'      => 'Neizdevās nosūtīt komandu AUTH LOGIN. Kļūda: {0}',
	'SMTPAuthUsername'     => 'Neizdevās autentificēt lietotājvārdu. Kļūda: {0}',
	'SMTPAuthPassword'     => 'Neizdevās autentificēt paroli. Kļūda: {0}',
	'SMTPDataFailure'      => 'Nevar nosūtīt datus: {0}',
	'exitStatus'           => 'Izejas statusa kods: {0}',
];
