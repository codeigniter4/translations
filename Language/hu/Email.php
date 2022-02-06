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
    'mustBeArray'          => 'Az e-mail-ellenőrzési módszert egy tömbben kell megadni.',
    'invalidAddress'       => 'Érvénytelen email cím: {0}',
    'attachmentMissing'    => 'Nem található a következő e-mail melléklet: {0}',
    'attachmentUnreadable' => 'Ezt a mellékletet nem lehet megnyitni: {0}',
    'noFrom'               => 'Nem lehet levelet küldeni "Feladó" fejléc nélkül.',
    'noRecipients'         => 'Meg kell adnia a címzetteket: Címzett, Másolat vagy Titkos másolat',
    'sendFailurePHPMail'   => 'Nem lehet e-mailt küldeni a PHP mail() használatával. Előfordulhat, hogy szervere nincs konfigurálva úgy, hogy ezzel a módszerrel küldjön leveleket.',
    'sendFailureSendmail'  => 'Nem lehet e-mailt küldeni a Sendmail használatával. Előfordulhat, hogy szervere nincs konfigurálva úgy, hogy ezzel a módszerrel küldjön leveleket.',
    'sendFailureSmtp'      => 'Nem lehet e-mailt küldeni PHP SMTP használatával. Előfordulhat, hogy szervere nincs konfigurálva úgy, hogy ezzel a módszerrel küldjön leveleket.',
    'sent'                 => 'Üzenetét sikeresen elküldtük a következő protokoll használatával: {0}',
    'noSocket'             => 'Nem lehet csatlakozni a Sendmailhez. Kérjük, ellenőrizze a beállításokat.',
    'noHostname'           => 'Nem adott meg SMTP szervernevet.',
    'SMTPError'            => 'A következő SMTP hiba történt: {0}',
    'noSMTPAuth'           => 'Hiba: SMTP felhasználót és jelszót kell hozzárendelnie.',
    'failedSMTPLogin'      => 'Nem sikerült elküldeni az AUTH LOGIN parancsot. Hiba: {0}',
    'SMTPAuthUsername'     => 'Nem sikerült hitelesíteni a felhasználónevet. Hiba: {0}',
    'SMTPAuthPassword'     => 'Nem sikerült hitelesíteni a jelszót. Hiba: {0}',
    'SMTPDataFailure'      => 'Nem lehet adatokat küldeni: {0}',
    'exitStatus'           => 'Kilépési állapotkód: {0}',
];
