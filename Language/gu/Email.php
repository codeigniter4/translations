<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'ઈમેલ વેલિડેશન મેથડને એરે પાસ થવી જોઈએ.', // 'The email validation method must be passed an array.'
    'invalidAddress'       => 'અમાન્ય ઇમેઇલ સરનામું: "{0}"', // 'Invalid email address: "{0}"'
    'attachmentMissing'    => 'નીચેના ઇમેઇલ જોડાણ શોધી શકાતું નથી: "{0}"', // 'Unable to locate the following email attachment: "{0}"'
    'attachmentUnreadable' => 'આ જોડાણ ખોલી શકાતું નથી: "{0}"', // 'Unable to open this attachment: "{0}"'
    'noFrom'               => '"From" હેડર વિના મેઇલ મોકલી શકાતો નથી.', // 'Cannot send mail with no "From" header.'
    'noRecipients'         => 'તમારે પ્રાપ્તકર્તાઓનો સમાવેશ કરવો આવશ્યક છે: To, Cc, અથવા Bcc', // 'You must include recipients: To, Cc, or Bcc'
    'sendFailurePHPMail'   => 'PHP mail() નો ઉપયોગ કરીને ઇમેઇલ મોકલવામાં અસમર્થ. તમારું સર્વર આ પદ્ધતિનો ઉપયોગ કરીને મેઇલ મોકલવા માટે ગોઠવેલું ન હોઈ શકે.', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.'
    'sendFailureSendmail'  => 'Sendmail નો ઉપયોગ કરીને ઇમેઇલ મોકલવામાં અસમર્થ. તમારું સર્વર આ પદ્ધતિનો ઉપયોગ કરીને મેઇલ મોકલવા માટે ગોઠવેલું ન હોઈ શકે.', // 'Unable to send email using Sendmail. Your server might not be configured to send mail using this method.'
    'sendFailureSmtp'      => 'SMTP નો ઉપયોગ કરીને ઇમેઇલ મોકલવામાં અસમર્થ. તમારું સર્વર આ પદ્ધતિનો ઉપયોગ કરીને મેઇલ મોકલવા માટે ગોઠવેલું ન હોઈ શકે.', // 'Unable to send email using SMTP. Your server might not be configured to send mail using this method.'
    'sent'                 => 'તમારો સંદેશ નીચેના પ્રોટોકોલનો ઉપયોગ કરીને સફળતાપૂર્વક મોકલવામાં આવ્યો છે: {0}', // 'Your message has been successfully sent using the following protocol: {0}'
    'noSocket'             => 'Sendmail પર સોકેટ ખોલી શકાતું નથી. કૃપા કરીને સેટિંગ્સ તપાસો.', // 'Unable to open a socket to Sendmail. Please check settings.'
    'noHostname'           => 'તમે SMTP હોસ્ટનામ સ્પષ્ટ કર્યું નથી.', // 'You did not specify a SMTP hostname.'
    'SMTPError'            => 'નીચેનો SMTP ભૂલ આવી: {0}', // 'The following SMTP error was encountered: {0}'
    'noSMTPAuth'           => 'ભૂલ: તમારે SMTP યુઝરનેમ અને પાસવર્ડ સોંપવો આવશ્યક છે.', // 'Error: You must assign an SMTP username and password.'
    'failedSMTPLogin'      => 'AUTH LOGIN કમાન્ડ મોકલવામાં નિષ્ફળ. ભૂલ: {0}', // 'Failed to send AUTH LOGIN command. Error: {0}'
    'SMTPAuthUsername'     => 'યુઝરનેમ પ્રમાણિત કરવામાં નિષ્ફળ. ભૂલ: {0}', // 'Failed to authenticate username. Error: {0}'
    'SMTPAuthPassword'     => 'પાસવર્ડ પ્રમાણિત કરવામાં નિષ્ફળ. ભૂલ: {0}', // 'Failed to authenticate password. Error: {0}'
    'SMTPDataFailure'      => 'ડેટા મોકલવામાં અસમર્થ: {0}', // 'Unable to send data: {0}'
    'exitStatus'           => 'એક્ઝિટ સ્ટેટસ કોડ: {0}', // 'Exit status code: {0}'
];
