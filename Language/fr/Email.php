<?php

/**
 * Email language strings.
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
   'mustBeArray'          => 'La méthode de validation de l\'email n\'accepte que les tableaux.',
   'invalidAddress'       => 'Adresse email invalide : {0}',
   'attachmentMissing'    => 'Impossible de localiser le ficher joint suivant : {0}',
   'attachmentUnreadable' => 'Impossible d\'ouvrir ce fichier joint : {0}',
   'noFrom'               => 'Impossible d\'envoyer un email sans en-tête "From".',
   'noRecipients'         => 'Vous devez spécifier des destinataires : To, Cc, ou Bcc',
   'sendFailurePHPMail'   => 'Impossible d\'envoyer des emails avec la fonction mail() de PHP. Votre serveur n\'est peut-être pas configuré pour pouvoir utiliser cette méthode.',
   'sendFailureSendmail'  => 'Impossible d\'envoyer des emails avec la méthode Sendmail de PHP. Votre serveur n\'est peut-être pas configuré pour pouvoir utiliser cette méthode.',
   'sendFailureSmtp'      => 'Impossible d\'envoyer des emails avec la méthode SMTP de PHP. Votre serveur n\'est peut-être pas configuré pour pouvoir utiliser cette méthode.',
   'sent'                 => 'Votre message a bien été envoyé avec le protocole suivant : {0, string}',
   'noSocket'             => 'Impossible d\'ouvrir un socket avec Sendmail. Veuillez vérifier la configuration de votre environnement.',
   'noHostname'           => 'Vous n\'avez pas spécifié de nom d\'hôte SMTP.',
   'SMTPError'            => 'L\'erreur SMTP suivante s\'est produite : {0}',
   'noSMTPAuth'           => 'Erreur : Vous devez spécifier un nom d\'utilisateur et un mot de passe SMTP.',
   'failedSMTPLogin'      => 'Échec lors de l\'envoi de la commande AUTH LOGIN. Erreur : {0}',
   'SMTPAuthUsername'     => 'Impossible d\'identifier le nom d\'utilisateur. Erreur : {0}',
   'SMTPAuthPassword'     => 'Impossible d\'identifier le mot de passe. Erreur : {0}',
   'SMTPDataFailure'      => 'Impossible d\'envoyer les données : {0}',
   'exitStatus'           => 'Code de retour : {0}',
];
