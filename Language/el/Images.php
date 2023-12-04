<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
    'sourceImageRequired'    => 'Πρέπει να καθορίσετε μια εικόνα πηγής στις προτιμήσεις σας.', // 'You must specify a source image in your preferences.',
    'gdRequired'             => 'Η βιβλιοθήκη εικόνων GD απαιτείται για τη χρήση αυτής της δυνατότητας.', // 'The GD image library is required to use this feature.',
    'gdRequiredForProps'     => 'Ο διακομιστής σας πρέπει να υποστηρίζει τη βιβλιοθήκη εικόνων GD για να προσδιορίσει τις ιδιότητες της εικόνας.', // 'Your server must support the GD image library in order to determine the image properties.',
    'gifNotSupported'        => 'Οι εικόνες GIF συχνά δεν υποστηρίζονται λόγω περιορισμών αδειοδότησης. Ίσως χρειαστεί να χρησιμοποιήσετε αντ αυτού εικόνες JPG ή PNG.', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.',
    'jpgNotSupported'        => 'Οι εικόνες JPG δεν υποστηρίζονται.', // 'JPG images are not supported.',
    'pngNotSupported'        => 'Οι εικόνες PNG δεν υποστηρίζονται.', // 'PNG images are not supported.',
    'webpNotSupported'       => 'Οι εικόνες WEBP δεν υποστηρίζονται.', // 'WEBP images are not supported.',
    'fileNotSupported'       => 'ο παρεχόμενο αρχείο δεν είναι υποστηριζόμενος τύπος εικόνας.', // 'The supplied file is not a supported image type.',
    'unsupportedImageCreate' => 'Ο διακομιστής σας δεν υποστηρίζει τη λειτουργία GD που απαιτείται για την επεξεργασία αυτού του τύπου εικόνας.', // 'Your server does not support the GD function required to process this type of image.',
    'jpgOrPngRequired'       => 'Το πρωτόκολλο αλλαγής μεγέθους εικόνας που καθορίζεται στις προτιμήσεις σας λειτουργεί μόνο με τύπους εικόνων JPEG ή PNG.', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.',
    'rotateUnsupported'      => 'Η εναλλαγή εικόνας δεν φαίνεται να υποστηρίζεται από τον διακομιστή σας.', // 'Image rotation does not appear to be supported by your server.',
    'libPathInvalid'         => 'Η διαδρομή προς τη βιβλιοθήκη εικόνων σας δεν είναι σωστή. Παρακαλούμε ορίστε τη σωστή διαδρομή στις προτιμήσεις εικόνας σας. "{0}"', // 'The path to your image library is not correct. Please set the correct path in your image preferences. "{0}"',
    'imageProcessFailed'     => 'Η επεξεργασία της εικόνας απέτυχε. Βεβαιωθείτε ότι ο διακομιστής σας υποστηρίζει το επιλεγμένο πρωτόκολλο και ότι η διαδρομή προς τη βιβλιοθήκη εικόνων σας είναι σωστή.', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.',
    'rotationAngleRequired'  => 'Για την περιστροφή της εικόνας απαιτείται γωνία περιστροφής.', // 'An angle of rotation is required to rotate the image.',
    'invalidPath'            => 'Η διαδρομή προς την εικόνα δεν είναι σωστή', // 'The path to the image is not correct.',
    'copyFailed'             => 'Η ρουτίνα αντιγραφής εικόνας απέτυχε.', // 'The image copy routine failed.',
    'missingFont'            => 'Δεν είναι δυνατή η εύρεση της γραμματοσειράς που θα χρησιμοποιηθεί.', // 'Unable to find a font to use.',
    'saveFailed'             => 'Δεν είναι δυνατή η αποθήκευση της εικόνας. Βεβαιωθείτε ότι η εικόνα και ο κατάλογος αρχείων είναι εγγράψιμα.', // 'Unable to save the image. Please make sure the image and file directory are writable.',
    'invalidDirection'       => 'Η κατεύθυνση αναστροφής μπορεί να είναι μόνο "κάθετη" ή "οριζόντια". Δόθηκε: "{0}"', // 'Flip direction can be only "vertical" or "horizontal". Given: "{0}"',
    'exifNotSupported'       => 'Η ανάγνωση δεδομένων EXIF δεν υποστηρίζεται από αυτήν την εγκατάσταση PHP.', // 'Reading EXIF data is not supported by this PHP installation.',
];
