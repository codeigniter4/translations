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
    'mustBeArray'          => 'Email validation method ला array द्यावी लागते.', // 'The email validation method must be passed an array.'
    'invalidAddress'       => 'अवैध email address: "{0}"', // 'Invalid email address: "{0}"'
    'attachmentMissing'    => 'खालील email attachment सापडत नाही: "{0}"', // 'Unable to locate the following email attachment: "{0}"'
    'attachmentUnreadable' => 'हा attachment उघडता येत नाही: "{0}"', // 'Unable to open this attachment: "{0}"'
    'noFrom'               => '"From" header शिवाय mail पाठवता येत नाही.', // 'Cannot send mail with no "From" header.'
    'noRecipients'         => 'तुम्ही recipients समाविष्ट करणे आवश्यक आहे: To, Cc, किंवा Bcc', // 'You must include recipients: To, Cc, or Bcc'
    'sendFailurePHPMail'   => 'PHP mail() वापरून email पाठवता आला नाही. तुमचा server कदाचित या पद्धतीने mail पाठवण्यासाठी configured नसावा.', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.'
    'sendFailureSendmail'  => 'Sendmail वापरून email पाठवता आला नाही. तुमचा server कदाचित या पद्धतीने mail पाठवण्यासाठी configured नसावा.', // 'Unable to send email using Sendmail. Your server might not be configured to send mail using this method.'
    'sendFailureSmtp'      => 'SMTP वापरून email पाठवता आला नाही. तुमचा server कदाचित या पद्धतीने mail पाठवण्यासाठी configured नसावा.', // 'Unable to send email using SMTP. Your server might not be configured to send mail using this method.'
    'sent'                 => 'तुमचा संदेश खालील protocol वापरून यशस्वीपणे पाठवला गेला आहे: {0}', // 'Your message has been successfully sent using the following protocol: {0}'
    'noSocket'             => 'Sendmail साठी socket उघडता येत नाही. कृपया settings तपासा.', // 'Unable to open a socket to Sendmail. Please check settings.'
    'noHostname'           => 'तुम्ही SMTP hostname दिलेला नाही.', // 'You did not specify a SMTP hostname.'
    'SMTPError'            => 'खालील SMTP त्रुटी आली: {0}', // 'The following SMTP error was encountered: {0}'
    'noSMTPAuth'            => 'त्रुटी: तुम्हाला SMTP username आणि password द्यावे लागतील.', // 'Error: You must assign an SMTP username and password.'
    'invalidSMTPAuthMethod' => 'त्रुटी: SMTP authorization method "{0}" codeigniter मध्ये समर्थित नाही, "login" किंवा "plain" authorization method सेट करा', // 'Error: SMTP authorization method "{0}" is not supported in codeigniter, set either "login" or "plain" authorization method'
    'failureSMTPAuthMethod' => 'AUTH command सुरू करता आली नाही. तुमचा server कदाचित AUTH {0} authentication method वापरण्यासाठी configured नसावा.', // 'Unable to initiate AUTH command. Your server might not be configured to use AUTH {0} authentication method.'
    'SMTPAuthCredentials'   => 'User credentials authenticate करण्यात अयशस्वी. त्रुटी: {0}', // 'Failed to authenticate user credentials. Error: {0}'
    'SMTPAuthUsername'      => 'Username authenticate करण्यात अयशस्वी. त्रुटी: {0}', // 'Failed to authenticate username. Error: {0}'
    'SMTPAuthPassword'      => 'Password authenticate करण्यात अयशस्वी. त्रुटी: {0}', // 'Failed to authenticate password. Error: {0}'
    'SMTPDataFailure'       => 'Data पाठवता आला नाही: {0}', // 'Unable to send data: {0}'
    'exitStatus'            => 'प्रस्थान स्थिती कोड: {0}', // 'Exit status code: {0}'
    // @deprecated
    'failedSMTPLogin'       => 'AUTH LOGIN command पाठवण्यात अयशस्वी. त्रुटी: {0}', // 'Failed to send AUTH LOGIN command. Error: {0}'
];
