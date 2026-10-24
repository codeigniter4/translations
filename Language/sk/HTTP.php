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
    'missingCurl'     => 'Aby bolo možné používať triedu CURLRequest, musí byť povolené CURL.',
    'invalidSSLKey'   => 'Nie je možné nastaviť kľúč SSL. "{0}" nie je platný súbor.',
    'sslCertNotFound' => 'SSL certifikát nebol nájdený v: "{0}"',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '"{0}" nie je platný typ vyjednávania. Musí byť jedným z: media, charset, encoding, language.',
    'invalidJSON'            => 'Parsovanie JSON reťazca zlyhalo. Chyba: {0}',
    'unsupportedJSONFormat'  => 'Zadaný formát JSON nie je podporovaný.',

    // Message
    'invalidHTTPProtocol' => 'Neplatná verzia protokolu HTTP: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Pre všetky vyjednávania (Negotiations) musíte poskytnúť pole podporovaných hodnôt.',

    // RedirectResponse
    'invalidRoute' => 'Trasu pre "{0}" nie je možné nájsť.',

    // DownloadResponse
    'cannotSetBinary'        => 'Pri nastavovaní filepath nie je možné nastaviť binary.',
    'cannotSetFilepath'      => 'Pri nastavovaní binary nie je možné nastaviť filepath: "{0}"',
    'notFoundDownloadSource' => 'Nenašiel sa zdroj tela sťahovania.',
    'cannotSetCache'         => 'Ukladanie do vyrovnávacej pamäte pri sťahovaní nie je podporované.',
    'cannotSetStatusCode'    => 'Zmena stavového kódu pri sťahovaní nie je podporovaná. Kód: {0}, dôvod: {1}',

    // Response
    'missingResponseStatus' => 'V odpovedi HTTP chýba stavový kód',
    'invalidStatusCode'     => '{0} nie je platný návratový stavový kód HTTP',
    'unknownStatusCode'     => 'Neznámy stavový kód HTTP poskytnutý bez správy: {0}',

    // URI
    'cannotParseURI'       => 'Nie je možné spracovať URI: "{0}"',
    'segmentOutOfRange'    => 'Segment URI požiadavky je mimo rozsahu: "{0}"',
    'invalidPort'          => 'Porty musia byť medzi 0 a 65535. Zadané: {0}',
    'malformedQueryString' => 'Reťazce dopytu nesmú obsahovať fragmenty URI.',

    // Page Not Found
    'pageNotFound'       => 'Stránka nebola nájdená',
    'emptyController'    => 'Nie je zadaný žiadny controller.',
    'controllerNotFound' => 'Controller alebo jeho metóda sa nenašla: {0}::{1}',
    'methodNotFound'     => 'Metóda controllera sa nenašla: "{0}"',
    'localeNotSupported' => 'Lokalizácia nie je podporovaná: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'Požadovaná akcia nie je povolená.',

    // Uploaded file moving
    'alreadyMoved' => 'Nahraný súbor už bol presunutý.',
    'invalidFile'  => 'Pôvodný súbor nie je platný súbor.',
    'moveFailed'   => 'Súbor "{0}" nebolo možné presunúť do "{1}". Dôvod: {2}',

    'uploadErrOk'        => 'Súbor bol úspešne nahraný.',
    'uploadErrIniSize'   => 'Súbor "%s" prekračuje vašu ini direktívu upload_max_filesize.',
    'uploadErrFormSize'  => 'Súbor "%s" prekračuje limit pre nahrávanie stanovený vo vašom formulári.',
    'uploadErrPartial'   => 'Súbor "%s" bol nahraný iba čiastočne.',
    'uploadErrNoFile'    => 'Nebol nahraný žiadny súbor.',
    'uploadErrCantWrite' => 'Súbor "%s" sa nepodarilo zapísať na disk.',
    'uploadErrNoTmpDir'  => 'Súbor sa nepodarilo nahrať: chýba dočasný adresár.',
    'uploadErrExtension' => 'Nahrávanie súboru bolo zastavené rozšírením PHP.',
    'uploadErrUnknown'   => 'Súbor "%s" nebol nahraný kvôli neznámej chybe.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Nastavenie SameSite musí byť None, Lax, Strict alebo prázdny reťazec. Zadané: {0}',
];
