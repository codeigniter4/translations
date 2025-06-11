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

// Cookie language settings
return [
    'invalidExpiresTime'    => '"Expires" एट्रिब्यूट के लिए अमान्य "{0}" प्रकार। अपेक्षित: स्ट्रिंग, पूर्णांक, DateTimeInterface ऑब्जेक्ट।',
    'invalidExpiresValue'   => 'कुकी की समाप्ति का समय मान्य नहीं है।',
    'invalidCookieName'     => 'कुकी नाम "{0}" में अमान्य वर्ण हैं।',
    'emptyCookieName'       => 'कुकी का नाम खाली नहीं हो सकता।',
    'invalidSecurePrefix'   => '"__Secure-" प्रीफिक्स का उपयोग करने के लिए "Secure" एट्रिब्यूट सेट करना आवश्यक है।',
    'invalidHostPrefix'     => '"__Host-" प्रीफिक्स को "Secure" फ़्लैग के साथ सेट किया जाना चाहिए, इसमें "Domain" एट्रिब्यूट नहीं होना चाहिए, और "Path" को "/" पर सेट किया जाना चाहिए।',
    'invalidSameSite'       => 'SameSite मान None, Lax, Strict या एक खाली स्ट्रिंग होना चाहिए, {0} दिया गया है।',
    'invalidSameSiteNone'   => '"SameSite=None" एट्रिब्यूट का उपयोग करने के लिए "Secure" एट्रिब्यूट सेट करना आवश्यक है।',
    'invalidCookieInstance' => '"{0}" क्लास के लिए कुकीज़ सरणी "{1}" के इंस्टेंस होने की उम्मीद थी, लेकिन इंडेक्स {3} पर "{2}" मिला।',
    'unknownCookieInstance' => 'नाम "{0}" और प्रीफिक्स "{1}" वाला कुकी ऑब्जेक्ट कलेक्शन में नहीं मिला।',
];
