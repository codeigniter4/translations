<?php

/**
 * Migration language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Migration Runner
   'missingTable'      => 'La table des migrations doit être définie.',
   'invalidType'       => 'Type de numérotation de migration spécifié invalide: {0}',
   'disabled'          => 'Les migrations ont été chargées mais sont désactivées ou mal paramétrées.',
   'notFound'          => 'Fichier de migration non trouvé : ',
   'empty'             => 'Aucun fichier de migration trouvé',
   'gap'               => 'Il y a un écart dans la séquence de migration du coté du numéro de version : ',
   'classNotFound'     => 'La classe de migration "%s" n\'a pas pu être trouvée.',
   'missingMethod'     => 'Il manque la méthode "%s" dans la classe de migration.',

	// Migration Command
   'migHelpLatest'     => "\t\tMigre la base de données vers la dernière migration disponible.",
   'migHelpCurrent'    => "\t\tMigre la base de données vers la version définie comme 'actuelle' dans la configuration.",
   'migHelpVersion'    => "\tMigre la base de données vers la version {v}.",
   'migHelpRollback'   => "\tLance toutes les migrations 'down' vers la version 0.",
   'migHelpRefresh'    => "\t\tDésinstalle et relance toutes les migrations pour rafraîchir la base de données.",
   'migHelpSeed'       => "\tLance le 'seeder' nommé [name].",
   'migCreate'         => "\tCrée une nouvelle migration nommée [name]",
   'nameMigration'     => 'Nomme le fichier de migration',
   'badCreateName'     => 'Vous devez fournir un nom pour le fichier de migration.',
   'writeError'        => 'Erreur durant la création du fichier.',
   'migNumberError'    => 'Le numéro de migration doit comporter trois chiffres, et ne doit pas comporter de trous dans la séquence.',

   'toLatest'          => 'Migration vers la dernière version en cours...',
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

   'version'           => 'Version',
   'filename'          => 'Nom de fichier',
];
