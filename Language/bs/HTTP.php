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
    'missingCurl'     => 'CURL mora biti uključen da bi koristili CURLRequest klasu.',
    'invalidSSLKey'   => 'Ne može se postaviti SSL ključ. {0} nije validna datoteka.',
    'sslCertNotFound' => 'SSL certifikat nije pronađen na: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} nije validan negotacijski tip. Mora biti jedan od: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Nevalidna HTTP Protokol Verzija. Mora biti jedna od: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Morate proslijediti niz podržanih vrijednosti na sve negotacije.',

    // RedirectResponse
    'invalidRoute' => '{0} ruta ne može biti pronađena prilikom izvođenja obrnutog rutiranja.',

    // DownloadResponse
    'cannotSetBinary'        => 'Prilikom postavljanja putanje datoteke ne može se postaviti binarno.',
    'cannotSetFilepath'      => 'Prilikom postavljanja binarnog tipa ne može se postaviti putanja datoteke: {0}',
    'notFoundDownloadSource' => 'Nije pronađen preuzeti izvor.',
    'cannotSetCache'         => 'Nije podržano keširanje prilikom preuzimanja.',
    'cannotSetStatusCode'    => 'Nije podržana promjena status koda za preuzimanje. kod: {0}, razlog: {1}',

    // Response
    'missingResponseStatus' => 'U HTTP odgovoru nedostaje status kod',
    'invalidStatusCode'     => '{0} nije validan HTTP povratni status kod',
    'unknownStatusCode'     => 'Dotstavljen nepoznat HTTP status kod bez poruke: {0}',

    // URI
    'cannotParseURI'       => 'Nije moguće obraditi URI: {0}',
    'segmentOutOfRange'    => 'Zahtjevani URI segment je izvan opsega: {0}',
    'invalidPort'          => 'Portovi moraju biti između 0 i 65535. Dat port: {0}',
    'malformedQueryString' => 'Dijelovi zahtjeva možda ne uključuju URI fragmente.',

    // Page Not Found
    'pageNotFound'       => 'Stranica nije pronađena',
    'emptyController'    => 'Nije definisan kontroler.',
    'controllerNotFound' => 'Kontroler ili njegova metoda nisu pronađeni: {0}::{1}',
    'methodNotFound'     => 'Kontroler metoda nije pronađena: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Zahtjevana akcija nije dozvoljena.',

    // Uploaded file moving
    'alreadyMoved' => 'Uploadovana datoteka je pomjerena.',
    'invalidFile'  => 'Orginalna datoteka nije validna.',
    'moveFailed'   => 'ne mogu pomjeriti datoteku {0} na {1} ({2})',

    'uploadErrOk'        => 'Datoteka je uspješno uploadovana.',
    'uploadErrIniSize'   => 'Datoteka "%s" prelazi upload_max_filesize ini direktivu.',
    'uploadErrFormSize'  => 'Datoteka "%s" prelazi upload limit definisan u vašoj formi.',
    'uploadErrPartial'   => 'Datoteka "%s" je samo djelimično uploadovana.',
    'uploadErrNoFile'    => 'Datoteka nije uploadovana.',
    'uploadErrCantWrite' => 'Datoteka "%s" ne može biti zapisana na disk.',
    'uploadErrNoTmpDir'  => 'Datoteka ne može biti uploadovana: nedostaje privremeni direktorij.',
    'uploadErrExtension' => 'Upload datoteke je zaustavljen od strane PHP ekstenzije.',
    'uploadErrUnknown'   => 'Fajl "%s" nije uploadovan zbog nepoznate greške.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'SameSite mora biti postavljen na None, Lax, Strict, ili prazan string. Dato: {0}',
];
