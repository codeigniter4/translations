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
	'mustBeArray'          => 'Metóda overenia e-mailu musí byť odovzdaná ako pole.',
	'invalidAddress'       => 'Neplatná emailová adresa: {0}',
	'attachmentMissing'    => 'Nasledujúca príloha e-mailu sa nepodarilo nájsť: {0}',
	'attachmentUnreadable' => 'Túto prílohu nie je možné otvoriť: {0}',
	'noFrom'               => 'Nemožno poslať mail bez hlavičky (header) "From".',
	'noRecipients'         => 'Musíte zadať príjemcov: To, Cc, alebo Bcc',
	'sendFailurePHPMail'   => 'Nepodarilo sa odoslať email pomocou PHP mail(). Váš server nemusí byť nakonfigurovaný na odosielanie pošty pomocou tejto metódy.',
	'sendFailureSendmail'  => 'Nepodarilo sa odoslať email pomocou PHP Sendmail. Váš server nemusí byť nakonfigurovaný na odosielanie pošty pomocou tejto metódy.',
	'sendFailureSmtp'      => 'Nepodarilo sa odoslať e-mail pomocou protokolu PHP SMTP. Váš server nemusí byť nakonfigurovaný na odosielanie pošty pomocou tejto metódy.',
	'sent'                 => 'Vaša správa bola úspešne odoslaná pomocou nasledujúceho protokolu: {0}',
	'noSocket'             => 'Nepodarilo sa otvoriť soket pre Sendmail. Skontrolujte nastavenia.',
	'noHostname'           => 'Nezadali ste názov hostiteľa SMTP.',
	'SMTPError'            => 'Vyskytla sa nasledujúca chyba SMTP: {0}',
	'noSMTPAuth'           => 'Chyba: Musíte zadať používateľské meno a heslo SMTP.',
	'failedSMTPLogin'      => 'Nepodarilo sa odoslať príkaz AUTH LOGIN. Chyba: {0}',
	'SMTPAuthUsername'     => 'Nepodarilo sa overiť používateľské meno. Chyba: {0}',
	'SMTPAuthPassword'     => 'Nepodarilo sa overiť heslo. Chyba: {0}',
	'SMTPDataFailure'      => 'Nie je možné odoslať údaje: {0}',
	'exitStatus'           => 'Stavový kód Exit: {0}',
];
