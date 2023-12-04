<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Core language settings
return [
    'copyError'                    => 'Παρουσιάστηκε σφάλμα κατά την προσπάθεια αντικατάστασης του αρχείου "{0}". εβαιωθείτε ότι ο κατάλογος των αρχείων σας είναι εγγράψιμος.', // 'An error was encountered while attempting to replace the file "{0}". Please make sure your file directory is writable.',
    'enabledZlibOutputCompression' => 'Η οδηγία zlib.output_compression ini σας είναι ενεργοποιημένη. Αυτό δεν θα λειτουργήσει καλά με buffers εξόδου.', // 'Your zlib.output_compression ini directive is turned on. This will not work well with output buffers.',
    'invalidFile'                  => 'Μη έγκυρο αρχείο: "{0}"', // 'Invalid file: "{0}"',
    'invalidDirectory'             => 'Ο κατάλογος (directory) δεν υπάρχει: "{0}"', // 'Directory does not exist: "{0}"',
    'invalidPhpVersion'            => 'Η έκδοση PHP που διαθέτετε πρέπει να είναι {0} ή μεγαλύτερη για να τρέξει το CodeIgniter. Τρέχουσα έκδοση: {1}', // 'Your PHP version must be {0} or higher to run CodeIgniter. Current version: {1}',
    'missingExtension'             => 'Για το framework χρειάζεται να εγκατασταθούν και να φορτωθούν οι ακόλουθες επεκτάσεις: "{0}".', // 'The framework needs the following extension(s) installed and loaded: "{0}".',
    'noHandlers'                   => '"{0}" πρέπει να παρέχει τουλάχιστον έναν χειριστή (Handler).', // '"{0}" must provide at least one Handler.',
];
