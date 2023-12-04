<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'Δεν έχουν καθοριστεί σύνολα κανόνων στη διαμόρφωση (configuration) επικύρωσης.', // 'No rule sets specified in Validation configuration.',
    'ruleNotFound'    => '"{0}" δεν είναι έγκυρος κανόνας.', // '"{0}" is not a valid rule.',
    'groupNotFound'   => '"{0}" δεν είναι ομάδα κανόνων επικύρωσης.', // '"{0}" is not a validation rules group.',
    'groupNotArray'   => 'Η ομάδα κανόνων "{0}" πρέπει να είναι πίνακας.', // '"{0}" rule group must be an array.',
    'invalidTemplate' => '"{0}"δεν είναι έγκυρο πρότυπο επικύρωσης.', // '"{0}" is not a valid Validation template.',

    // Rule Messages
    'alpha'                 => 'Το πεδίο {field} μπορεί να περιέχει μόνο αλφαβητικούς χαρακτήρες.', // 'The {field} field may only contain alphabetical characters.',
    'alpha_dash'            => 'Το πεδίο {field} μπορεί να περιέχει μόνο αλφαριθμητικούς χαρακτήρες, κάτω παύλες και παύλες', // 'The {field} field may only contain alphanumeric, underscore, and dash characters.',
    'alpha_numeric'         => 'Το πεδίο {field} μπορεί να περιέχει μόνο αλφαριθμητικούς χαρακτήρες.', // 'The {field} field may only contain alphanumeric characters.',
    'alpha_numeric_punct'   => 'Το πεδίο {field} μπορεί να περιέχει μόνο αλφαριθμητικούς χαρακτήρες, κενά και ~ ! # $ % & * - _ + = | : . χαρακτήρες.', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.',
    'alpha_numeric_space'   => 'Το πεδίο {field} μπορεί να περιέχει μόνο αλφαριθμητικούς χαρακτήρες και κενούς (space) χαρακτήρες.', // 'The {field} field may only contain alphanumeric and space characters.',
    'alpha_space'           => 'Το πεδίο {field} μπορεί να περιέχει μόνο αλφαβητικούς χαρακτήρες και κενά.', // 'The {field} field may only contain alphabetical characters and spaces.',
    'decimal'               => 'Το πεδίο {field} πρέπει να να περιέχει δεκαδικό αριθμό.', // 'The {field} field must contain a decimal number.',
    'differs'               => 'Το πεδίο {field} πρέπει να διαφέρει από το πεδίο {param}.', // 'The {field} field must differ from the {param} field.',
    'equals'                => 'Το πεδίο {field} πρέπει να είναι ακριβώς: {param}.', // 'The {field} field must be exactly: {param}.',
    'exact_length'          => 'Το πεδίο {field} πρέπει να έχει μήκος ακριβώς {param} χαρακτήρες.', // 'The {field} field must be exactly {param} characters in length.',
    'greater_than'          => 'Το πεδίο {field} πρέπει να περιέχει αριθμό μεγαλύτερο από {param}.', // 'The {field} field must contain a number greater than {param}.',
    'greater_than_equal_to' => 'Το πεδίο {field} πρέπει να περιέχει αριθμό μεγαλύτερο ή ίσο του {param}.', // 'The {field} field must contain a number greater than or equal to {param}.',
    'hex'                   => 'Το πεδίο {field} } μπορεί να περιέχει μόνο δεκαεξαδικούς χαρακτήρες.', // 'The {field} field may only contain hexadecimal characters.',
    'in_list'               => 'Το πεδίο {field} πρέπει να είναι ένα από τα εξής: {param}.', // 'The {field} field must be one of: {param}.',
    'integer'               => 'Το πεδίο {field} πρέπει να περιέχει έναν ακέραιο αριθμό.', // 'The {field} field must contain an integer.',
    'is_natural'            => 'Το πεδίο {field} πρέπει να περιέχει μόνο ψηφία..', // 'The {field} field must only contain digits.',
    'is_natural_no_zero'    => 'Το πεδίο {field} πρέπει να περιέχει μόνο ψηφία και πρέπει να είναι μεγαλύτερο από το μηδέν.', // 'The {field} field must only contain digits and must be greater than zero.',
    'is_not_unique'         => 'Το πεδίο {field} πρέπει να περιέχει μια προηγουμένως υπάρχουσα τιμή στη βάση δεδομένων.', // 'The {field} field must contain a previously existing value in the database.',
    'is_unique'             => 'Το πεδίο {field} πρέπει να περιέχει μια μοναδική τιμή.', // 'The {field} field must contain a unique value.',
    'less_than'             => 'Το πεδίο {field} πρέπει να περιέχει αριθμό μικρότερο από {param}.', // 'The {field} field must contain a number less than {param}.',
    'less_than_equal_to'    => 'Το πεδίο {field} πρέπει να περιέχει αριθμό μικρότερο ή ίσο του {param}.', // 'The {field} field must contain a number less than or equal to {param}.',
    'matches'               => 'Το πεδίο {field} δεν ταιριάζει με το πεδίο {param}.', // 'The {field} field does not match the {param} field.',
    'max_length'            => 'Το πεδίο {field} δεν μπορεί να υπερβαίνει τους {param} χαρακτήρες σε μήκος.', // 'The {field} field cannot exceed {param} characters in length.',
    'min_length'            => 'Το πεδίο {field} πρέπει να έχει μήκος τουλάχιστον {param} χαρακτήρες.', // 'The {field} field must be at least {param} characters in length.',
    'not_equals'            => 'Το πεδίο {field} δεν μπορεί να είναι: {param}.', // 'The {field} field cannot be: {param}.',
    'not_in_list'           => 'Το πεδίο {field} δεν πρέπει να είναι ένα από τα: {param}.', // 'The {field} field must not be one of: {param}.',
    'numeric'               => 'Το πεδίο {field} πρέπει να περιέχει μόνο αριθμούς.', // 'The {field} field must contain only numbers.',
    'regex_match'           => 'Το πεδίο {field} δεν είναι στη σωστή μορφή.', // 'The {field} field is not in the correct format.',
    'required'              => 'Το πεδίο {field} είναι υποχρεωτικό.', // 'The {field} field is required.',
    'required_with'         => 'Το πεδίο {field} απαιτείται όταν υπάρχει το {param}.', // 'The {field} field is required when {param} is present.',
    'required_without'      => 'Το πεδίο {field} απαιτείται όταν δεν υπάρχει το {param}.', // 'The {field} field is required when {param} is not present.',
    'string'                => 'Το πεδίο {field} πρέπει να είναι έγκυρη συμβολοσειρά.', // 'The {field} field must be a valid string.',
    'timezone'              => 'Το πεδίο {field} πρέπει να είναι έγκυρη ζώνη ώρας.', // 'The {field} field must be a valid timezone.',
    'valid_base64'          => 'Το πεδίο {field} πρέπει να είναι έγκυρη base64 συμβολοσειρά.', // 'The {field} field must be a valid base64 string.',
    'valid_email'           => 'Το πεδίο {field} πρέπει να περιέχει μια έγκυρη διεύθυνση email.', // 'The {field} field must contain a valid email address.',
    'valid_emails'          => 'Το πεδίο {field} πρέπει να περιέχει όλες τις έγκυρες διευθύνσεις email.', // 'The {field} field must contain all valid email addresses.',
    'valid_ip'              => 'Το πεδίο {field} πρέπει να περιέχει έγκυρη IP.', // 'The {field} field must contain a valid IP.',
    'valid_url'             => 'Το πεδίο {field} πρέπει να περιέχει μια έγκυρη διεύθυνση URL.', // 'The {field} field must contain a valid URL.',
    'valid_url_strict'      => 'Το πεδίο {field} πρέπει να περιέχει μια έγκυρη διεύθυνση URL.', // 'The {field} field must contain a valid URL.',
    'valid_date'            => 'Το πεδίο {field} πρέπει να περιέχει μια έγκυρη ημερομηνία..', // 'The {field} field must contain a valid date.',
    'valid_json'            => 'Το πεδίο {field} πρέπει να περιέχει έγκυρο json.', // 'The {field} field must contain a valid json.',

    // Credit Cards
    'valid_cc_num' => '{field} δεν φαίνεται να είναι έγκυρος αριθμός πιστωτικής κάρτας.', // '{field} does not appear to be a valid credit card number.',

    // Files
    'uploaded' => '{field} δεν είναι έγκυρο μεταφορτωμένο αρχείο.', // '{field} is not a valid uploaded file.',
    'max_size' => '{field} είναι πολύ μεγάλο αρχείο.', // '{field} is too large of a file.',
    'is_image' => '{field} δεν είναι έγκυρο, μεταφορτωμένο αρχείο εικόνας.', // '{field} is not a valid, uploaded image file.',
    'mime_in'  => '{field} δεν έχει έγκυρο τύπο mime.', // '{field} does not have a valid mime type.',
    'ext_in'   => '{field} εν έχει έγκυρη επέκταση αρχείου.', // '{field} does not have a valid file extension.',
    'max_dims' => '{field} iείτε δεν είναι εικόνα, είτε είναι πολύ πλατύ ή ψηλό.', // '{field} is either not an image, or it is too wide or tall.',
];
