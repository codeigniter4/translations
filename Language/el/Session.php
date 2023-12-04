<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
    'missingDatabaseTable'   => '"sessionSavePath" πρέπει να έχει το όνομα του πίνακα για να λειτουργήσει το Database Session Handler to work.', // '"sessionSavePath" must have the table name for the Database Session Handler to work.',
    'invalidSavePath'        => 'Session: Η διαμορφωμένη διαδρομή αποθήκευσης "{0}" δεν είναι κατάλογος, δεν υπάρχει ή δεν μπορεί να δημιουργηθεί.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.',
    'writeProtectedSavePath' => 'Session: Η διαμορφωμένη διαδρομή αποθήκευσης "{0}" δεν μπορεί να εγγραφεί από τη διαδικασία PHP.', // 'Session: Configured save path "{0}" is not writable by the PHP process.',
    'emptySavePath'          => 'Session: Δεν έχει διαμορφωθεί διαδρομή αποθήκευσης.', // 'Session: No save path configured.',
    'invalidSavePathFormat'  => 'Session: Μη έγκυρη μορφή διαδρομής αποθήκευσης Redis: "{0}"', // 'Session: Invalid Redis save path format: "{0}"',

    // @deprecated
    'invalidSameSiteSetting' => 'Session: Η ρύθμιση SameSite πρέπει να είναι None, Lax, Strict ή κενή συμβολοσειρά. Δόθηκε: "{0}"', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: "{0}"',
];
