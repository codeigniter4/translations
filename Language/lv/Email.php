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
 * @author     Dāvis Lasis <davis.lasis@gmail.com>
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'mustBeArray'          => 'E-pasta validācijas metodei ir jānodod masīvs.',
   'invalidAddress'       => 'Nederīga e-pasta adrese: {0}',
   'attachmentMissing'    => 'Nevar atrast šo e-pasta pielikumu: {0}',
   'attachmentUnreadable' => 'Nevar atvērt šo e-pasta pielikumu: {0}',
   'noFrom'               => 'Nevar nosūtīt e-pastu bez galvenes `From`.',
   'noRecipients'         => 'Jums ir jāiekļauj adresāti: `To`, `Cc` vai `Bcc`',
   'sendFailurePHPMail'   => 'Nevar nosūtīt e-pastu, izmantojot PHP mail() funkciju. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.',
   'sendFailureSendmail'  => 'Nevar nosūtīt e-pastu, izmantojot PHP Sendmail metodi. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.',
   'sendFailureSmtp'      => 'Nevar nosūtīt e-pastu, izmantojot PHP SMTP metodi. Iespējams, ka jūsu serveris nav konfigurēts, lai izmantotu šo metodi.',
   'sent'                 => 'Jūsu ziņojums ir veiksmīgi nosūtīts, izmantojot šo protokolu: {0}',
   'noSocket'             => 'Nevar atvērt soketu priekš Sendmail. Lūdzu, pārbaudiet iestatījumus.',
   'noHostname'           => 'Jūs nenorādījāt SMTP hosta nosaukumu.',
   'SMTPError'            => 'Tika konstatēta šāda SMTP kļūda: {0}',
   'noSMTPAuth'           => 'Kļūda: jums jānorāda SMTP lietotājvārds un parole.',
   'failedSMTPLogin'      => 'Neizdevās nosūtīt komandu AUTH LOGIN. Kļūda: {0}',
   'SMTPAuthUsername'     => 'Neizdevās autentificēt lietotājvārdu. Kļūda: {0}',
   'SMTPAuthPassword'     => 'Neizdevās autentificēt paroli. Kļūda: {0}',
   'SMTPDataFailure'      => 'Nevar nosūtīt datus: {0}',
   'exitStatus'           => 'Izejas statusa kods: {0}',
];
