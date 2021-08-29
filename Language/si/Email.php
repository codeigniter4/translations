<?php

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
    'mustBeArray'          => 'ඊමේල් validation method එක සඳහා array එකක් pass කළ යුතුය.', // The email validation method must be passed an array.
    'invalidAddress'       => 'අවලංගු ඊමේල් ලිපිනයකි: {0}', // Invalid email address: {0}
    'attachmentMissing'    => 'මෙම විද්‍යුත් තැපැල් ඇමුණුම සොයාගත නොහැක: {0}', // Unable to locate the following email attachment: {0}
    'attachmentUnreadable' => 'මෙම ඇමුණුම විවෘත කළ නොහැක: {0}', // Unable to open this attachment: {0}
    'noFrom'               => '"From" header එකක් නොමැතිව ඊමේල් යැවිය නොහැක.', // Cannot send mail with no "From" header.
    'noRecipients'         => 'ඔබ ලබන්නන් ඇතුළත් කළ යුතුය: To, Cc, හෝ Bcc', // You must include recipients: To, Cc, or Bcc
    'sendFailurePHPMail'   => 'PHP mail() මඟින් විද්‍යුත් තැපැල් යැවිය නොහැක. මෙම ක්‍රමය භාවිතා කර තැපැල් යැවීමට ඔබේ server එක configure කර නොතිබිය හැකිය.', // Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.
    'sendFailureSendmail'  => 'PHP Sendmail මඟින් විද්‍යුත් තැපැල් යැවිය නොහැක. මෙම ක්‍රමය භාවිතා කර තැපැල් යැවීමට ඔබේ server එක configure කර නොතිබිය හැකිය.', // Unable to send email using PHP Sendmail. Your server might not be configured to send mail using this method.
    'sendFailureSmtp'      => 'PHP SMTP මඟින් විද්‍යුත් තැපැල් යැවිය නොහැක. මෙම ක්‍රමය භාවිතා කර තැපැල් යැවීමට ඔබේ server එක configure කර නොතිබිය හැකිය.', // Unable to send email using PHP SMTP. Your server might not be configured to send mail using this method.
    'sent'                 => 'මෙම ප්‍රොටෝකෝලය භාවිතයෙන් ඔබේ පණිවිඩය සාර්ථකව යවා ඇත: {0}', // Your message has been successfully sent using the following protocol: {0}
    'noSocket'             => 'Sendmail වෙත සොකට් එකක් විවෘත කළ නොහැක. කරුණාකර settings පරීක්ෂා කරන්න.', // Unable to open a socket to Sendmail. Please check settings.
    'noHostname'           => 'ඔබ SMTP hostname එකක් සඳහන් කර නැත.', // You did not specify a SMTP hostname.
    'SMTPError'            => 'මෙම SMTP දෝෂය හමු විය: {0}', // The following SMTP error was encountered: {0}
    'noSMTPAuth'           => 'දෝෂය: ඔබ SMTP පරිශීලක නාමයක් සහ මුරපදයක් ලබා දිය යුතුය.', // Error: You must assign a SMTP username and password.
    'failedSMTPLogin'      => 'AUTH LOGIN විධානය යැවීමට අපොහොසත් විය. දෝෂය: {0}', // Failed to send AUTH LOGIN command. Error: {0}
    'SMTPAuthUsername'     => 'පරිශීලක නාමය authenticate කිරීමට අපොහොසත් විය. දෝෂය: {0}', // Failed to authenticate username. Error: {0}
    'SMTPAuthPassword'     => 'මුරපදය authenticate කිරීමට අපොහොසත් විය. දෝෂය: {0}', // Failed to authenticate password. Error: {0}
    'SMTPDataFailure'      => 'දත්ත යැවිය නොහැක: {0}', // Unable to send data: {0}
    'exitStatus'           => 'පිටවන status code එක: {0}', // Exit status code: {0}
];
