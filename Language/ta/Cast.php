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

// Cast language settings
return [
    'baseCastMissing'        => 'வகுப்பு "{0}" கண்டிப்பாக "CodeIgniter\Entity\Cast\BaseCast" வகுப்பினை inherit செய்திருக்க வேண்டும்', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.',
    'invalidCastMethod'      => '"{0}" தவறான வார்ப்பு முறை, சரியான முறைகள்: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].',
    'invalidTimestamp'       => 'வார்ப்பு வகை "timestamp" சரியான நேர முத்திரையை எதிர்பார்க்கிறது.', // 'Type casting "timestamp" expects a correct timestamp.',
    'jsonErrorCtrlChar'      => 'எதிர்பாராத கட்டுப்பாட்டு எழுத்து கண்டறியப்பட்டது.', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'அதிகபட்ச அடுக்கு ஆழம் தாண்டியது.', // 'Maximum stack depth exceeded.',
    'jsonErrorStateMismatch' => 'கீழ் (Underflow) அல்லது பயன்முறைகள் பொருந்தவில்லை.', // 'Underflow or the modes mismatch.',
    'jsonErrorSyntax'        => 'தொடரியல் பிழை, தவறான JSON வடிவம்.', // 'Syntax error, malformed JSON.',
    'jsonErrorUnknown'       => 'அறியப்படாத பிழை.', // 'Unknown error.',
    'jsonErrorUtf8'          => 'தவறான UTF-8 எழுத்துக்கள், தவறாக குறியிடப்பட்டதாக இருக்கலாம்.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.',
];
