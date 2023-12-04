<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'Το CURL πρέπει να είναι ενεργοποιημένο για να χρησιμοποιηθεί η κλάση CURLRequest.', // 'CURL must be enabled to use the CURLRequest class.',
    'invalidSSLKey'   => 'Δεν είναι δυνατός ο ορισμός του κλειδιού SSL. Το "{0}" δεν είναι έγκυρο αρχείο..', // 'Cannot set SSL Key. "{0}" is not a valid file.',
    'sslCertNotFound' => 'Το πιστοποιητικό SSL δεν βρέθηκε στη διεύθυνση: "{0}"', // 'SSL certificate not found at: "{0}"',
    'curlError'       => '{0} : {1}', // '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => 'Το "{0}" δεν είναι έγκυρος τύπος διαπραγμάτευσης. Πρέπει να είναι ένα από τα παρακάτω: media, σύνολο χαρακτήρων, κωδικοποίηση, γλώσσα', // '"{0}" is not a valid negotiation type. Must be one of: media, charset, encoding, language.',
    'invalidJSON'            => 'Απέτυχε η προσπέλαση της συμβολοσειράς JSON. Σφάλμα: {0}',
    // Message
    'invalidHTTPProtocol' => 'Μη έγκυρη έκδοση πρωτοκόλλου HTTP: {0}', // 'Invalid HTTP Protocol Version: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'Πρέπει να παρέχετε μια σειρά από υποστηριζόμενες τιμές σε όλες τις Διαπραγματεύσεις.', // 'You must provide an array of supported values to all Negotiations.',

    // RedirectResponse
    'invalidRoute' => 'Η διαδρομή (route) για το "{0}" δεν μπορεί να βρεθεί.', // 'The route for "{0}" cannot be found.',

    // DownloadResponse
    'cannotSetBinary'        => 'Όταν ορίζετε τη διαδρομή του αρχείου δεν μπορείτε να ορίσετε δυαδικό.', // 'When setting filepath cannot set binary.',
    'cannotSetFilepath'      => 'Όταν ορίζετε δυαδικό δεν μπορείτε να ορίσετε διαδρομή αρχείου: "{0}"', // 'When setting binary cannot set filepath: "{0}"',
    'notFoundDownloadSource' => 'Η πηγή του σώματος λήψης δεν βρέθηκε', // 'Not found download body source.',
    'cannotSetCache'         => 'Δεν υποστηρίζει προσωρινή αποθήκευση για λήψη.', // 'It does not support caching for downloading.',
    'cannotSetStatusCode'    => 'Δεν υποστηρίζει αλλαγή κωδικού κατάστασης για λήψη. κωδικός: {0}, αιτία: {1}', // 'It does not support change status code for downloading. code: {0}, reason: {1}',

    // Response
    'missingResponseStatus' => 'Απόκριση HTTP χωρίς κωδικό κατάστασης',
    'invalidStatusCode'     => '{0} δεν είναι έγκυρος κωδικός κατάστασης επιστροφής HTTP',
    'unknownStatusCode'     => 'Άγνωστος κωδικός κατάστασης HTTP παρέχεται χωρίς μήνυμα: {0}',

    // URI
    'cannotParseURI'       => 'Δεν είναι δυνατή η ανάλυση του URI: "{0}"', // 'Unable to parse URI: "{0}"',
    'segmentOutOfRange'    => 'Το segment του URI αιτήματος είναι εκτός εύρους: "{0}"', // 'Request URI segment is out of range: "{0}"',
    'invalidPort'          => 'Οι θύρες πρέπει να είναι μεταξύ 0 και 65535. Δίνεται: {0}', // 'Ports must be between 0 and 65535. Given: {0}',
    'malformedQueryString' => 'Οι συμβολοσειρές ερωτήματος ενδέχεται να μην περιλαμβάνουν τμήματα URI.', // 'Query strings may not include URI fragments.',

    // Page Not Found
    'pageNotFound'       => 'Η σελίδα δεν βρέθηκε', // 'Page Not Found',
    'emptyController'    => 'Δεν έχει καθοριστεί Controller.', // 'No Controller specified.',
    'controllerNotFound' => 'Ο Controller ή η μέθοδος του δεν βρέθηκε: {0}::{1}', // 'Controller or its method is not found: {0}::{1}',
    'methodNotFound'     => 'Δεν βρέθηκε μέθοδος Controller: "{0}"', // 'Controller method is not found: "{0}"',
    'localeNotSupported' => 'Μη υποστηριζόμενη γλώσσα: {0}', // 'Locale is not supported: {0}',

    // CSRF
    // @deprecated use 'Security.disallowedAction'
    'disallowedAction' => 'Η ενέργεια που ζητήσατε δεν επιτρέπεται.', // 'The action you requested is not allowed.',

    // Uploaded file moving
    'alreadyMoved' => 'Το μεταφορτωμένο αρχείο έχει ήδη μετακινηθεί.', // 'The uploaded file has already been moved.',
    'invalidFile'  => 'Το πρωτότυπο αρχείο δεν είναι έγκυρο αρχείο.', // 'The original file is not a valid file.',
    'moveFailed'   => 'Δεν ήταν δυνατή η μετακίνηση του αρχείου "{0}" στο "{1}". Αιτία: {2}', // 'Could not move file "{0}" to "{1}". Reason: {2}',

    'uploadErrOk'        => 'Το αρχείο μεταφορτώθηκε με επιτυχία.', // 'The file uploaded with success.',
    'uploadErrIniSize'   => 'Το αρχείο "%s" υπερβαίνει την οδηγία upload_max_filesize ini.', // 'The file "%s" exceeds your upload_max_filesize ini directive.',
    'uploadErrFormSize'  => 'Το αρχείο "%s" υπερβαίνει το όριο μεταφόρτωσης που ορίζεται στη φόρμα σας.', // 'The file "%s" exceeds the upload limit defined in your form.',
    'uploadErrPartial'   => 'Το αρχείο "%s" μεταφορτώθηκε μόνο εν μέρει.', // 'The file "%s" was only partially uploaded.',
    'uploadErrNoFile'    => 'Δεν μεταφορτώθηκε κανένα αρχείο.', // 'No file was uploaded.',
    'uploadErrCantWrite' => 'Το αρχείο "%s" δεν μπόρεσε να γραφτεί στο δίσκο.', // 'The file "%s" could not be written on disk.',
    'uploadErrNoTmpDir'  => 'Δεν ήταν δυνατή η μεταφόρτωση του αρχείου: λείπει ο προσωρινός κατάλογος.', // 'File could not be uploaded: missing temporary directory.',
    'uploadErrExtension' => 'Η μεταφόρτωση αρχείου διακόπηκε από επέκταση PHP.', // 'File upload was stopped by a PHP extension.',
    'uploadErrUnknown'   => 'Το αρχείο "%s" δεν μεταφορτώθηκε λόγω άγνωστου σφάλματος.', // 'The file "%s" was not uploaded due to an unknown error.',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'Η ρύθμιση SameSite πρέπει να είναι None, Lax, Strict ή μια κενή συμβολοσειρά. Δόθηκε: {0}', // 'The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}',
];
