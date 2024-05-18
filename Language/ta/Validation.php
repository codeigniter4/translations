<?php

declare(strict_types=1);

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
    'noRuleSets'      => 'சரிபார்ப்பு உள்ளமைவில் விதிகள் எதுவும் குறிப்பிடப்படவில்லை.', // 'No rule sets specified in Validation configuration.',
    'ruleNotFound'    => '"{0}" என்பது சரியான விதி அல்ல.', // '"{0}" is not a valid rule.',
    'groupNotFound'   => '"{0}" சரிபார்ப்பு விதிகள் குழு அல்ல.', // '"{0}" is not a validation rules group.',
    'groupNotArray'   => '"{0}" விதிக் குழு ஒரு அணியாக இருக்க வேண்டும்.', // '"{0}" rule group must be an array.',
    'invalidTemplate' => '"{0}" சரியான சரிபார்ப்பு டெம்ப்ளேட் அல்ல.', // '"{0}" is not a valid Validation template.',

    // Rule Messages
    'alpha'                 => '{field} புலத்தில் அகரவரிசை எழுத்துக்கள் மட்டுமே இருக்கலாம்.', // 'The {field} field may only contain alphabetical characters.',
    'alpha_dash'            => '{field} புலத்தில் எண்ணெழுத்து, அடிக்கோடி மற்றும் கோடு எழுத்துகள் மட்டுமே இருக்கலாம்.', // 'The {field} field may only contain alphanumeric, underscore, and dash characters.',
    'alpha_numeric'         => '{field} புலத்தில் எண்ணெழுத்து எழுத்துக்கள் மட்டுமே இருக்கலாம்.', // 'The {field} field may only contain alphanumeric characters.',
    'alpha_numeric_punct'   => '{field} புலமானது எண்ணெழுத்து எழுத்துக்கள், இடைவெளிகள் மற்றும் ~ ! # $ % & * - _ + = | : . எழுத்துக்களை கொண்டிருக்கலாம்.', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.',
    'alpha_numeric_space'   => '{field} புலமானது எண்ணெழுத்து மற்றும் இடைவெளி எழுத்துக்களை கொண்டிருக்கலாம்.', // 'The {field} field may only contain alphanumeric and space characters.',
    'alpha_space'           => '{field} புலத்தில் அகரவரிசை எழுத்துக்கள் மற்றும் இடைவெளிகள் கொண்டிருக்கலாம்.', // 'The {field} field may only contain alphabetical characters and spaces.',
    'decimal'               => '{field} புலத்தில் ஒரு தசம எண் இருக்க வேண்டும்.', // 'The {field} field must contain a decimal number.',
    'differs'               => '{field} புலம் {param} புலத்திலிருந்து வேறுபட வேண்டும்.', // 'The {field} field must differ from the {param} field.',
    'equals'                => '{field} புலம் சரியாக இருக்க வேண்டும்: {param}.', // 'The {field} field must be exactly: {param}.',
    'exact_length'          => '{field} புலம் சரியாக {param} எழுத்து நீளம் இருக்க வேண்டும்.', // 'The {field} field must be exactly {param} characters in length.',
    'field_exists'          => '{field} புலம் இருக்க வேண்டும்.', // 'The {field} field must exist.',
    'greater_than'          => '{field} புலத்தில் {param} ஐ விட பெரிய எண் இருக்க வேண்டும்.', // 'The {field} field must contain a number greater than {param}.',
    'greater_than_equal_to' => '{field} புலத்தில் {param} ஐ விட பெரிய அல்லது அதற்கு சமமான எண் இருக்க வேண்டும்.', // 'The {field} field must contain a number greater than or equal to {param}.',
    'hex'                   => '{field} புலத்தில் ஹெக்ஸாடெசிமல் எழுத்துக்கள் மட்டுமே இருக்கலாம்.', // 'The {field} field may only contain hexadecimal characters.',
    'in_list'               => '{field} புலம் இதில் ஒன்றாக இருக்க வேண்டும்: {param}.', // 'The {field} field must be one of: {param}.',
    'integer'               => '{field} புலத்தில் ஒரு முழு எண் இருக்க வேண்டும்.', // 'The {field} field must contain an integer.',
    'is_natural'            => '{field} புலத்தில் இலக்கங்கள் மட்டுமே இருக்க வேண்டும்.', // 'The {field} field must only contain digits.',
    'is_natural_no_zero'    => '{field} புலத்தில் இலக்கங்கள் மட்டுமே இருக்க வேண்டும் மற்றும் பூஜ்ஜியத்தை விட அதிகமாக இருக்க வேண்டும்.', // 'The {field} field must only contain digits and must be greater than zero.',
    'is_not_unique'         => '{field} புலம் தரவுத்தளத்தில் ஏற்கனவே உள்ள மதிப்பைக் கொண்டிருக்க வேண்டும்.', // 'The {field} field must contain a previously existing value in the database.',
    'is_unique'             => '{field} புலத்தில் ஒரு தனிப்பட்ட மதிப்பு இருக்க வேண்டும்.', // 'The {field} field must contain a unique value.',
    'less_than'             => '{field} புலத்தில் {param} ஐ விட குறைவான எண் இருக்க வேண்டும்.', // 'The {field} field must contain a number less than {param}.',
    'less_than_equal_to'    => '{field} புலத்தில் {param} ஐ விட குறைவான அல்லது சமமான எண் இருக்க வேண்டும்.', // 'The {field} field must contain a number less than or equal to {param}.',
    'matches'               => '{field} புலம் {param} புலத்துடன் பொருந்தவில்லை.', // 'The {field} field does not match the {param} field.',
    'max_length'            => '{field} புலத்தின் நீளம் {param} எழுத்துகளுக்கு மேல் இருக்கக்கூடாது.', // 'The {field} field cannot exceed {param} characters in length.',
    'min_length'            => '{field} புலம் குறைந்தபட்சம் {param} எழுத்துக்கள் நீளமாக இருக்க வேண்டும்.', // 'The {field} field must be at least {param} characters in length.',
    'not_equals'            => '{field} புலம் {param} ஆக இருக்க முடியாது.', // 'The {field} field cannot be: {param}.',
    'not_in_list'           => '{field} புலம் பின் வருவனவற்றில் ஒன்றாக இருக்கக்கூடாது: {param}.', // 'The {field} field must not be one of: {param}.',
    'numeric'               => '{field} புலத்தில் எண்கள் மட்டுமே இருக்க வேண்டும்.', // 'The {field} field must contain only numbers.',
    'regex_match'           => '{field} புலம் சரியான வடிவத்தில் இல்லை.', // 'The {field} field is not in the correct format.',
    'required'              => '{field} புலம் தேவை.', // 'The {field} field is required.',
    'required_with'         => '{param} இருக்கும் போது {field} புலம் தேவைப்படுகிறது.', // 'The {field} field is required when {param} is present.',
    'required_without'      => '{param} இல்லாத போது {field} புலம் தேவைப்படுகிறது.', // 'The {field} field is required when {param} is not present.',
    'string'                => '{field} புலம் சரியான சரமாக இருக்க வேண்டும்.', // 'The {field} field must be a valid string.',
    'timezone'              => '{field} புலம் சரியான நேர மண்டலமாக இருக்க வேண்டும்.', // 'The {field} field must be a valid timezone.',
    'valid_base64'          => '{field} புலம் சரியான base64 சரமாக இருக்க வேண்டும்.', // 'The {field} field must be a valid base64 string.',
    'valid_email'           => '{field} புலத்தில் சரியான மின்னஞ்சல் முகவரி இருக்க வேண்டும்.', // 'The {field} field must contain a valid email address.',
    'valid_emails'          => '{field} புலத்தில் அனைத்து சரியான மின்னஞ்சல் முகவரிகளும் இருக்க வேண்டும்.', // 'The {field} field must contain all valid email addresses.',
    'valid_ip'              => '{field} புலத்தில் சரியான IP இருக்க வேண்டும்.', // 'The {field} field must contain a valid IP.',
    'valid_url'             => '{field} புலத்தில் சரியான URL இருக்க வேண்டும்.', // 'The {field} field must contain a valid URL.',
    'valid_url_strict'      => '{field} புலத்தில் சரியான URL இருக்க வேண்டும்.', // 'The {field} field must contain a valid URL.',
    'valid_date'            => '{field} புலத்தில் சரியான தேதி இருக்க வேண்டும்.', // 'The {field} field must contain a valid date.',
    'valid_json'            => '{field} புலத்தில் சரியான json இருக்க வேண்டும்.', // 'The {field} field must contain a valid json.',

    // Credit Cards
    'valid_cc_num' => '{field} என்பது சரியான கிரெடிட் கார்டு எண்ணாகத் தெரியவில்லை.', // '{field} does not appear to be a valid credit card number.',

    // Files
    'uploaded' => '{field} சரியான பதிவேற்றிய கோப்பு அல்ல.', // '{field} is not a valid uploaded file.',
    'max_size' => '{field} ஒரு கோப்பில் மிகவும் பெரியது.', // '{field} is too large of a file.',
    'is_image' => '{field} சரியான, பதிவேற்றிய படக் கோப்பு அல்ல.', // '{field} is not a valid, uploaded image file.',
    'mime_in'  => '{field} இல் சரியான மைம் வகை இல்லை.', // '{field} does not have a valid mime type.',
    'ext_in'   => '{field} க்கு சரியான கோப்பு நீட்டிப்பு இல்லை.', // '{field} does not have a valid file extension.',
    'max_dims' => '{field} என்பது ஒரு படம் அல்ல, அல்லது அது மிகவும் அகலமானது அல்லது உயரமானது.', // '{field} is either not an image, or it is too wide or tall.',
];
