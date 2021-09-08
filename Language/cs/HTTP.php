<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'Pro použití třídy CURLRequest, musí byť povolená funkce CURL.',
    'invalidSSLKey'   => 'Není možné nastavit klíč SSL. {0} není platný soubor.',
    'sslCertNotFound' => 'SSL certifikát nebyl nalezen na: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} není platný typ vyjednávání. Musí to být: media, charset, encoding nebo language.',

    // Message
    'invalidHTTPProtocol' => 'Neplatná verze protokolu HTTP. Musí to být jedno z: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Musíte poskytnout pole podporovaných hodnot pro všechny Negotiations.',

    // RedirectResponse
    'invalidRoute' => '{0} trasu není možné najít při zpětném směrování.',

    // DownloadResponse
    'cannotSetBinary'        => 'Při nastavování filepath není možné nastavit binary.',
    'cannotSetFilepath'      => 'Při nastavování binary není možné nastavit filepath: {0}',
    'notFoundDownloadSource' => 'Nebyl nalezen zdroj těla (body) ke stažení.',
    'cannotSetCache'         => 'Nepodporuje ukladání do vyrovnávací paměti pro stahování.',
    'cannotSetStatusCode'    => 'Nepodporuje stavový kód change pro stažení. kód: {0}, důvod: {1}',

    // Response
    'missingResponseStatus' => 'V odpovědi HTTP chybí stavový kód',
    'invalidStatusCode'     => '{0} není platný návratový stavový kód HTTP',
    'unknownStatusCode'     => 'Neznámý stavový kód HTTP poskytnutý bez zprávy: {0}',

    // URI
    'cannotParseURI'       => 'Není možné analyzovat URI: {0}',
    'segmentOutOfRange'    => 'Segment URI žádosti je mimo rozsah: {0}',
    'invalidPort'          => 'Porty musí být mezi 0 a 65535. Zadáno: {0}',
    'malformedQueryString' => 'Řetězce dotazů nemusí obsahovat fragmenty URI.',

    // Page Not Found
    'pageNotFound'       => 'Stránka nebyla nalezena',
    'emptyController'    => 'Není zadán žádný Controller.',
    'controllerNotFound' => 'Controller nebo jeho metoda nebyla nalezena: {0}::{1}',
    'methodNotFound'     => 'Metoda Controlleru nebyla nalezena: {0}',

    // CSRF
    'disallowedAction' => 'Požadovaná akce není povolena.',

    // Uploaded file moving
    'alreadyMoved' => 'Nahraný soubor už byl presunutý.',
    'invalidFile'  => 'Pôvodný soubor není platný.',
    'moveFailed'   => 'Nepodařilo se přesunout soubor z {0} do {1} ({2})',

    'uploadErrOk'        => 'Soubor byl úspěšně nahrán.',
    'uploadErrIniSize'   => 'Soubor "%s" překračuje vaše nastavení upload_max_filesize.',
    'uploadErrFormSize'  => 'Soubor "%s" překračuje limit pro upload nastavený ve vašem formuláři.',
    'uploadErrPartial'   => 'Soubor "%s" byl nahrán pouze částečně.',
    'uploadErrNoFile'    => 'Nebyl nahrán žádný soubor.',
    'uploadErrCantWrite' => 'Soubor "%s" se nepodařilo zapsat na disk.',
    'uploadErrNoTmpDir'  => 'Soubor se nepodařilo nahrát: chybí dočasný adresář.',
    'uploadErrExtension' => 'Nahrávání souborů bylo zastaveno rozšířením PHP.',
    'uploadErrUnknown'   => 'Soubor "%s" nebyl nahrán z důvodu neznámé chyby.',

    // SameSite setting
    'invalidSameSiteSetting' => 'SameSite nastavení musí být None, Lax, Strict nebo prázdný řetězec. Zadané: {0}',
];
