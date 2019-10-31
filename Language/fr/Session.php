<?php

/**
 * Session language strings.
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
   'missingDatabaseTable'   => '`sessionSavePath` doit contenir le nom de la table pour que le gestionnaire de session de base de données puisse fonctionner.',
   'invalidSavePath'        => 'Session : le chemin de sauvegarde configuré "{0}" n\'est pas un répertoire, n\'existe pas ou ne peut être créé.',
   'writeProtectedSavePath' => 'Session : le chemin de sauvegarde configuré "{0}" ne permet pas l\'écriture par le processus PHP.',
   'emptySavePath'          => 'Session : aucun chemin de sauvegarde configuré.',
   'invalidSavePathFormat'  => 'Session : format du chemin de sauvegarde Redis invalide : {0}',
];
