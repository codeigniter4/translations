<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'Η μέθοδος επικύρωσης email πρέπει να περαστεί σε πίνακα.', // 'The email validation method must be passed an array.',
    'invalidAddress'       => 'Μη έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου: "{0}"', // 'Invalid email address: "{0}"',
    'attachmentMissing'    => 'Δεν είναι δυνατός ο εντοπισμός του ακόλουθου συνημμένου ηλεκτρονικού ταχυδρομείου: "{0}"', // 'Unable to locate the following email attachment: "{0}"',
    'attachmentUnreadable' => 'Δεν είναι δυνατό το άνοιγμα αυτού του συνημμένου: "{0}"', // 'Unable to open this attachment: "{0}"',
    'noFrom'               => 'Δεν είναι δυνατή η αποστολή μηνυμάτων χωρίς κεφαλίδα "Από".', // 'Cannot send mail with no "From" header.',
    'noRecipients'         => 'Πρέπει να συμπεριλάβετε παραλήπτες: Προς (To), Κοιν (Cc). ή Κρυφή κοινοποίηση (Bcc)', // 'You must include recipients: To, Cc, or Bcc',
    'sendFailurePHPMail'   => 'Δεν είναι δυνατή η αποστολή email με χρήση PHP mail(). Ο διακομιστής σας ενδέχεται να μην έχει ρυθμιστεί για αποστολή αλληλογραφίας χρησιμοποιώντας αυτήν τη μέθοδο', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.',
    'sendFailureSendmail'  => 'Δεν είναι δυνατή η αποστολή email χρησιμοποιώντας το Sendmail. Ο διακομιστής σας ενδέχεται να μην έχει ρυθμιστεί για αποστολή αλληλογραφίας χρησιμοποιώντας αυτήν τη μέθοδο.', // 'Unable to send email using Sendmail. Your server might not be configured to send mail using this method.',
    'sendFailureSmtp'      => 'Δεν είναι δυνατή η αποστολή email μέσω SMTP. Ο διακομιστής σας ενδέχεται να μην έχει ρυθμιστεί για αποστολή αλληλογραφίας χρησιμοποιώντας αυτήν τη μέθοδο.', // 'Unable to send email using SMTP. Your server might not be configured to send mail using this method.',
    'sent'                 => 'Το μήνυμά σας στάλθηκε με επιτυχία χρησιμοποιώντας το ακόλουθο πρωτόκολλο: {0}', // 'Your message has been successfully sent using the following protocol: {0}',
    'noSocket'             => 'Δεν είναι δυνατό να ανοίξει μια υποδοχή (socket) στο Sendmail. Ελέγξτε τις ρυθμίσεις.', // 'Unable to open a socket to Sendmail. Please check settings.',
    'noHostname'           => 'Δεν προσδιορίσατε SMTP hostname.', // 'You did not specify a SMTP hostname.',
    'SMTPError'            => 'Παρουσιάστηκε το ακόλουθο σφάλμα SMTP: {0}', // 'The following SMTP error was encountered: {0}',
    'noSMTPAuth'           => 'Σφάλμα: Πρέπει να εκχωρήσετε όνομα χρήστη και κωδικό πρόσβασης SMTP', // 'Error: You must assign an SMTP username and password.',
    'failedSMTPLogin'      => 'Αποτυχία αποστολής AUTH LOGIN εντολής. Σφάλμα: {0}', // 'Failed to send AUTH LOGIN command. Error: {0}',
    'SMTPAuthUsername'     => 'Απέτυχε ο έλεγχος ταυτότητας ονόματος χρήστη. Σφάλμα: {0}', // 'Failed to authenticate username. Error: {0}',
    'SMTPAuthPassword'     => 'Απέτυχε ο έλεγχος ταυτότητας του κωδικού πρόσβασης. Σφάλμα: {0}', // 'Failed to authenticate password. Error: {0}',
    'SMTPDataFailure'      => 'Δεν είναι δυνατή η αποστολή δεδομένων: {0}', // 'Unable to send data: {0}',
    'exitStatus'           => 'Κωδικός κατάστασης εξόδου: {0}', // 'Exit status code: {0}',
];
