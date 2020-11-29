<?php

/**
 * Email language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     Mattias Sandström
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'Valideringsmetoden för epost måste vara en array.',
   'invalidAddress'       => 'Ogiltig epostadress: {0}',
   'attachmentMissing'    => 'Kan inte hitta epostbilagan: {0}',
   'attachmentUnreadable' => 'Kan inte öppna epostbilagan: {0}',
   'noFrom'               => 'Kan inte skicka meddelandet utan "From" angivet.',
   'noRecipients'         => 'Mottagare måste anges: To, Cc, or Bcc',
   'sendFailurePHPMail'   => 'Kan inte skicka epost med PHP mail(). Servern verkar inte vara konfigurerad för att skicka epost med denna metod.',
   'sendFailureSendmail'  => 'Kan inte skicka epost med PHP Sendmail. Servern verkar inte vara konfigurerad för att skicka epost med denna metod.',
   'sendFailureSmtp'      => 'Kan inte skicka epost med PHP SMTP. Servern verkar inte vara konfigurerad för att skicka epost med denna metod.',
   'sent'                 => 'Meddelandet kunde skickas med detta protokoll: {0}',
   'noSocket'             => 'Kunde inte öppna en anslutning till Sendmail. Kontrollera inställningarna.',
   'noHostname'           => 'Inget hostname för SMTP är angivet.',
   'SMTPError'            => 'Följande SMTP fel inträffade: {0}',
   'noSMTPAuth'           => 'Fel: SMTP användarnamn och lösenord måste anges.',
   'failedSMTPLogin'      => 'Kunde inte skicka AUTH LOGIN kommandot. Fel: {0}',
   'SMTPAuthUsername'     => 'Kunde inte verifiera användarnamnet. Fel: {0}',
   'SMTPAuthPassword'     => 'Kunde inte verifiera lösenordet. Fel: {0}',
   'SMTPDataFailure'      => 'Kunde inte skicka data: {0}',
   'exitStatus'           => 'Resultat: {0}',
];
