<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Migration language settings
return [
	// Migration Runner
	'missingTable'  => 'La table des migrations doit être définie.',
	'disabled'      => 'Les migrations ont été chargées mais sont désactivées ou mal paramétrées.',
	'notFound'      => 'Fichier de migration non trouvé : ',
	'batchNotFound' => 'Target batch not found: ',
	'empty'         => 'Aucun fichier de migration trouvé',
	'gap'           => 'Il y a un écart dans la séquence de migration du coté du numéro de version : ',
	'classNotFound' => 'La classe de migration "%s" n\'a pas pu être trouvée.',
	'missingMethod' => 'Il manque la méthode "%s" dans la classe de migration.',

	// Migration Command
	'migHelpLatest'   => "\t\tMigre la base de données vers la dernière migration disponible.",
	'migHelpCurrent'  => "\t\tMigre la base de données vers la version définie comme 'actuelle' dans la configuration.",
	'migHelpVersion'  => "\tMigre la base de données vers la version {v}.",
	'migHelpRollback' => "\tLance toutes les migrations 'down' vers la version 0.",
	'migHelpRefresh'  => "\t\tDésinstalle et relance toutes les migrations pour rafraîchir la base de données.",
	'migHelpSeed'     => "\tLance le 'seeder' nommé [name].",
	'migCreate'       => "\tCrée une nouvelle migration nommée [name]",
	'nameMigration'   => 'Nomme le fichier de migration',
	'badCreateName'   => 'Vous devez fournir un nom pour le fichier de migration.',
	'writeError'      => 'Erreur durant la création du fichier.',
	'migNumberError'  => 'Le numéro de migration doit comporter trois chiffres, et ne doit pas comporter de trous dans la séquence.',
	'rollBackConfirm' => 'Are you sure you want to rollback?',
	'refreshConfirm'  => 'Are you sure you want to refresh?',

	'latest'            => 'Running all new migrations...',
	'generalFault'      => 'Migration failed!',
	'migInvalidVersion' => 'Numéro de version fourni invalide.',
	'toVersionPH'       => 'Migration vers la version %s en cours...',
	'toVersion'         => 'Migration vers la version actuelle en cours...',
	'rollingBack'       => 'Roll back de toutes les migrations en cours...',
	'noneFound'         => 'Aucune migration trouvée.',
	'on'                => 'Migré sur : ',
	'migSeeder'         => 'Nom du seeder',
	'migMissingSeeder'  => 'Vous devez fournir un nom de seeder.',
	'removed'           => 'Roll back en cours : ',
	'added'             => 'Exécution en cours : ',

	'version'  => 'Version',
	'filename' => 'Nom de fichier',
];
