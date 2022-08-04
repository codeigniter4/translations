<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

return [
    // CurlRequest
    'missingCurl'     => 'CURL måste vara aktiverat för att kunna använda klassen CURLRequest.',
    'invalidSSLKey'   => 'Kan inte konfigurera SSL Key. {0} är inte en giltig fil.',
    'sslCertNotFound' => 'SSL certifikatet kunde inte hittas: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} är inte en giltig negotiation typ. Den måste vara en av: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Felaktigt HTTP Protocol Version. Måste bli en av: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'En array med giltiga värden för alla Negotiations måste anges.',

    // RedirectResponse
    'invalidRoute' => 'Routen "{0}" kunde inte hittas.',

    // DownloadResponse
    'cannotSetBinary'        => 'När sökväg anges kan inte binär sättas.',
    'cannotSetFilepath'      => 'Kan inte sätta sökväg när binär är satt: {0}',
    'notFoundDownloadSource' => 'Kunde inte hitta nedladdade filen.',
    'cannotSetCache'         => 'Stödjer inte cachening för nedladdning.',
    'cannotSetStatusCode'    => 'Stödjer inte byte av statuskod för nedladdning. Kod: {0}, anledning: {1}',

    // Response
    'missingResponseStatus' => 'HTTP Response saknar en statuskod',
    'invalidStatusCode'     => '{0} är inte en giltig HTTP statuskod',
    'unknownStatusCode'     => 'Okänd HTTP statuskod utan meddelande: {0}',

    // URI
    'cannotParseURI'       => 'Kunde inte tolka URI: {0}',
    'segmentOutOfRange'    => 'Förfrågans URI segment utanför intervall: {0}',
    'invalidPort'          => 'Port måste anges mellan 0 och 65535. Angivet: {0}',
    'malformedQueryString' => 'Query-strängen får inte innehålla URI-fragment.',

    // Page Not Found
    'pageNotFound'       => 'Sidan kunde inte hittas',
    'emptyController'    => 'Ingen Controller angiven.',
    'controllerNotFound' => 'Controller eller metoden kunde inte hittas: {0}::{1}',
    'methodNotFound'     => 'Controller-metoden kunde inte hittas: {0}',

    // CSRF
    'disallowedAction' => 'Den önskade funktionen är inte tillåten.',

    // Uploaded file moving
    'alreadyMoved' => 'Den uppladdade filen har redan flyttats.',
    'invalidFile'  => 'Originalfilen är inte en giltig fil.',
    'moveFailed'   => 'Kunde inte flytta filen {0} till {1} ({2})',

    'uploadErrOk'        => 'Filen laddades upp korrekt.',
    'uploadErrIniSize'   => 'Filen "%s" överstiger inställningen upload_max_filesize.',
    'uploadErrFormSize'  => 'Filen "%s" överstiger angiven begränsning på formuläret.',
    'uploadErrPartial'   => 'Enbart en del av filen "%s" laddades upp.',
    'uploadErrNoFile'    => 'Ingen fil laddades upp.',
    'uploadErrCantWrite' => 'Filen "%s" kunde inte skrivas till disk.',
    'uploadErrNoTmpDir'  => 'Filen kunde inte laddas upp: temporärkatalog saknas.',
    'uploadErrExtension' => 'Uppladdningen av filen stoppades av en PHP extension.',
    'uploadErrUnknown'   => 'Filen "%s" laddades inte upp på grund av ett okänt fel.',

    // SameSite setting
    // @deprecated use `Security.invalidSameSiteSetting`
    'invalidSameSiteSetting' => 'Inställningen SameSite måste vara None, Lax, Strict, eller en blank sträng. Angivet: {0}',
];
