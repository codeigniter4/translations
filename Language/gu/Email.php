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
    'mustBeArray'          => 'ઈમેલ વેલિડેશન મેથડને એરે પાસ થવી જોઈએ.',
    'invalidAddress'       => 'અમાન્ય ઇમેઇલ સરનામું: "{0}"',
    'attachmentMissing'    => 'નીચેના ઇમેઇલ જોડાણ શોધી શકાતું નથી: "{0}"',
    'attachmentUnreadable' => 'આ જોડાણ ખોલી શકાતું નથી: "{0}"',
    'noFrom'               => '"From" હેડર વિના મેઇલ મોકલી શકાતો નથી.',
    'noRecipients'         => 'તમારે પ્રાપ્તકર્તાઓનો સમાવેશ કરવો આવશ્યક છે: To, Cc, અથવા Bcc',
    'sendFailurePHPMail'   => 'PHP mail() નો ઉપયોગ કરીને ઇમેઇલ મોકલવામાં અસમર્થ. તમારું સર્વર આ પદ્ધતિનો ઉપયોગ કરીને મેઇલ મોકલવા માટે ગોઠવેલું ન હોઈ શકે.',
    'sendFailureSendmail'  => 'Sendmail નો ઉપયોગ કરીને ઇમેઇલ મોકલવામાં અસમર્થ. તમારું સર્વર આ પદ્ધતિનો ઉપયોગ કરીને મેઇલ મોકલવા માટે ગોઠવેલું ન હોઈ શકે.',
    'sendFailureSmtp'      => 'SMTP નો ઉપયોગ કરીને ઇમેઇલ મોકલવામાં અસમર્થ. તમારું સર્વર આ પદ્ધતિનો ઉપયોગ કરીને મેઇલ મોકલવા માટે ગોઠવેલું ન હોઈ શકે.',
    'sent'                 => 'તમારો સંદેશ નીચેના પ્રોટોકોલનો ઉપયોગ કરીને સફળતાપૂર્વક મોકલવામાં આવ્યો છે: {0}',
    'noSocket'             => 'Sendmail પર સોકેટ ખોલી શકાતું નથી. કૃપા કરીને સેટિંગ્સ તપાસો.',
    'noHostname'           => 'તમે SMTP હોસ્ટનામ સ્પષ્ટ કર્યું નથી.',
    'SMTPError'            => 'નીચેનો SMTP ભૂલ આવી: {0}',
    'noSMTPAuth'           => 'ભૂલ: તમારે SMTP યુઝરનેમ અને પાસવર્ડ સોંપવો આવશ્યક છે.',
    'failedSMTPLogin'      => 'AUTH LOGIN કમાન્ડ મોકલવામાં નિષ્ફળ. ભૂલ: {0}',
    'SMTPAuthUsername'     => 'યુઝરનેમ પ્રમાણિત કરવામાં નિષ્ફળ. ભૂલ: {0}',
    'SMTPAuthPassword'     => 'પાસવર્ડ પ્રમાણિત કરવામાં નિષ્ફળ. ભૂલ: {0}',
    'SMTPDataFailure'      => 'ડેટા મોકલવામાં અસમર્થ: {0}',
    'exitStatus'           => 'એક્ઝિટ સ્ટેટસ કોડ: {0}',
];
