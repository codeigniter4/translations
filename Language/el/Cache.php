<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cache language settings
return [
    'unableToWrite'   => 'Δεν ήταν δυνατή η εγγραφή της cache στο "{0}".', // 'Cache unable to write to {0}',
    'invalidHandlers' => 'Το config της cache πρέπει να έχει έναν πίνακα από $validHandlers.', // 'Cache config must have an array of $validHandlers.'
    'noBackup'        => 'Το config της cache πρέπει να έχει ένα σύνολο χειρισμού (handler) και ένα σύνολο χειριστή αντιγράφων ασφαλείας (backupHandler).', // 'Cache config must have a handler and backupHandler set.'
    'handlerNotFound' => 'Το config της cache έχει καθορισμένο μη έγκυρο χειριστή (handler) ή χειριστή αντιγράφων ασφαλείας (backup handler).', // 'Cache config has an invalid handler or backup handler specified.'
];
