<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// HTTP language settings
return [
	// CurlRequest
	'missingCurl'     => 'CURL doit être activé pour utiliser la classe CURLRequest.',
	'invalidSSLKey'   => 'Impossible de paramétrer la Clé SSL. {0} n\'est pas un fichier valide.',
	'sslCertNotFound' => 'Certificat SSL non trouvé : {0}',
	'curlError'       => '{0} : {1}',

	// RedirectResponse
	'invalidRoute' => '{0} n\'est pas une route valide.',

	// Page Not Found
	'pageNotFound'       => 'Page non trouvée',
	'emptyController'    => 'Pas de contrôleur spécifié.',
	'controllerNotFound' => 'Le contrôleur ou sa méthode sont introuvables : {0}::{1}',
	'methodNotFound'     => 'La méthode du contrôleur est introuvable : {0}',

	// CSRF
	'disallowedAction' => 'Votre demande n\'est pas autorisée.',

	// Uploaded file moving
	'alreadyMoved' => 'Le fichier uploadé a déjà été déplacé.',
	'invalidFile'  => 'Le fichier original n\'est pas un fichier valide.',
	'moveFailed'   => 'Impossible de déplacer le fichier {0} vers {1} ({2})',
];
