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
    'invalidExpiresTime'    => '"Expires" એટ્રિબ્યુટ માટે અમાન્ય "{0}" પ્રકાર. અપેક્ષિત: સ્ટ્રિંગ, પૂર્ણાંક, DateTimeInterface ઑબ્જેક્ટ.', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.'
    'invalidExpiresValue'   => 'કૂકીની સમાપ્તિનો સમય અમાન્ય છે.', // 'The cookie expiration time is not valid.'
    'invalidCookieName'     => 'કૂકીના નામ "{0}" માં અમાન્ય અક્ષરો છે.', // 'The cookie name "{0}" contains invalid characters.'
    'emptyCookieName'       => 'કૂકીનું નામ ખાલી ન હોઈ શકે.', // 'The cookie name cannot be empty.'
    'invalidSecurePrefix'   => '"__Secure-" ઉપસર્ગનો ઉપયોગ કરવા માટે "Secure" એટ્રિબ્યુટ સેટ કરવું જરૂરી છે.', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.'
    'invalidHostPrefix'     => '"__Host-" ઉપસર્ગનો ઉપયોગ "Secure" ફ્લેગ સાથે સેટ કરવો જોઈએ, તેમાં "Domain" એટ્રિબ્યુટ ન હોવું જોઈએ, અને "Path" "/" પર સેટ હોવો જોઈએ.', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".'
    'invalidSameSite'       => 'SameSite મૂલ્ય None, Lax, Strict અથવા ખાલી સ્ટ્રિંગ હોવું જોઈએ, {0} આપેલ છે.', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.'
    'invalidSameSiteNone'   => '"SameSite=None" એટ્રિબ્યુટનો ઉપયોગ કરવા માટે "Secure" એટ્રિબ્યુટ સેટ કરવું જરૂરી છે.', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.'
    'invalidCookieInstance' => '"{0}" ક્લાસને કૂકીઝ એરે "{1}" ના ઇન્સ્ટન્સ હોવાની અપેક્ષા હતી પરંતુ ઇન્ડેક્સ {3} પર "{2}" મળ્યું.', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.'
    'unknownCookieInstance' => 'નામ "{0}" અને ઉપસર્ગ "{1}" સાથેનો કૂકી ઑબ્જેક્ટ સંગ્રહમાં મળ્યો નથી.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.'
];
