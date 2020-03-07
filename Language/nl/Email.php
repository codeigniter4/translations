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
    'mustBeArray'          => 'De email validatie-methode moet worden aangeroepen met een array.',
    'invalidAddress'       => 'Ongeldige emailadres: {0}',
    'attachmentMissing'    => 'Kon de volgende bijlage niet vinden: {0}',
    'attachmentUnreadable' => 'Kon de volgende bijlage niet openen: {0}',
    'noFrom'               => '"From" header ontbreekt, kan geen mail versturen.',
    'noRecipients'         => 'U moet minstens één geadresseerde zijn: To, Cc, or Bcc',
    'sendFailurePHPMail'   => 'Kon geen email versturen via mail(). Is uw server geconfigureerd om mails te versturen op deze methode.',
    'sendFailureSendmail'  => 'Kon geen email versturen PHP Sendmail. Is uw server geconfigureerd om mails te versturen op deze methode.',
    'sendFailureSmtp'      => 'Kon geen email versturen PHP SMTP. Is uw server geconfigureerd om mails te versturen op deze methode.',
    'sent'                 => 'Uw bericht is succesvol verstuurd met de volgende methode: {0, string}',
    'noSocket'             => 'Kon geen socket openen naar Sendmail. Gelieve uw instellingen na te kijken.',
    'noHostname'           => 'SMTP hostname is niet gespecifieerd.',
    'SMTPError'            => 'De volgende SMTP fout heeft zich voorgedaan: {0}',
    'noSMTPAuth'           => 'Fout: U moet een SMTP gebruikersnaam en wachtwoord opgeven.',
    'failedSMTPLogin'      => 'Versturen van AUTH LOGIN commando gefaald. Fout: {0}',
    'SMTPAuthUsername'     => 'Authenticatie gebruikersnaam gefaald. Fout: {0}',
    'SMTPAuthPassword'     => 'Authenticatie wachtwoord gefaald. Fout: {0}',
    'SMTPDataFailure'      => 'Kon geen data versturen: {0}',
    'exitStatus'           => 'Exit status code: {0}',
];
