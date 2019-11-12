<?php
/**
 * Email language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'El. adreso patikrinimo metodui turi būti perduotas masyvas.',
   'invalidAddress'       => 'Nevalidus el. pašto adresas: {0}',
   'attachmentMissing'    => 'Nepavyksta rasti šio el. laiško priedo: {0}',
   'attachmentUnreadable' => 'Nepavyksta atverti šio priedo: {0}',
   'noFrom'               => 'Negalima siųsti el. laiško be „From“ antraštės.',
   'noRecipients'         => 'Turite įtraukti gavėjus: To, Cc, arba Bcc',
   'sendFailurePHPMail'   => 'Nepavyksta siųsti laiško naudojant PHP mail() funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
   'sendFailureSendmail'  => 'Nepavyksta siųsti laiško naudojant PHP Sendmail funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
   'sendFailureSmtp'      => 'Nepavyksta siųsti laiško naudojant PHP SMTP funkciją. Jūsų serveris greičiausiai nesukonfigūruotas siųsti laiškus šiuo metodu.',
   'sent'                 => 'Jūsų laiškas buvo išsiųstas naudojant šį protokolą: {0, string}',
   'noSocket'             => 'Nepavyksta atverti lizdo į Sendmail. Prašome patikrinti nustatymus.',
   'noHostname'           => 'Jūs nenurodėte SMTP mazgo pavadinimo.',
   'SMTPError'            => 'Buvo susidurta su šia SMTP klaida: {0}',
   'noSMTPAuth'           => 'Klaida: turite nurodyti SMTP vartotojo vardą ir slaptažodį.',
   'failedSMTPLogin'      => 'Nepavyko išsiųsti AUTH LOGIN komandos. Klaida: {0}',
   'SMTPAuthUsername'     => 'Nepavyko autentifikuotis šiuo vardu. Klaida: {0}',
   'SMTPAuthPassword'     => 'Nepavyko autentifikuotis šiuo slaptažodžiu. Klaida: {0}',
   'SMTPDataFailure'      => 'Nepavyko išsiųsti duomenų: {0}',
   'exitStatus'           => 'Išėjimo būklės kodas: {0}',
];
