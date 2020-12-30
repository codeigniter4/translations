<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
	// Core Messages
	'noRuleSets'      => 'Validation configuration තුළ rulesets කිසිවක් දක්වා නැත.', // No rulesets specified in Validation configuration.
	'ruleNotFound'    => '{0} වලංගු rule එකක් නොවේ.', // {0} is not a valid rule.
	'groupNotFound'   => '{0} validation rules group එකක් නොවේ.', // {0} is not a validation rules group.
	'groupNotArray'   => '{0} rule group එක array එකක් විය යුතුය.', // {0} rule group must be an array.
	'invalidTemplate' => '{0} වලංගු Validation template එකක් නොවේ.', // {0} is not a valid Validation template.

	// Rule Messages
	'alpha'                 => '{field} field එකෙහි අඩංගු විය හැක්කේ alphabetical characters පමණි.', // The {field} field may only contain alphabetical characters.
	'alpha_dash'            => '{field} field එකෙහි අඩංගු විය හැක්කේ alphanumeric, underscore සහ dash characters පමණි.', // The {field} field may only contain alphanumeric, underscore, and dash characters.
	'alpha_numeric'         => '{field} field එකෙහි අඩංගු විය හැක්කේ alphanumeric characters පමණි.', // The {field} field may only contain alphanumeric characters.
	'alpha_numeric_punct'   => '{field} field එකෙහි අඩංගු විය හැක්කේ alphanumeric characters, spaces, සහ ~ ! # $ % & * - _ + = | : . characters පමණි.', // The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.
	'alpha_numeric_space'   => '{field} field එකෙහි අඩංගු විය හැක්කේ alphanumeric හා space characters පමණි.', // The {field} field may only contain alphanumeric and space characters.
	'alpha_space'           => '{field} field එකෙහි අඩංගු විය හැක්කේ alphabetical characters සහ spaces පමණි.', // The {field} field may only contain alphabetical characters and spaces.
	'decimal'               => '{field} field එකෙහි දශම සංඛ්‍යාවක් අඩංගු විය යුතුය.', // The {field} field must contain a decimal number.
	'differs'               => '{field} field එක {param} field එකෙන් වෙනස් විය යුතුය.', // The {field} field must differ from the {param} field.
	'equals'                => '{field} field එක {param} ට හරියටම සමාන විය යුතුය.', // The {field} field must be exactly: {param}.
	'exact_length'          => '{field} field එකෙහි characters in length එක හරියටම {param} විය යුතුය.', // The {field} field must be exactly {param} characters in length.
	'greater_than'          => '{field} field එකෙහි {param} ට වඩා වැඩි සංඛ්‍යාවක් තිබිය යුතුය.', // The {field} field must contain a number greater than {param}.
	'greater_than_equal_to' => '{field} field එකෙහි {param} ට වඩා වැඩි හෝ සමාන සංඛ්‍යාවක් අඩංගු විය යුතුය.', // The {field} field must contain a number greater than or equal to {param}.
	'hex'                   => '{field} field එකෙහි අඩංගු විය හැක්කේ hexidecimal characters පමණි.', // The {field} field may only contain hexidecimal characters.
	'in_list'               => '{field} field එක {param} වලින් එකක් විය යුතුය.', // The {field} field must be one of: {param}.
	'integer'               => '{field} field එකෙහි පූර්ණ සංඛ්‍යාවක් අඩංගු විය යුතුය.', // The {field} field must contain an integer.
	'is_natural'            => '{field} field එකෙහි තිබිය යුත්තේ ඉලක්කම් පමණි.', // The {field} field must only contain digits.
	'is_natural_no_zero'    => '{field} field එකෙහි ඉලක්කම් පමණක් අඩංගු විය යුතු අතර එය බිංදුවට වඩා වැඩි විය යුතුය.', // The {field} field must only contain digits and must be greater than zero.
	'is_not_unique'         => '{field} field එක තුළ දත්ත ගබඩාවේ කලින් පැවති අගයක් තිබිය යුතුය.', // The {field} field must contain a previously existing value in the database.
	'is_unique'             => '{field} field එකෙහි unique value එකක් අඩංගු විය යුතුය.', // The {field} field must contain a unique value.
	'less_than'             => '{field} field එකෙහි {param} ට වඩා අඩු සංඛ්‍යාවක් අඩංගු විය යුතුය.', // The {field} field must contain a number less than {param}.
	'less_than_equal_to'    => '{field} field එකෙහි {param} ට වඩා අඩු හෝ සමාන සංඛ්‍යාවක් අඩංගු විය යුතුය.', // The {field} field must contain a number less than or equal to {param}.
	'matches'               => '{field} field එක {param} field සමග නොගැලපේ.', // The {field} field does not match the {param} field.
	'max_length'            => '{field} field එකෙහි characters in length එක {param} නොඉක්මවිය යුතුය.', // The {field} field cannot exceed {param} characters in length.
	'min_length'            => '{field} field එකෙහි characters in length එක අවම වශයෙන් {param} විය යුතුය.', // The {field} field must be at least {param} characters in length.
	'not_equals'            => '{field} field එක {param} විය නොහැක.', // The {field} field cannot be: {param}.
	'not_in_list'           => '{field} field එක {param} එකක් නොවිය යුතුය.', // The {field} field must not be one of: {param}.
	'numeric'               => '{field} field එකෙහි තිබිය යුත්තේ සංඛ්‍යා පමණි.', // The {field} field must contain only numbers.
	'regex_match'           => '{field} field නිවැරදි ෆෝර්මැට් එකේ නොමැත.', // The {field} field is not in the correct format.
	'required'              => '{field} field එක අවශ්‍ය වේ.', // The {field} field is required.
	'required_with'         => '{param} පවතින විට {field} field එක අවශ්‍ය වේ.', // The {field} field is required when {param} is present.
	'required_without'      => '{param} නොමැති විට {field} field එක අවශ්‍ය වේ.', // The {field} field is required when {param} is not present.
	'string'                => '{field} field වලංගු string එකක් විය යුතුය.', // The {field} field must be a valid string.
	'timezone'              => '{field} field වලංගු timezone එකක් විය යුතුය.', // The {field} field must be a valid timezone.
	'valid_base64'          => '{field} field වලංගු base64 string එකක් විය යුතුය.', // The {field} field must be a valid base64 string.
	'valid_email'           => '{field} field එකෙහි වලංගු ඊමේල් ලිපිනයක් අඩංගු විය යුතුය.', // The {field} field must contain a valid email address.
	'valid_emails'          => '{field} field එකෙහි අඩංගු සියලුම ඊමේල් ලිපින වලංගු ඒවා විය යුතුය.', // The {field} field must contain all valid email addresses.
	'valid_ip'              => '{field} field එකෙහි වලංගු IP එකක් අඩංගු විය යුතුය.', // The {field} field must contain a valid IP.
	'valid_url'             => '{field} field එකෙහි වලංගු URL එකක් අඩංගු විය යුතුය.', // The {field} field must contain a valid URL.
	'valid_date'            => '{field} field එකෙහි වලංගු දිනයක් අඩංගු විය යුතුය.', // The {field} field must contain a valid date.

	// Credit Cards
	'valid_cc_num' => '{field} වලංගු ක්‍රෙඩිට් කාඩ් අංකයක් ලෙස නොපෙනේ.', // {field} does not appear to be a valid credit card number.

	// Files
	'uploaded' => '{field} වලංගු uploaded ගොනුවක් නොවේ.', // {field} is not a valid uploaded file.
	'max_size' => '{field} ගොනුව විශාල වැඩියි.', // {field} is too large of a file.
	'is_image' => '{field} වලංගු uploaded රූප ගොනුවක් නොවේ.', // {field} is not a valid, uploaded image file.
	'mime_in'  => '{field} හි වලංගු mime type එකක් නොමැත.', // {field} does not have a valid mime type.
	'ext_in'   => '{field} ට වලංගු file extension එකක් නොමැත.', // {field} does not have a valid file extension.
	'max_dims' => '{field} එක්කෝ රූපයක් නොවේ, නැතහොත් එය ඉතා පළල් හෝ උසය.', // {field} is either not an image, or it is too wide or tall.
];
