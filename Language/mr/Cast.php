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
    'baseCastMissing'        => '"{0}" क्लासने "CodeIgniter\Entity\Cast\BaseCast" क्लास inherit केलेली असणे आवश्यक आहे.', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'enumInvalidCaseName'    => 'enum "{1}" साठी case नाव "{0}" अवैध आहे.', // 'Invalid case name "{0}" for enum "{1}".'
    'enumInvalidType'        => '"{1}" प्रकारचा enum अपेक्षित होता, पण "{0}" मिळाला.', // 'Expected enum of type "{1}", but received "{0}".'
    'enumInvalidValue'       => 'enum "{0}" साठी मूल्य "{1}" अवैध आहे.', // 'Invalid value "{1}" for enum "{0}".'
    'enumMissingClass'       => 'enum casting साठी enum class दिलेली असणे आवश्यक आहे.', // 'Enum class must be specified for enum casting.'
    'enumNotEnum'            => '"{0}" ही वैध enum class नाही.', // 'The "{0}" is not a valid enum class.'
    'invalidCastMethod'      => '"{0}" ही वैध cast method नाही, वैध methods या आहेत: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].'
    'invalidTimestamp'       => '"timestamp" प्रकाराच्या type casting साठी योग्य timestamp अपेक्षित आहे.', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => 'अनपेक्षित control character आढळला.', // 'Unexpected control character found.'
    'jsonErrorDepth'         => 'कमाल stack depth ओलांडली गेली.', // 'Maximum stack depth exceeded.'
    'jsonErrorStateMismatch' => 'Underflow किंवा modes मध्ये विसंगती आहे.', // 'Underflow or the modes mismatch.'
    'jsonErrorSyntax'        => 'Syntax error, JSON चुकीचा बनलेला आहे.', // 'Syntax error, malformed JSON.'
    'jsonErrorUnknown'       => 'अज्ञात त्रुटी.', // 'Unknown error.'
    'jsonErrorUtf8'          => 'चुकीचे UTF-8 अक्षर आढळले, कदाचित चुकीचे encoding झाले आहे.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.'
];
