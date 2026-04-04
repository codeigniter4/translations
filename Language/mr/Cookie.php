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
    'invalidExpiresTime'    => '"Expires" attribute साठी "{0}" प्रकार अवैध आहे. अपेक्षित: string, integer, DateTimeInterface object.', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.'
    'invalidExpiresValue'   => 'कुकीची expiration time वैध नाही.', // 'The cookie expiration time is not valid.'
    'invalidCookieName'     => 'कुकी नाव "{0}" मध्ये अवैध अक्षरे आहेत.', // 'The cookie name "{0}" contains invalid characters.'
    'emptyCookieName'       => 'कुकीचे नाव रिकामे असू शकत नाही.', // 'The cookie name cannot be empty.'
    'invalidSecurePrefix'   => '"__Secure-" prefix वापरण्यासाठी "Secure" attribute सेट केलेला असणे आवश्यक आहे.', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.'
    'invalidHostPrefix'     => '"__Host-" prefix वापरताना "Secure" flag सेट असणे आवश्यक आहे, "Domain" attribute नसावा, आणि "Path" "/" असावा.', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".'
    'invalidSameSite'       => 'SameSite चे मूल्य None, Lax, Strict किंवा रिकामी string असणे आवश्यक आहे, {0} दिले आहे.', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.'
    'invalidSameSiteNone'   => '"SameSite=None" attribute वापरण्यासाठी "Secure" attribute सेट केलेला असणे आवश्यक आहे.', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.'
    'invalidCookieInstance' => '"{0}" क्लासमध्ये cookies array मधील घटक "{1}" चे instances अपेक्षित होते, पण index {3} वर "{2}" मिळाले.', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.'
    'unknownCookieInstance' => '"{0}" नाव आणि "{1}" prefix असलेला Cookie object collection मध्ये सापडला नाही.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.'
];
