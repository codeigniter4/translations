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
    'baseCastMissing'        => '"{0}" क्लास को "CodeIgniter\Entity\Cast\BaseCast" क्लास विरासत में मिलनी चाहिए।', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'invalidCastMethod'      => '"{0}" अमान्य कास्ट विधि है, वैध विधियाँ हैं: ["get", "set"]।', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].'
    'invalidTimestamp'       => 'टाइप कास्टिंग "timestamp" के लिए एक सही टाइमस्टैम्प अपेक्षित है।', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => 'अपेक्षित नियंत्रण वर्ण मिला।', // 'Unexpected control character found.'
    'jsonErrorDepth'         => 'अधिकतम स्टैक गहराई पार हो गई।', // 'Maximum stack depth exceeded.'
    'jsonErrorStateMismatch' => 'अंडरफ्लो या मोड बेमेल हैं।', // 'Underflow or the modes mismatch.'
    'jsonErrorSyntax'        => 'सिंटैक्स त्रुटि, गलत JSON।', // 'Syntax error, malformed JSON.'
    'jsonErrorUnknown'       => 'अज्ञात त्रुटि।', // 'Unknown error.'
    'jsonErrorUtf8'          => 'गलत UTF-8 वर्ण, संभवतः गलत तरीके से एन्कोड किए गए।', // 'Malformed UTF-8 characters, possibly incorrectly encoded.'
];
