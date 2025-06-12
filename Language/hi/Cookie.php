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
    'invalidExpiresTime'    => '"Expires" एट्रिब्यूट के लिए अमान्य "{0}" प्रकार। अपेक्षित: स्ट्रिंग, पूर्णांक, DateTimeInterface ऑब्जेक्ट।', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.'
    'invalidExpiresValue'   => 'कुकी की समाप्ति का समय मान्य नहीं है।', // 'The cookie expiration time is not valid.'
    'invalidCookieName'     => 'कुकी नाम "{0}" में अमान्य वर्ण हैं।', // 'The cookie name "{0}" contains invalid characters.'
    'emptyCookieName'       => 'कुकी का नाम खाली नहीं हो सकता।', // 'The cookie name cannot be empty.'
    'invalidSecurePrefix'   => '"__Secure-" प्रीफिक्स का उपयोग करने के लिए "Secure" एट्रिब्यूट सेट करना आवश्यक है।', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.'
    'invalidHostPrefix'     => '"__Host-" प्रीफिक्स को "Secure" फ़्लैग के साथ सेट किया जाना चाहिए, इसमें "Domain" एट्रिब्यूट नहीं होना चाहिए, और "Path" को "/" पर सेट किया जाना चाहिए।', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".'
    'invalidSameSite'       => 'SameSite मान None, Lax, Strict या एक खाली स्ट्रिंग होना चाहिए, {0} दिया गया है।', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.'
    'invalidSameSiteNone'   => '"SameSite=None" एट्रिब्यूट का उपयोग करने के लिए "Secure" एट्रिब्यूट सेट करना आवश्यक है।', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.'
    'invalidCookieInstance' => '"{0}" क्लास के लिए कुकीज़ सरणी "{1}" के इंस्टेंस होने की उम्मीद थी, लेकिन इंडेक्स {3} पर "{2}" मिला।', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.'
    'unknownCookieInstance' => 'नाम "{0}" और प्रीफिक्स "{1}" वाला कुकी ऑब्जेक्ट कलेक्शन में नहीं मिला।', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.'
];
