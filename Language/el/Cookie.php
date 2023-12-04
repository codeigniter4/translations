<?php

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
    'invalidExpiresTime'    => 'Μη έγκυρος τύπος "{0}" για το χαρακτηριστικό "Expires. Αναμένοταν: συμβολοσειρά, ακέραιος, αντικείμενο DateTimeInterface', // 'Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'Ο χρόνος λήξης του cookie δεν είναι έγκυρος..', // 'The cookie expiration time is not valid.',
    'invalidCookieName'     => 'Το όνομα του cookie "{0}" περιέχει μη έγκυρους χαρακτήρες.', // 'The cookie name "{0}" contains invalid characters.',
    'emptyCookieName'       => 'Το όνομα του cookie δεν μπορεί να είναι κενό.', // 'The cookie name cannot be empty.',
    'invalidSecurePrefix'   => 'Η χρήση του προθέματος "__Secure-" απαιτεί τη ρύθμιση του χαρακτηριστικού "Secure".', // 'Using the "__Secure-" prefix requires setting the "Secure" attribute.',
    'invalidHostPrefix'     => 'Η χρήση του προθέματος "__Host-" πρέπει να οριστεί με τη σημαία "Secure", δεν πρέπει να έχει χαρακτηριστικό "Domain" και το "Path" έχει οριστεί σε "/".', // 'Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".',
    'invalidSameSite'       => 'Η τιμή SameSite πρέπει να είναι None, Lax, Strict ή μια κενή συμβολοσειρά, {0} δώθηκε.', // 'The SameSite value must be None, Lax, Strict or a blank string, {0} given.',
    'invalidSameSiteNone'   => 'Η χρήση του χαρακτηριστικού "SameSite=None" απαιτεί τη ρύθμιση του χαρακτηριστικού "Secure"', // 'Using the "SameSite=None" attribute requires setting the "Secure" attribute.',
    'invalidCookieInstance' => 'Η κλάση "{0}" περίμενε ο πίνακας cookie να είναι στιγμιότυπα ( instances ) του "{1}" αλλά πήρε "{2}" στο ευρετήριο {3}.', // '"{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.',
    'unknownCookieInstance' => 'Το αντικείμενο Cookie με όνομα "{0}" και πρόθεμα "{1}" δεν βρέθηκε στη συλλογή.', // 'Cookie object with name "{0}" and prefix "{1}" was not found in the collection.',
];
