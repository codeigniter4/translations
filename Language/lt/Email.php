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
    'mustBeArray'           => 'El. adreso patikrinimo metodui turi būti perduotas masyvas.',
    'invalidAddress'        => 'Nevalidus el. pašto adresas: „{0}“',
    'attachmentMissing'     => 'Nepavyksta rasti šio el. laiško priedo: „{0}“',
    'attachmentUnreadable'  => 'Nepavyksta atverti šio priedo: „{0}“',
    'noFrom'                => 'Negalima siųsti el. laiško be „From“ antraštės.',
    'noRecipients'          => 'Turite įtraukti gavėjus: To, Cc, arba Bcc',
    'sendFailurePHPMail'    => 'Nepavyksta siųsti laiško naudojant PHP mail() funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
    'sendFailureSendmail'   => 'Nepavyksta siųsti laiško naudojant PHP Sendmail funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
    'sendFailureSmtp'       => 'Nepavyksta siųsti laiško naudojant PHP SMTP funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
    'sent'                  => 'Jūsų laiškas buvo išsiųstas naudojant šį protokolą: {0}',
    'noSocket'              => 'Nepavyksta atverti lizdo į Sendmail. Prašome patikrinti nustatymus.',
    'noHostname'            => 'Jūs nenurodėte SMTP mazgo pavadinimo.',
    'SMTPError'             => 'Buvo susidurta su šia SMTP klaida: {0}',
    'noSMTPAuth'            => 'Klaida: turite nurodyti SMTP vartotojo vardą ir slaptažodį.',
    'invalidSMTPAuthMethod' => 'Klaida: SMTP autentifikacijos metodas „{0}“ nepalaikomas, nustatykite „login“ arba „plain".',
    'failureSMTPAuthMethod' => 'Nepavyko pradėti AUTH komandos. Jūsų serveris gali nebūti sukonfigūruotas naudoti AUTH {0} metodą.',
    'SMTPAuthCredentials'   => 'Nepavyko autentifikuoti naudotojo duomenų. Klaida: {0}',
    'SMTPAuthUsername'      => 'Nepavyko autentifikuotis šiuo vardu. Klaida: {0}',
    'SMTPAuthPassword'      => 'Nepavyko autentifikuotis šiuo slaptažodžiu. Klaida: {0}',
    'SMTPDataFailure'       => 'Nepavyko išsiųsti duomenų: {0}',
    'exitStatus'            => 'Išėjimo būklės kodas: {0}',
    // @deprecated
    'failedSMTPLogin' => 'Nepavyko išsiųsti AUTH LOGIN komandos. Klaida: {0}',
];
