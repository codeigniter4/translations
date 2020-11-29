<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => '`sessionSavePath` doit contenir le nom de la table pour que le gestionnaire de session de base de données puisse fonctionner.',
	'invalidSavePath'        => 'Session : le chemin de sauvegarde configuré "{0}" n\'est pas un répertoire, n\'existe pas ou ne peut être créé.',
	'writeProtectedSavePath' => 'Session : le chemin de sauvegarde configuré "{0}" ne permet pas l\'écriture par le processus PHP.',
	'emptySavePath'          => 'Session : aucun chemin de sauvegarde configuré.',
	'invalidSavePathFormat'  => 'Session : format du chemin de sauvegarde Redis invalide : {0}',
];
