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
    'noRuleSets'      => 'Validation configuration मध्ये कोणतेही rule sets दिलेले नाहीत.', // 'No rule sets specified in Validation configuration.'
    'ruleNotFound'    => '"{0}" हा वैध rule नाही.', // '"{0}" is not a valid rule.'
    'groupNotFound'   => '"{0}" हा validation rules group नाही.', // '"{0}" is not a validation rules group.'
    'groupNotArray'   => '"{0}" rule group हा array असणे आवश्यक आहे.', // '"{0}" rule group must be an array.'
    'invalidTemplate' => '"{0}" हा वैध Validation template नाही.', // '"{0}" is not a valid Validation template.'

    // Rule Messages
    'alpha'                 => '{field} field मध्ये फक्त अक्षरे असू शकतात.', // 'The {field} field may only contain alphabetical characters.'
    'alpha_dash'            => '{field} field मध्ये फक्त अक्षरांक, underscore आणि dash असू शकतात.', // 'The {field} field may only contain alphanumeric, underscore, and dash characters.'
    'alpha_numeric'         => '{field} field मध्ये फक्त अक्षरांक असू शकतात.', // 'The {field} field may only contain alphanumeric characters.'
    'alpha_numeric_punct'   => '{field} field मध्ये फक्त अक्षरांक, spaces आणि  ~ ! # $ % & * - _ + = | : . ही चिन्हे असू शकतात.', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.'
    'alpha_numeric_space'   => '{field} field मध्ये फक्त अक्षरांक आणि spaces असू शकतात.', // 'The {field} field may only contain alphanumeric and space characters.'
    'alpha_space'           => '{field} field मध्ये फक्त अक्षरे आणि spaces असू शकतात.', // 'The {field} field may only contain alphabetical characters and spaces.'
    'decimal'               => '{field} field मध्ये दशांश संख्या असणे आवश्यक आहे.', // 'The {field} field must contain a decimal number.'
    'differs'               => '{field} field हे {param} field पेक्षा वेगळे असणे आवश्यक आहे.', // 'The {field} field must differ from the {param} field.'
    'equals'                => '{field} field हे नेमके: {param} असणे आवश्यक आहे.', // 'The {field} field must be exactly: {param}.'
    'exact_length'          => '{field} field ची लांबी नेमकी {param} अक्षरांची असणे आवश्यक आहे.', // 'The {field} field must be exactly {param} characters in length.'
    'field_exists'          => '{field} field अस्तित्वात असणे आवश्यक आहे.', // 'The {field} field must exist.'
    'greater_than'          => '{field} field मध्ये {param} पेक्षा मोठी संख्या असणे आवश्यक आहे.', // 'The {field} field must contain a number greater than {param}.'
    'greater_than_equal_to' => '{field} field मध्ये {param} पेक्षा मोठी किंवा त्यासम संख्या असणे आवश्यक आहे.', // 'The {field} field must contain a number greater than or equal to {param}.'
    'hex'                   => '{field} field मध्ये फक्त hexadecimal अक्षरे असू शकतात.', // 'The {field} field may only contain hexadecimal characters.'
    'in_list'               => '{field} field हे यापैकी एक असणे आवश्यक आहे: {param}.', // 'The {field} field must be one of: {param}.'
    'integer'               => '{field} field मध्ये integer असणे आवश्यक आहे.', // 'The {field} field must contain an integer.'
    'is_natural'            => '{field} field मध्ये फक्त अंक असणे आवश्यक आहे.', // 'The {field} field must only contain digits.'
    'is_natural_no_zero'    => '{field} field मध्ये फक्त अंक असणे आवश्यक आहे आणि ते शून्यापेक्षा मोठे असले पाहिजे.', // 'The {field} field must only contain digits and must be greater than zero.'
    'is_not_unique'         => '{field} field मध्ये डेटाबेसमध्ये आधीपासून अस्तित्वात असलेले मूल्य असणे आवश्यक आहे.', // 'The {field} field must contain a previously existing value in the database.'
    'is_unique'             => '{field} field मध्ये unique मूल्य असणे आवश्यक आहे.', // 'The {field} field must contain a unique value.'
    'less_than'             => '{field} field मध्ये {param} पेक्षा कमी संख्या असणे आवश्यक आहे.', // 'The {field} field must contain a number less than {param}.'
    'less_than_equal_to'    => '{field} field मध्ये {param} पेक्षा कमी किंवा त्यासम संख्या असणे आवश्यक आहे.', // 'The {field} field must contain a number less than or equal to {param}.'
    'matches'               => '{field} field हे {param} field शी जुळत नाही.', // 'The {field} field does not match the {param} field.'
    'max_length'            => '{field} field ची लांबी {param} अक्षरांपेक्षा जास्त असू शकत नाही.', // 'The {field} field cannot exceed {param} characters in length.'
    'min_length'            => '{field} field ची लांबी किमान {param} अक्षरांची असणे आवश्यक आहे.', // 'The {field} field must be at least {param} characters in length.'
    'not_equals'            => '{field} field हे {param} असू शकत नाही.', // 'The {field} field cannot be: {param}.'
    'not_in_list'           => '{field} field हे यापैकी एक असू नये: {param}.', // 'The {field} field must not be one of: {param}.'
    'numeric'               => '{field} field मध्ये फक्त संख्या असणे आवश्यक आहे.', // 'The {field} field must contain only numbers.'
    'regex_match'           => '{field} field योग्य format मध्ये नाही.', // 'The {field} field is not in the correct format.'
    'required'              => '{field} field आवश्यक आहे.', // 'The {field} field is required.'
    'required_with'         => '{param} उपस्थित असताना {field} field आवश्यक आहे.', // 'The {field} field is required when {param} is present.'
    'required_without'      => '{param} उपस्थित नसताना {field} field आवश्यक आहे.', // 'The {field} field is required when {param} is not present.'
    'string'                => '{field} field ही वैध string असणे आवश्यक आहे.', // 'The {field} field must be a valid string.'
    'timezone'              => '{field} field हा वैध timezone असणे आवश्यक आहे.', // 'The {field} field must be a valid timezone.'
    'valid_base64'          => '{field} field ही वैध base64 string असणे आवश्यक आहे.', // 'The {field} field must be a valid base64 string.'
    'valid_email'           => '{field} field मध्ये वैध email address असणे आवश्यक आहे.', // 'The {field} field must contain a valid email address.'
    'valid_emails'          => '{field} field मध्ये सर्व email addresses वैध असणे आवश्यक आहे.', // 'The {field} field must contain all valid email addresses.'
    'valid_ip'              => '{field} field मध्ये वैध IP असणे आवश्यक आहे.', // 'The {field} field must contain a valid IP.'
    'valid_url'             => '{field} field मध्ये वैध URL असणे आवश्यक आहे.', // 'The {field} field must contain a valid URL.'
    'valid_url_strict'      => '{field} field मध्ये वैध URL असणे आवश्यक आहे.', // 'The {field} field must contain a valid URL.'
    'valid_date'            => '{field} field मध्ये वैध दिनांक असणे आवश्यक आहे.', // 'The {field} field must contain a valid date.'
    'valid_json'            => '{field} field मध्ये वैध json असणे आवश्यक आहे.', // 'The {field} field must contain a valid json.'

    // Credit Cards
    'valid_cc_number' => '{field} हा वैध credit card number वाटत नाही.', // '{field} does not appear to be a valid credit card number.'

    // Files
    'uploaded' => '{field} ही वैध uploaded file नाही.', // '{field} is not a valid uploaded file.'
    'max_size' => '{field} फाइल खूप मोठी आहे.', // '{field} is too large of a file.'
    'is_image' => '{field} ही वैध uploaded image file नाही.', // '{field} is not a valid, uploaded image file.'
    'mime_in'  => '{field} चा mime type वैध नाही.', // '{field} does not have a valid mime type.'
    'ext_in'   => '{field} चा file extension वैध नाही.', // '{field} does not have a valid file extension.'
    'max_dims' => '{field} ही image नाही, किंवा ती खूप रुंद किंवा उंच आहे.', // '{field} is either not an image, or it is too wide or tall.'
    'min_dims' => '{field} ही image नाही, किंवा ती पुरेशी रुंद किंवा उंच नाही.', // '{field} is either not an image, or it is not wide or tall enough.'
];
