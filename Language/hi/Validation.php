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
    'noRuleSets'      => 'मान्यकरण कॉन्फ़िगरेशन में कोई नियम सेट निर्दिष्ट नहीं है।', // 'No rule sets specified in Validation configuration.'
    'ruleNotFound'    => '"{0}" एक मान्य नियम नहीं है।', // '"{0}" is not a valid rule.'
    'groupNotFound'   => '"{0}" एक मान्यकरण नियम समूह नहीं है।', // '"{0}" is not a validation rules group.'
    'groupNotArray'   => '"{0}" नियम समूह एक सरणी (array) होना चाहिए।', // '"{0}" rule group must be an array.'
    'invalidTemplate' => '"{0}" एक मान्य सत्यापन टेम्पलेट नहीं है।', // '"{0}" is not a valid Validation template.'

    // Rule Messages
    'alpha'                 => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण हो सकते हैं।', // 'The {field} field may only contain alphabetical characters.'
    'alpha_dash'            => '{field} फ़ील्ड में केवल अक्षरांकीय, अंडरस्कोर और डैश वर्ण हो सकते हैं।', // 'The {field} field may only contain alphanumeric, underscore, and dash characters.'
    'alpha_numeric'         => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण हो सकते हैं।', // 'The {field} field may only contain alphanumeric characters.'
    'alpha_numeric_punct'   => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण, रिक्त स्थान, और ~ ! # $ % & * - _ + = | : . वर्ण हो सकते हैं।', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.'
    'alpha_numeric_space'   => '{field} फ़ील्ड में केवल अक्षरांकीय और रिक्त स्थान वर्ण हो सकते हैं।', // 'The {field} field may only contain alphanumeric and space characters.'
    'alpha_space'           => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण और रिक्त स्थान हो सकते हैं।', // 'The {field} field may only contain alphabetical characters and spaces.'
    'decimal'               => '{field} फ़ील्ड में एक दशमलव संख्या होनी चाहिए।', // 'The {field} field must contain a decimal number.'
    'differs'               => '{field} फ़ील्ड {param} फ़ील्ड से भिन्न होना चाहिए।', // 'The {field} field must differ from the {param} field.'
    'equals'                => '{field} फ़ील्ड बिल्कुल: {param} होना चाहिए।', // 'The {field} field must be exactly: {param}.'
    'exact_length'          => '{field} फ़ील्ड की लंबाई ठीक {param} वर्ण होनी चाहिए।', // 'The {field} field must be exactly {param} characters in length.'
    'field_exists'          => '{field} फ़ील्ड मौजूद होना चाहिए।', // 'The {field} field must exist.'
    'greater_than'          => '{field} फ़ील्ड में {param} से बड़ी संख्या होनी चाहिए।', // 'The {field} field must contain a number greater than {param}.'
    'greater_than_equal_to' => '{field} फ़ील्ड में {param} से बड़ी या उसके बराबर संख्या होनी चाहिए।', // 'The {field} field must contain a number greater than or equal to {param}.'
    'hex'                   => '{field} फ़ील्ड में केवल हेक्साडेसिमल वर्ण हो सकते हैं।', // 'The {field} field may only contain hexadecimal characters.'
    'in_list'               => '{field} फ़ील्ड इनमें से एक होना चाहिए: {param}।', // 'The {field} field must be one of: {param}.'
    'integer'               => '{field} फ़ील्ड में एक पूर्णांक (integer) होना चाहिए।', // 'The {field} field must contain an integer.'
    'is_natural'            => '{field} फ़ील्ड में केवल अंक होने चाहिए।', // 'The {field} field must only contain digits.'
    'is_natural_no_zero'    => '{field} फ़ील्ड में केवल अंक होने चाहिए और शून्य से बड़ा होना चाहिए।', // 'The {field} field must only contain digits and must be greater than zero.'
    'is_not_unique'         => '{field} फ़ील्ड में डेटाबेस में पहले से मौजूद मान होना चाहिए।', // 'The {field} field must contain a previously existing value in the database.'
    'is_unique'             => '{field} फ़ील्ड में एक अद्वितीय मान होना चाहिए।', // 'The {field} field must contain a unique value.'
    'less_than'             => '{field} फ़ील्ड में {param} से कम संख्या होनी चाहिए।', // 'The {field} field must contain a number less than {param}.'
    'less_than_equal_to'    => '{field} फ़ील्ड में {param} से कम या उसके बराबर संख्या होनी चाहिए।', // 'The {field} field must contain a number less than or equal to {param}.'
    'matches'               => '{field} फ़ील्ड {param} फ़ील्ड से मेल नहीं खाता।', // 'The {field} field does not match the {param} field.'
    'max_length'            => '{field} फ़ील्ड की लंबाई {param} वर्णों से अधिक नहीं होनी चाहिए।', // 'The {field} field cannot exceed {param} characters in length.'
    'min_length'            => '{field} फ़ील्ड की लंबाई कम से कम {param} वर्ण होनी चाहिए।', // 'The {field} field must be at least {param} characters in length.'
    'not_equals'            => '{field} फ़ील्ड यह नहीं हो सकता: {param}।', // 'The {field} field cannot be: {param}.'
    'not_in_list'           => '{field} फ़ील्ड इनमें से एक नहीं होना चाहिए: {param}।', // 'The {field} field must not be one of: {param}.'
    'numeric'               => '{field} फ़ील्ड में केवल संख्याएँ होनी चाहिए।', // 'The {field} field must contain only numbers.'
    'regex_match'           => '{field} फ़ील्ड सही प्रारूप में नहीं है।', // 'The {field} field is not in the correct format.'
    'required'              => '{field} फ़ील्ड आवश्यक है।', // 'The {field} field is required.'
    'required_with'         => '{field} फ़ील्ड आवश्यक है जब {param} मौजूद हो।', // 'The {field} field is required when {param} is present.'
    'required_without'      => '{field} फ़ील्ड आवश्यक है जब {param} मौजूद न हो।', // 'The {field} field is required when {param} is not present.'
    'string'                => '{field} फ़ील्ड एक मान्य स्ट्रिंग होना चाहिए।', // 'The {field} field must be a valid string.'
    'timezone'              => '{field} फ़ील्ड एक मान्य समय क्षेत्र (timezone) होना चाहिए।', // 'The {field} field must be a valid timezone.'
    'valid_base64'          => '{field} फ़ील्ड एक मान्य base64 स्ट्रिंग होना चाहिए।', // 'The {field} field must be a valid base64 string.'
    'valid_email'           => '{field} फ़ील्ड में एक मान्य ईमेल पता होना चाहिए।', // 'The {field} field must contain a valid email address.'
    'valid_emails'          => '{field} फ़ील्ड में सभी मान्य ईमेल पते होने चाहिए।', // 'The {field} field must contain all valid email addresses.'
    'valid_ip'              => '{field} फ़ील्ड में एक मान्य IP होना चाहिए।', // 'The {field} field must contain a valid IP.'
    'valid_url'             => '{field} फ़ील्ड में एक मान्य URL होना चाहिए।', // 'The {field} field must contain a valid URL.'
    'valid_url_strict'      => '{field} फ़ील्ड में एक मान्य URL होना चाहिए।', // 'The {field} field must contain a valid URL.'
    'valid_date'            => '{field} फ़ील्ड में एक मान्य दिनांक होनी चाहिए।', // 'The {field} field must contain a valid date.'
    'valid_json'            => '{field} फ़ील्ड में एक मान्य JSON होना चाहिए।', // 'The {field} field must contain a valid json.'

    // Credit Cards
    'valid_cc_num' => '{field} एक मान्य क्रेडिट कार्ड नंबर प्रतीत नहीं होता है।', // '{field} does not appear to be a valid credit card number.'

    // Files
    'uploaded' => '{field} एक मान्य अपलोड की गई फ़ाइल नहीं है।', // '{field} is not a valid uploaded file.'
    'max_size' => '{field} बहुत बड़ी फ़ाइल है।', // '{field} is too large of a file.'
    'is_image' => '{field} एक मान्य, अपलोड की गई छवि फ़ाइल नहीं है।', // '{field} is not a valid, uploaded image file.'
    'mime_in'  => '{field} का एक मान्य माईम प्रकार (mime type) नहीं है।', // '{field} does not have a valid mime type.'
    'ext_in'   => '{field} का एक मान्य फ़ाइल एक्सटेंशन नहीं है।', // '{field} does not have a valid file extension.'
    'max_dims' => '{field} या तो एक छवि नहीं है, या यह बहुत चौड़ी या लंबी है।', // '{field} is either not an image, or it is too wide or tall.'
    'min_dims' => '{field} या तो एक छवि नहीं है, या यह पर्याप्त चौड़ी या लंबी नहीं है।', // '{field} is either not an image, or it is not wide or tall enough.'
];
