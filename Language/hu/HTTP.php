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
    'missingCurl'     => 'A CURL-nek engedélyezve kell lenni a CURLRequest osztály használatához.',
    'invalidSSLKey'   => 'SSL kulcs beállítása sikertelen. {0} nem egy valós fájl.',
    'sslCertNotFound' => 'SSL tanusítvány nem található a következő útvonalon: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} nem megfelelő kapcsolattípus. A következők egyike kell legyen: media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Érvénytelen HTTP protokoll verzió. A következők egyike kell legyen: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Minden kapcsolattípushoz tömbként szükséges megadni a támogatottakat.',

    // RedirectResponse
    'invalidRoute' => '{0} útvonal nem található visszairányításkor.',

    // DownloadResponse
    'cannotSetBinary'        => 'A fájlútvonal meghatározásakor nem lehet binárist állítani.',
    'cannotSetFilepath'      => 'A bináris beállításnál a fájl elérési útja nem állítható be: {0}',
    'notFoundDownloadSource' => 'Nem található a letöltési forrás.',
    'cannotSetCache'         => 'Nem támogatja a gyorsítótárazást a letöltéshez.',
    'cannotSetStatusCode'    => 'Nem támogatja az állapotkód módosítását a letöltéshez. kód: {0}, ok: {1}',

    // Response
    'missingResponseStatus' => 'A HTTP válasz nem tartalmaz státuszkódot',
    'invalidStatusCode'     => 'A (z) {0} nem érvényes HTTP válasz státuszkód',
    'unknownStatusCode'     => 'Ismeretlen HTTP státuszkód üzenet nélkül: {0}',

    // URI
    'cannotParseURI'       => 'A következő URI feldolgozása sikertelen: {0}',
    'segmentOutOfRange'    => 'A kért URI szegmens tartományon kívüli: {0}',
    'invalidPort'          => 'A portoknak 0 és 65535 közé kell esniük. Megadva: {0}',
    'malformedQueryString' => 'A lekérdezés karakterlánca nem tartalmazhat URI részleteket.',

    // Page Not Found
    'pageNotFound'       => 'Az oldal nem található',
    'emptyController'    => 'Nincs Vezérlő (Controller) meghatározva.',
    'controllerNotFound' => 'A következő Vezérlő (Controller) vagy metódusa nem található: {0}::{1}',
    'methodNotFound'     => 'A következő Vezérlő (Controller) metódus nem található: {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'A kért művelet nem hajtható végre.',

    // Uploaded file moving
    'alreadyMoved' => 'A feltöltött fájl már áthelyezésre került.',
    'invalidFile'  => 'Az eredeti fájl nem érvényes állomány.',
    'moveFailed'   => 'Nem sikerült áthelyezni a fájlt: {0} a következő helyre: {1} ({2})',

    'uploadErrOk'        => 'A fájl sikeresen feltöltésre került.',
    'uploadErrIniSize'   => 'A(z) "%s" nevű fájl mérete meghaladja az upload_max_filesize ini-ben megadott határát.',
    'uploadErrFormSize'  => 'A(z) "%s" nevű fájl mérete meghaladja az űrlapban megadott határt.',
    'uploadErrPartial'   => 'A(z) "%s" nevű fájl csak részlegesen lett feltöltve.',
    'uploadErrNoFile'    => 'Nem lett fájl feltöltve.',
    'uploadErrCantWrite' => 'A(z) "%s" nevű fájlt nem lehet lemezre írni.',
    'uploadErrNoTmpDir'  => 'A fájl feltöltése nem lehetséges: hiányzik az ideiglenes könyvtár.',
    'uploadErrExtension' => 'A fájl feltöltését megállította egy PHP kiterjesztés.',
    'uploadErrUnknown'   => 'A(z) "%s" nevű fájl nem lett feltöltve ismeretlen hiba miatt.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'A SameSite értékének None, Lax, Strict vagy egy üres karakterláncnak kell lennie, megadva: {0}.',
];
