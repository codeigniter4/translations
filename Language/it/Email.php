<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'Il metodo di validazione della email deve essere passato come array.',
	'invalidAddress'       => 'Indirizzo email non valido: {0}',
	'attachmentMissing'    => 'Non è stato possibile trovare il seguente allegato alla email: {0}',
	'attachmentUnreadable' => 'Impossibile aprire questo allegato: {0}',
	'noFrom'               => 'Non si può inviare una mail senza "Da" nella intestazione.',
	'noRecipients'         => 'Devi inserire i destinatari: A, Cc, o Ccn',
	'sendFailurePHPMail'   => 'Impossibile inviare email usando PHP mail(). Il tuo server potrebbe non essere configurato per inviare email usando questo metodo.',
	'sendFailureSendmail'  => 'Impossibile inviare email usando PHP Sendmail. Il tuo server potrebbe non essere configurato per inviare email usando questo metodo.',
	'sendFailureSmtp'      => 'Impossibile inviare email usando PHP SMTP. Il tuo server potrebbe non essere configurato per inviare email usando questo metodo.',
	'sent'                 => 'Il tuo messaggio è stato inviato con successo utilizzando il seguente protocollo: {0}',
	'noSocket'             => 'Non possibile aprire un socket a Sendmail. Prego verifica le configurazioni.',
	'noHostname'           => 'Non hai specificato alcun hostname SMTP.',
	'SMTPError'            => 'Si è verificato il seguente errore SMTP: {0}',
	'noSMTPAuth'           => 'Errore: devi indicare uno username e una password per SMTP.',
	'failedSMTPLogin'      => 'Fallito l\'invio del comando AUTH LOGIN. Errore: {0}',
	'SMTPAuthUsername'     => 'Fallita l\'autenticazione dello username. Errore: {0}',
	'SMTPAuthPassword'     => 'Fallita l\'autenticazione della password. Errore: {0}',
	'SMTPDataFailure'      => 'Impossibile inviare i dati: {0}',
	'exitStatus'           => 'Codice dello stato di uscita: {0}',
];
