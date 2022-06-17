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
    'missingCurl'     => 'CURL muss aktiviert sein, um die CURLRequest Klasse zu nutzen.',
    'invalidSSLKey'   => 'Kann SSL-Schlüssel nicht setzen. {0} ist kein gültiger Dateiname.',
    'sslCertNotFound' => 'SSL-Zertifikat nicht gefunden unter: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} ist kein gültiger Inhaltstyp. Gültige Typen: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Ungültige HTTP Protokoll-Version. Gültige Versionen: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Es muss immer ein Array mit gültigen Inhaltstypen angegeben werden.',

    // RedirectResponse
    'invalidRoute' => 'Die Route {0} konnte nicht gefunden werden.',

    // DownloadResponse
    'cannotSetBinary'        => 'Fehler beim Download. Filepath kann nicht auf Binär gesetzt werden.',
    'cannotSetFilepath'      => 'Fehler beim Binär-Download. Kann filepath nicht setzen: {0}',
    'notFoundDownloadSource' => 'Fehler beim Herunterladen der Datei.',
    'cannotSetCache'         => 'Download-Caching wird nicht unterstützt.',
    'cannotSetStatusCode'    => 'Fehler beim Download. Status-Code konnte nicht gesetzt werden. Code: {0}, Grund: {1}',

    // Response
    'missingResponseStatus' => 'Die HTTP Response enthält keinen Statuscode',
    'invalidStatusCode'     => '{0} ist ein ungültiger HTTP-Statuscode',
    'unknownStatusCode'     => 'Unbekannter HTTP-Statuscode ohne Statusnachricht übergeben: {0}',

    // URI
    'cannotParseURI'       => 'URI kann nicht geparst werden: {0}',
    'segmentOutOfRange'    => 'URI-Segment des Requests ausserhalb des gültigen Bereichs: {0}',
    'invalidPort'          => 'Ports müssen zwischen 0 und 65535 liegen. Gegeben: {0}',
    'malformedQueryString' => 'Query-Strings dürfen keine URI-Fragmente enthalten.',

    // Page Not Found
    'pageNotFound'       => 'Seite nicht gefunden.',
    'emptyController'    => 'Kein Controller angegeben.',
    'controllerNotFound' => 'Der Controller oder seine Methode wurde nicht gefunden: {0}::{1}',
    'methodNotFound'     => 'Die Controllermethode wurde nicht gefunden: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Die angeforderte Aktion ist nicht erlaubt.',

    // Uploaded file moving
    'alreadyMoved' => 'Die hochgeladene Datei wurde bereits verschoben.',
    'invalidFile'  => 'Die Originaldatei ist keine gültige Datei.',
    'moveFailed'   => 'Die Datei konnte nicht von {0} nach {1} verschoben werden ({2}).',

    'uploadErrOk'        => 'Die Datei wurde erfolgreich hochgeladen.',
    'uploadErrIniSize'   => 'Die Datei "%s" überschreitet die upload_max_filesize ini Direktive.',
    'uploadErrFormSize'  => 'Die Datei "%s" ist grösser als die im Formular definierte Begrenzung.',
    'uploadErrPartial'   => 'Die Datei "%s" wurde nur teilweise hochgeladen.',
    'uploadErrNoFile'    => 'Es wurde keine Datei hochgeladen',
    'uploadErrCantWrite' => 'Die Datei "%s" konnte nicht gespeichert werden.',
    'uploadErrNoTmpDir'  => 'Fehler beim Hochladen: Temporäres Verzeichnis fehlt.',
    'uploadErrExtension' => 'Der Datei-Upload wurde von einer PHP-Erweiterung gestoppt.',
    'uploadErrUnknown'   => 'Die Datei "%s" konnte wegen eines unbekannten Fehlers nicht hochgeladen werden.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Die SameSite-Einstellung kann nur None, Lax, Strict, oder ein leerer String sein. Gegeben: {0}',
];
