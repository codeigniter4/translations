<?php
/**
 * Email language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'De e-mailvalidatiemethode moet een array als input krijgen.',
   'invalidAddress'       => 'Ongeldig e-mailadres: {0}',
   'attachmentMissing'    => 'Kan de volgende bijlage niet vinden: {0}',
   'attachmentUnreadable' => 'Kan de volgende bijlage niet openen: {0}',
   'noFrom'               => 'Kan geen e-mail sturen zonder "From"-header.',
   'noRecipients'         => 'U moet geaddresseerden toevoegen: To, Cc, of Bcc',
   'sendFailurePHPMail'   => 'Kan de e-mail niet versturen met PHP mail(). Wellicht is uw server niet ingesteld om via deze methode e-mail te versturen.',
   'sendFailureSendmail'  => 'Kan de e-mail niet versturen met PHP Sendmail. Wellicht is uw server niet ingesteld om via deze methode e-mail te versturen.',
   'sendFailureSmtp'      => 'Kan de e-mail niet versturen met PHP SMTP. Wellicht is uw server niet ingesteld om via deze methode e-mail te versturen.',
   'sent'                 => 'Uw bericht is succesvol verstuurd met het volgende protocol: {0, string}',
   'noSocket'             => 'Kan geen socket openen naar Sendmail. Check alstublieft de settings.',
   'noHostname'           => 'U heeft geen SMTP hostname gespecificeerd.',
   'SMTPError'            => 'De volgende SMTP error is opgetreden: {0}',
   'noSMTPAuth'           => 'Error: U moet een SMTP-gebruikersnaam en -wachtwoord opgeven.',
   'failedSMTPLogin'      => 'Kon AUTH LOGIN command niet versturen. Error: {0}',
   'SMTPAuthUsername'     => 'Kon gebruikersnaam niet authentiseren. Error: {0}',
   'SMTPAuthPassword'     => 'Kon wachtwoord niet authentiseren. Error: {0}',
   'SMTPDataFailure'      => 'Kon data niet versturen: {0}',
   'exitStatus'           => 'Exit status code: {0}',
];
