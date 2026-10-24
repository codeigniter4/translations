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

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'Pro použití třídy CURLRequest musí být povoleno CURL.',
    'invalidSSLKey'   => 'Nelze nastavit klíč SSL. "{0}" není platný soubor.',
    'sslCertNotFound' => 'SSL certifikát nebyl nalezen v: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" není platný typ vyjednávání. Musí být jedním z: media, charset, encoding, language.',
    'invalidJSON'            => 'Parsování JSON řetězce selhalo. Chyba: {0}',
    'unsupportedJSONFormat'  => 'Zadaný formát JSON není podporován.',

    // Message
    'invalidHTTPProtocol' => 'Neplatná verze protokolu HTTP: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Pro všechna vyjednávání (Negotiations) musíte poskytnout pole podporovaných hodnot.',

    // RedirectResponse
    'invalidRoute' => 'Trasu pro "{0}" nelze najít.',

    // DownloadResponse
    'cannotSetBinary'        => 'Při nastavování filepath nelze nastavit binary.',
    'cannotSetFilepath'      => 'Při nastavování binary nelze nastavit filepath: "{0}"',
    'notFoundDownloadSource' => 'Nebyl nalezen zdroj těla (body) ke stažení.',
    'cannotSetCache'         => 'Ukládání do vyrovnávací paměti při stahování není podporováno.',
    'cannotSetStatusCode'    => 'Změna stavového kódu při stahování není podporována. Kód: {0}, důvod: {1}',

    // Response
    'missingResponseStatus' => 'V odpovědi HTTP chybí stavový kód',
    'invalidStatusCode'     => '{0} není platný návratový stavový kód HTTP',
    'unknownStatusCode'     => 'Neznámý stavový kód HTTP poskytnutý bez zprávy: {0}',

    // URI
    'cannotParseURI'       => 'Nelze zpracovat URI: "{0}"',
    'segmentOutOfRange'    => 'Segment URI požadavku je mimo rozsah: "{0}"',
    'invalidPort'          => 'Porty musí být mezi 0 a 65535. Zadáno: {0}',
    'malformedQueryString' => 'Řetězce dotazu nesmí obsahovat fragmenty URI.',

    // Page Not Found
    'pageNotFound'       => 'Stránka nebyla nalezena',
    'emptyController'    => 'Není zadán žádný controller.',
    'controllerNotFound' => 'Controller nebo jeho metoda nebyla nalezena: {0}::{1}',
    'methodNotFound'     => 'Metoda controlleru nebyla nalezena: "{0}"',
    'localeNotSupported' => 'Lokalizace není podporována: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'Požadovaná akce není povolena.',

    // Uploaded file moving
    'alreadyMoved' => 'Nahraný soubor již byl přesunut.',
    'invalidFile'  => 'Původní soubor není platný soubor.',
    'moveFailed'   => 'Soubor "{0}" nebylo možné přesunout do "{1}". Důvod: {2}',

    'uploadErrOk'        => 'Soubor byl úspěšně nahrán.',
    'uploadErrIniSize'   => 'Soubor "%s" překračuje vaši ini direktivu upload_max_filesize.',
    'uploadErrFormSize'  => 'Soubor "%s" překračuje limit pro nahrávání nastavený ve vašem formuláři.',
    'uploadErrPartial'   => 'Soubor "%s" byl nahrán pouze částečně.',
    'uploadErrNoFile'    => 'Nebyl nahrán žádný soubor.',
    'uploadErrCantWrite' => 'Soubor "%s" se nepodařilo zapsat na disk.',
    'uploadErrNoTmpDir'  => 'Soubor se nepodařilo nahrát: chybí dočasný adresář.',
    'uploadErrExtension' => 'Nahrávání souboru bylo zastaveno rozšířením PHP.',
    'uploadErrUnknown'   => 'Soubor "%s" nebyl nahrán z důvodu neznámé chyby.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Nastavení SameSite musí být None, Lax, Strict nebo prázdný řetězec. Zadáno: {0}',
];
