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
    'missingCurl'     => 'CURL doit être activé pour utiliser la classe CURLRequest.',
    'invalidSSLKey'   => 'Impossible de paramétrer la Clé SSL. {0} n\'est pas un fichier valide.',
    'sslCertNotFound' => 'Certificat SSL non trouvé : {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} n\'est pas un type de négociation valide. Doit être l\'un des éléments suivants : media, charset, encoding, language.',

    // Message
    'invalidHTTPProtocol' => 'Version du protocole HTTP non valide. Doit être l\'un de : {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Vous devez fournir un tableau de valeurs prises en charge à toutes les Negociations.',

    // RedirectResponse
    'invalidRoute' => '{0} n\'est pas une route valide.',

    // DownloadResponse
    'cannotSetBinary'        => 'Si un chemin est défini, on ne peut pas définir le format binaire.',
    'cannotSetFilepath'      => 'Si le format est défini comme binaire, on ne peut pas définir un chemin : {0}',
    'notFoundDownloadSource' => 'Le corps de la source du téléchargement n\'a pas été trouvé',
    'cannotSetCache'         => 'La mise en cache pour le téléchargement n\'est pas prise en charge.',
    'cannotSetStatusCode'    => 'Le changement du code de retour pour le téléchargement n\'est pas pris en charge. code : {0}, raison : {1}',

    // Response
    'missingResponseStatus' => 'La réponse ne contient pas de code de retour HTTP',
    'invalidStatusCode'     => '{0} n\'est pas un code de retour HTTP valide.',
    'unknownStatusCode'     => 'Code de retour HTTP inconnu reçu sans message : {0}',

    // URI
    'cannotParseURI'       => 'Impossible d\'analyser l\'URI : {0}',
    'segmentOutOfRange'    => 'Le segment URI de la demande est en-dehors de la plage : {0}',
    'invalidPort'          => 'Les ports doivent être compris entre 0 et 65535. Fourni : {0}',
    'malformedQueryString' => 'Les chaînes de requête ne peuvent pas inclure de fragments d\'URI.',

    // Page Not Found
    'pageNotFound'       => 'Page non trouvée',
    'emptyController'    => 'Pas de contrôleur spécifié.',
    'controllerNotFound' => 'Le contrôleur ou sa méthode sont introuvables : {0}::{1}',
    'methodNotFound'     => 'La méthode du contrôleur est introuvable : {0}',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'Votre demande n\'est pas autorisée.',

    // Uploaded file moving
    'alreadyMoved' => 'Le fichier uploadé a déjà été déplacé.',
    'invalidFile'  => 'Le fichier original n\'est pas un fichier valide.',
    'moveFailed'   => 'Impossible de déplacer le fichier {0} vers {1} ({2})',

    'uploadErrOk'        => 'Le fichier a été uploadé avec succès.',
    'uploadErrIniSize'   => 'Le fichier "%s" dépasse la directive ini "upload_max_filesize".',
    'uploadErrFormSize'  => 'Le fichier "%s" dépasse la limite d\'upload définie dans le formulaire.',
    'uploadErrPartial'   => 'Le fichier "%s" n\'a été que partiellement uploadé.',
    'uploadErrNoFile'    => 'Aucun fichier n\'a été uploadé.',
    'uploadErrCantWrite' => 'Le fichier "%s" n\'a pas pu être écrit sur le disque.',
    'uploadErrNoTmpDir'  => 'Le fichier n\'a pas pu être uploadé : le répertoire temporaire est inexistant.',
    'uploadErrExtension' => 'L\'upload de fichiers a été interrompu par une extension PHP.',
    'uploadErrUnknown'   => 'Le fichier "%s" n\'a pas été uploadé en raison d\'une erreur inconnue.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Le paramètre SameSite doit être None, Lax, Strict, ou une chaîne vide. Fourni : {0}',
];
