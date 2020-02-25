<?php
/**
 * Email language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'Il metodo di validazione della email deve essere passato come array.',
   'invalidAddress'       => 'Indirizzo email non valido: {0}',
   'attachmentMissing'    => 'Non è possibile trovare il seguente allegato nella mail: {0}',
   'attachmentUnreadable' => 'Impossibile aprire questo allegato: {0}',
   'noFrom'               => 'Non si può inviare una mail senza l\'header "From".',
   'noRecipients'         => 'Devi inserire i destinatari: To, Cc, o Bcc',
   'sendFailurePHPMail'   => 'Impossibile inviare mail tramite PHP mail(). Il tuo server potrebbe non essere configurato per inviare mail con questo metodo.',
   'sendFailureSendmail'  => 'Impossibile inviare mail tramite PHP Sendmail. Il tuo server potrebbe non essere configurato per inviare mail con questo metodo.',
   'sendFailureSmtp'      => 'Impossibile inviare mail tramite PHP SMTP. Il tuo server potrebbe non essere configurato per inviare mail con questo metodo.',
   'sent'                 => 'Il tuo messaggio è stato inviato con successo utilizzando il seguente protocollo: {0, string}',
   'noSocket'             => 'Non è possibile aprire un socket verso Sendmail. Controllare le impostazioni.',
   'noHostname'           => 'Non è stato specificato alcun hostname SMTP.',
   'SMTPError'            => 'Si è verificato il seguente errore SMTP: {0}',
   'noSMTPAuth'           => 'Errore: Devi assegnare username e password per l\autenticazione SMTP.',
   'failedSMTPLogin'      => 'Fallito l\'invio del comando AUTH LOGIN. Errore: {0}',
   'SMTPAuthUsername'     => 'Fallita l\'autenticazione username. Errore: {0}',
   'SMTPAuthPassword'     => 'Fallita l\'autenticazione password. Errore: {0}',
   'SMTPDataFailure'      => 'Impossibile inviare i dati: {0}',
   'exitStatus'           => 'Codice dello stato di uscita: {0}',
];
