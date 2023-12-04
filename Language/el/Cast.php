<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cast language settings
return [
    'baseCastMissing'        => 'Η κλάση "{0}" πρέπει να κληρονομεί την κλάση "CodeIgniter\Entity\Cast\BaseCast".', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.',
    'invalidCastMethod'      => 'Η "{0}" είναι μη έγκυρη μέθοδος μετάδοσης, οι έγκυρες μέθοδοι είναι: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].',
    'invalidTimestamp'       => 'Ο τύπος μετάδοσης "timestamp" αναμένει μια σωστή χρονική σήμανση.', // 'Type casting "timestamp" expects a correct timestamp.',
    'jsonErrorCtrlChar'      => 'Βρέθηκε μη αναμενόμενος χαρακτήρας ελέγχου.', // 'Unexpected control character found.',
    'jsonErrorDepth'         => 'Υπέρβαση του μέγιστου βάθους στοίβας.', // 'Maximum stack depth exceeded.',
    'jsonErrorStateMismatch' => 'Υπερχείλιση ή αναντιστοιχία των λειτουργιών.', // 'Underflow or the modes mismatch.',
    'jsonErrorSyntax'        => 'Σφάλμα σύνταξης, JSON με λανθασμένη μορφή', // 'Syntax error, malformed JSON.',
    'jsonErrorUnknown'       => 'Αγνωστο σφάλμα.', // 'Unknown error.',
    'jsonErrorUtf8'          => 'Λανθασμένοι χαρακτήρες UTF-8, πιθανώς εσφαλμένη κωδικοποίηση.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.',
];
