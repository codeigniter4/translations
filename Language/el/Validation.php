<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'No rulesets specified in Validation configuration.',
   'ruleNotFound'          => '{0} δεν είναι έγκυρος κανόνας.',
   'groupNotFound'         => '{0} is not a validation rules group.',
   'groupNotArray'         => '{0} rule group must be an array.',
   'invalidTemplate'       => '{0} is not a valid Validation template.',

	// Rule Messages
   'alpha'                 => 'Το πεδίο {field} πρέπει να περιέχει αλφαβητικούς χαρακτήρες.',
   'alpha_dash'            => 'Το πεδίο {field} may only contain alpha-numeric characters, underscores, and dashes.',
   'alpha_numeric'         => 'Το πεδίο {field} may only contain alpha-numeric characters.',
   'alpha_numeric_space'   => 'Το πεδίο {field} may only contain alpha-numeric characters and spaces.',
   'alpha_space'           => 'Το πεδίο {field} may only contain alphabetical characters and spaces.',
   'decimal'               => 'Το πεδίο {field} must contain a decimal number.',
   'differs'               => 'Το πεδίο {field} must differ from the {param} field.',
   'equals'                => 'Το πεδίο {field} πρέπει να είναι ακριβώς: {param}.',
   'exact_length'          => 'Το πεδίο {field} must be exactly {param} characters in length.',
   'greater_than'          => 'Το πεδίο {field} must contain a number greater than {param}.',
   'greater_than_equal_to' => 'Το πεδίο {field} must contain a number greater than or equal to {param}.',
   'in_list'               => 'Το πεδίο {field} must be one of: {param}.',
   'integer'               => 'Το πεδίο {field} must contain an integer.',
   'is_natural'            => 'Το πεδίο {field} must only contain digits.',
   'is_natural_no_zero'    => 'Το πεδίο {field} must only contain digits and must be greater than zero.',
   'is_unique'             => 'Το πεδίο {field} must contain a unique value.',
   'less_than'             => 'Το πεδίο {field} must contain a number less than {param}.',
   'less_than_equal_to'    => 'Το πεδίο {field} must contain a number less than or equal to {param}.',
   'matches'               => 'Το πεδίο {field} does not match the {param} field.',
   'max_length'            => 'Το πεδίο {field} cannot exceed {param} characters in length.',
   'min_length'            => 'Το πεδίο {field} must be at least {param} characters in length.',
   'not_equals'            => 'Το πεδίο {field} cannot be: {param}.',
   'numeric'               => 'Το πεδίο {field} must contain only numbers.',
   'regex_match'           => 'Το πεδίο {field} is not in the correct format.',
   'required'              => 'Το πεδίο {field} απαιτείται.',
   'required_with'         => 'Το πεδίο {field} απαιτείται όταν υπάρχει η παράμετρος {param}.',
   'required_without'      => 'Το πεδίο {field} απαιτείται όταν δεν υπάρχει η παράμετρος {param}.',
   'timezone'              => 'Το πεδίο {field} πρέπει να είναι μια έγκυρη ζώνη ώρας.',
   'valid_base64'          => 'Το πεδίο {field} must be a valid base64 string.',
   'valid_email'           => 'Το πεδίο {field} must contain a valid email address.',
   'valid_emails'          => 'Το πεδίο {field} must contain all valid email addresses.',
   'valid_ip'              => 'Το πεδίο {field} πρέπει να περιέχει μια έγκυρη διεύθυνση IP.',
   'valid_url'             => 'Το πεδίο {field} πρέπει να περιέχει μια έγκυρη διεύθυνση URL.',
   'valid_date'            => 'Το πεδίο {field} πρέπει να περιέχει μια έγκυρη ημερομηνία.',

	// Credit Cards
   'valid_cc_num'          => '{field} δεν φαίνεται να είναι έγκυρος αριθμός πιστωτικής κάρτας.',

	// Files
   'uploaded'              => '{field} is not a valid uploaded file.',
   'max_size'              => '{field} is too large of a file.',
   'is_image'              => '{field} is not a valid, uploaded image file.',
   'mime_in'               => '{field} does not have a valid mime type.',
   'ext_in'                => '{field} does not have a valid file extension.',
   'max_dims'              => '{field} is either not an image, or it is too wide or tall.',
];
