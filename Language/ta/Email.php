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
    'mustBeArray'          => 'மின்னஞ்சல் சரிபார்ப்பு முறை ஒரு வரிசைக்கு அனுப்பப்பட வேண்டும்.',
    'invalidAddress'       => 'தவறான மின்னஞ்சல் முகவரி: "{0}"',
    'attachmentMissing'    => 'பின்வரும் மின்னஞ்சல் இணைப்பைக் கண்டறிய முடியவில்லை: "{0}"',
    'attachmentUnreadable' => 'இந்த இணைப்பை திறக்க முடியவில்லை: "{0}"',
    'noFrom'               => '"அனுப்புனர்" என்ற தலைப்பு இல்லாமல் மின்னஞ்சலை அனுப்ப முடியாது.',
    'noRecipients'         => 'பெறுநர்களை நீங்கள் சேர்க்க வேண்டும்: To, Cc அல்லது Bcc',
    'sendFailurePHPMail'   => 'PHP mail() ஐப் பயன்படுத்தி மின்னஞ்சலை அனுப்ப முடியவில்லை. இந்த முறையைப் பயன்படுத்தி அஞ்சல் அனுப்ப உங்கள் சேவையகம் (server) உள்ளமைக்கப்படாமல் இருக்கலாம்.',
    'sendFailureSendmail'  => 'Sendmail ஐப் பயன்படுத்தி மின்னஞ்சல் அனுப்ப முடியவில்லை. இந்த முறையைப் பயன்படுத்தி அஞ்சல் அனுப்ப உங்கள் சர்வர் உள்ளமைக்கப்படாமல் இருக்கலாம்.',
    'sendFailureSmtp'      => 'SMTP ஐப் பயன்படுத்தி மின்னஞ்சல் அனுப்ப முடியவில்லை. இந்த முறையைப் பயன்படுத்தி அஞ்சல் அனுப்ப உங்கள் சர்வர் உள்ளமைக்கப்படாமல் இருக்கலாம்.',
    'sent'                 => 'பின்வரும் நெறிமுறையைப் (protocol) பயன்படுத்தி உங்கள் செய்தி வெற்றிகரமாக அனுப்பப்பட்டது: {0}',
    'noSocket'             => 'Sendmailகாக Socket ஐ திறக்க முடியவில்லை. அமைப்புகளைச் சரிபார்க்கவும்.',
    'noHostname'           => 'நீங்கள் SMTP Host பெயரை குறிப்பிடவில்லை.',
    'SMTPError'            => 'பின்வரும் SMTP பிழை ஏற்பட்டது: {0}',
    'noSMTPAuth'           => 'பிழை: நீங்கள் SMTP பயனர்பெயர் மற்றும் கடவுச்சொல்லை ஒதுக்க (assign) வேண்டும்.',
    'failedSMTPLogin'      => 'AUTH LOGIN கட்டளையை அனுப்புவதில் தோல்வி. பிழை: {0}',
    'SMTPAuthUsername'     => 'பயனர்பெயரை அங்கீகரிப்பதில் தோல்வி. பிழை: {0}',
    'SMTPAuthPassword'     => 'கடவுச்சொல்லை அங்கீகரிப்பதில் தோல்வி. பிழை: {0}',
    'SMTPDataFailure'      => 'தரவை அனுப்ப முடியவில்லை: {0}',
    'exitStatus'           => 'நிலைக் குறியீட்டிலிருந்து வெளியேறு: {0}',
];
