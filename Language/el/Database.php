<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
    'invalidEvent'                     => 'Το "{0}" δεν είναι έγκυρο Μοντέλο επανάκλησης συμβάντος ( Model Event callback )', // '"{0}" is not a valid Model Event callback.',
    'invalidArgument'                  => 'Πρέπει να παρέχετε ένα έγκυρο "{0}".', // 'You must provide a valid "{0}".',
    'invalidAllowedFields'             => 'Πρέπει να καθοριστούν τα επιτρεπόμενα πεδία για το μοντέλο: "{0}"', // 'Allowed fields must be specified for model: "{0}"',
    'emptyDataset'                     => 'Δεν υπάρχουν δεδομένα για το {0}.', // 'There is no data to {0}.',
    'emptyPrimaryKey'                  => 'Δεν έχει οριστεί πρωτεύον κλειδί κατά την προσπάθεια δημιουργίας του {0}.', // 'There is no primary key defined when trying to make {0}.',
    'failGetFieldData'                 => 'Αποτυχία λήψης δεδομένων πεδίου από τη βάση δεδομένων.', // 'Failed to get field data from database.',
    'failGetIndexData'                 => 'Αποτυχία λήψης δεδομένων ευρετηρίου από τη βάση δεδομένων.', // 'Failed to get index data from database.',
    'failGetForeignKeyData'            => 'Αποτυχία λήψης δεδομένων ξένου κλειδιού από τη βάση δεδομένων.', // 'Failed to get foreign key data from database.',
    'parseStringFail'                  => 'Παρουσιάστηκε σφάλμα κατά την ανάλυση του κλειδιού συμβολοσειράς', // 'Parsing key string failed.',
    'featureUnavailable'               => 'Αυτή η δυνατότητα δεν είναι διαθέσιμη για τη βάση δεδομένων που χρησιμοποιείτε.', // 'This feature is not available for the database you are using.',
    'tableNotFound'                    => 'Ο πίνακας "{0}" δεν βρέθηκε στην τρέχουσα βάση δεδομένων.', // 'Table "{0}" was not found in the current database.',
    'noPrimaryKey'                     => 'Η κλάση του μοντέλου "{0}" δεν προσδιορίζει πρωτεύον κλειδί.', // '"{0}" model class does not specify a Primary Key.',
    'noDateFormat'                     => 'Η κλάση του μοντέλου "{0}" δεν έχει έγκυρη μορφή ημερομηνίας.', // '"{0}" model class does not have a valid dateFormat.',
    'fieldNotExists'                   => 'Το πεδίο "{0}" δεν βρέθηκε.', // 'Field "{0}" not found.',
    'forEmptyInputGiven'               => 'Δώθηκε κενή δήλωση για το πεδίο "{0}"', // 'Empty statement is given for the field "{0}"',
    'forFindColumnHaveMultipleColumns' => 'Επιτρέπεται μόνο μία στήλη στο όνομα της στήλης', // 'Only single column allowed in Column name.',
    'methodNotAvailable'               => 'Δεν μπορείτε να χρησιμοποιήσετε το "{1}" στο "{0}". Αυτή είναι μια μέθοδος της κλάσης Query Builder.', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.',
];
