<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'Πρέπει να οριστεί ο πίνακας μετεγκατάστασης.', // 'Migrations table must be set.',
    'disabled'      => 'Οι μετεγκαταστάσεις έχουν φορτωθεί αλλά είναι απενεργοποιημένες ή έχουν ρυθμιστεί εσφαλμένα.', // 'Migrations have been loaded but are disabled or setup incorrectly.',
    'notFound'      => 'Δεν βρέθηκε το αρχείο μετεγκατάστασης: ', // 'Migration file not found: ',
    'batchNotFound' => 'Ο στόχος δέσμης δεν βρέθηκε: ', // 'Target batch not found: ',
    'empty'         => 'Δεν βρέθηκαν αρχεία μετεγκατάστασης', // 'No Migration files found',
    'gap'           => 'Υπάρχει ένα κενό στην ακολουθία μετεγκατάστασης κοντά στον αριθμό έκδοσης: ', // 'There is a gap in the migration sequence near version number: ',
    'classNotFound' => 'Η κλάση μετεγκατάστασης "%s" δεν βρέθηκε.', // 'The migration class "%s" could not be found.',
    'missingMethod' => 'Από την κλάση μετεγκατάστασης λείπει μια μέθοδος "%s".', // 'The migration class is missing an "%s" method.',

    // Migration Command
    'migHelpLatest'   => "\t\\Μεταφέρει τη βάση δεδομένων στην πιο πρόσφατη διαθέσιμη μετεγκατάσταση.", // "\t\tMigrates database to latest available migration.",
    'migHelpCurrent'  => "\t\tΜεταφέρει τη βάση δεδομένων στην έκδοση που έχει οριστεί ως 'τρέχουσα' στη διαμόρφωση (configuration)", // "\t\tMigrates database to version set as 'current' in configuration.",
    'migHelpVersion'  => "\tΜεταφέρει τη βάση δεδομένων στην έκδοση {v}.", // "\tMigrates database to version {v}.",
    'migHelpRollback' => "\tΕκτελεί όλες τις μετεγκαταστάσεις 'κάτω' στην έκδοση 0..", // "\tRuns all migrations 'down' to version 0.",
    'migHelpRefresh'  => "\t\tΚαταργεί την εγκατάσταση και εκτελεί ξανά όλες τις μετεγκαταστάσεις για ανανέωση της βάσης δεδομένων.", // "\t\tUninstalls and re-runs all migrations to freshen database.",
    'migHelpSeed'     => "\tΕκτελεί το όνομα του σπορέα (seeder) [name].", // "\tRuns the seeder named [name].",
    'migCreate'       => "\tΔημιουργεί μια νέα μετεγκατάσταση με το όνομα [name]", // "\tCreates a new migration named [name]",
    'nameMigration'   => 'Ονομάστε το αρχείο μετεγκατάστασης', // 'Name the migration file',
    'migNumberError'  => 'Ο αριθμός μετεγκατάστασης πρέπει να είναι τριψήφιος και δεν πρέπει να υπάρχουν κενά στην ακολουθία.', // 'Migration number must be three digits, and there must not be any gaps in the sequence.',
    'rollBackConfirm' => 'Είστε βέβαιοι ότι θέλετε να επιστρέψετε;', // 'Are you sure you want to rollback?',
    'refreshConfirm'  => 'Είστε βέβαιοι ότι θέλετε να κάνετε ανανέωση;', // 'Are you sure you want to refresh?',

    'latest'            => 'Εκτέλεση όλων των νέων μετεγκαταστάσεων...', // 'Running all new migrations...',
    'generalFault'      => 'Η μετεγκατάσταση απέτυχε!', // 'Migration failed!',
    'migrated'          => 'Οι μετεγκαταστάσεις ολοκληρώθηκαν.', // 'Migrations complete.',
    'migInvalidVersion' => 'Παρέχεται μη έγκυρος αριθμός έκδοσης.', // 'Invalid version number provided.',
    'toVersionPH'       => 'Μετεγκατάσταση στην έκδοση %s...', // 'Migrating to version %s...',
    'toVersion'         => 'Μετεγκατάσταση στην τρέχουσα έκδοση...', // 'Migrating to current version...',
    'rollingBack'       => 'Επιστροφή μεταναστεύσεων σε δέσμη: ', // 'Rolling back migrations to batch: ',
    'noneFound'         => 'Δεν βρέθηκαν μετεγκαταστάσεις.', // 'No migrations were found.',
    'migSeeder'         => 'Όνομα σπορέα (seeder)', // 'Seeder name',
    'migMissingSeeder'  => 'Πρέπει να δώσετε ένα όνομα σπορέα (seeder name).', // 'You must provide a seeder name.',
    'nameSeeder'        => 'Ονομάστε το αρχείο seeder', // 'Name the seeder file',
    'removed'           => 'Επαναφορά: ', // 'Rolling back: ',
    'added'             => 'Εκτέλεση: ', // 'Running: ',

    // Migrate Status
    'namespace' => 'Χώρος ονομάτων', // 'Namespace',
    'filename'  => 'Ονομα αρχείου', // 'Filename',
    'version'   => 'Εκδοση', // 'Version',
    'group'     => 'Ομάδα', // 'Group',
    'on'        => 'Μετεγκατάσταση στο: ', // 'Migrated On: ',
    'batch'     => 'Δέσμη (Batch)', // 'Batch',
];
