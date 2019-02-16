<?php

/**
 * Email language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */
return [
	'mustBeArray'          => 'Metoda weryfikacji e-maila musi być przekazana w tablicy.',
	'invalidAddress'       => 'Niepoprawny adres e-mail: {0}',
	'attachmentMissing'    => 'Nie można zlokalizować następujących załączników: {0}',
	'attachmentUnreadable' => 'Nie można otworzyć następujących załączników: {0}',
	'noFrom'               => 'Nie można wysłać wiadomości bez nagłówka "From".',
	'noRecipients'         => 'Należy dodać odbiorców: To, Cc lub Bcc',
	'sendFailurePHPMail'   => 'Nie można wysłać e-maila za pomocą PHP mail(). Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
	'sendFailureSendmail'  => 'Nie można wysłać e-maila za pomocą PHP Sendmail. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
	'sendFailureSmtp'      => 'Nie można wysłać e-maila za pomoc PHP SMTP. Twój serwer może nie być skonfigurowany by wysyłać e-maile za pomocą tej metody.',
	'sent'                 => 'Twój e-mail został pomyślnie wysłany za pomocą metody: {0, string}',
	'noSocket'             => 'Nie można otworzyć socketu do Sendmail. Proszę sprawdzić ustawienia.',
	'noHostname'           => 'Nie podano nazwy hosta SMTP.',
	'SMTPError'            => 'Wystąpił następujący błąd SMTP: {0}',
	'noSMTPAuth'           => 'Błąd: Należy podać nazwę użytkownika i hasło SMTP.',
	'failedSMTPLogin'      => 'Błąd przy wysyłaniu komendy AUTH LOGIN. Błąd: {0}',
	'SMTPAuthUsername'     => 'Błąd autentykacji nazwy użytkownika. Błąd: {0}',
	'SMTPAuthPassword'     => 'Błąd autentykacji hasła. Błąd: {0}',
	'SMTPDataFailure'      => 'Nie można wysłać danych: {0}',
	'exitStatus'           => 'Status kodu wyjścia: {0}',
];
