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
    'noRuleSets'      => 'मान्यकरण कॉन्फ़िगरेशन में कोई नियम सेट निर्दिष्ट नहीं है।',
    'ruleNotFound'    => '"{0}" एक मान्य नियम नहीं है।',
    'groupNotFound'   => '"{0}" एक मान्यकरण नियम समूह नहीं है।',
    'groupNotArray'   => '"{0}" नियम समूह एक सरणी (array) होना चाहिए।',
    'invalidTemplate' => '"{0}" एक मान्य सत्यापन टेम्पलेट नहीं है।',

    // Rule Messages
    'alpha'                 => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण हो सकते हैं।',
    'alpha_dash'            => '{field} फ़ील्ड में केवल अक्षरांकीय, अंडरस्कोर और डैश वर्ण हो सकते हैं।',
    'alpha_numeric'         => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण हो सकते हैं।',
    'alpha_numeric_punct'   => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण, रिक्त स्थान, और ~ ! # $ % & * - _ + = | : . वर्ण हो सकते हैं।',
    'alpha_numeric_space'   => '{field} फ़ील्ड में केवल अक्षरांकीय और रिक्त स्थान वर्ण हो सकते हैं।',
    'alpha_space'           => '{field} फ़ील्ड में केवल अक्षरांकीय वर्ण और रिक्त स्थान हो सकते हैं।',
    'decimal'               => '{field} फ़ील्ड में एक दशमलव संख्या होनी चाहिए।',
    'differs'               => '{field} फ़ील्ड {param} फ़ील्ड से भिन्न होना चाहिए।',
    'equals'                => '{field} फ़ील्ड बिल्कुल: {param} होना चाहिए।',
    'exact_length'          => '{field} फ़ील्ड की लंबाई ठीक {param} वर्ण होनी चाहिए।',
    'field_exists'          => '{field} फ़ील्ड मौजूद होना चाहिए।',
    'greater_than'          => '{field} फ़ील्ड में {param} से बड़ी संख्या होनी चाहिए।',
    'greater_than_equal_to' => '{field} फ़ील्ड में {param} से बड़ी या उसके बराबर संख्या होनी चाहिए।',
    'hex'                   => '{field} फ़ील्ड में केवल हेक्साडेसिमल वर्ण हो सकते हैं।',
    'in_list'               => '{field} फ़ील्ड इनमें से एक होना चाहिए: {param}।',
    'integer'               => '{field} फ़ील्ड में एक पूर्णांक (integer) होना चाहिए।',
    'is_natural'            => '{field} फ़ील्ड में केवल अंक होने चाहिए।',
    'is_natural_no_zero'    => '{field} फ़ील्ड में केवल अंक होने चाहिए और शून्य से बड़ा होना चाहिए।',
    'is_not_unique'         => '{field} फ़ील्ड में डेटाबेस में पहले से मौजूद मान होना चाहिए।',
    'is_unique'             => '{field} फ़ील्ड में एक अद्वितीय मान होना चाहिए।',
    'less_than'             => '{field} फ़ील्ड में {param} से कम संख्या होनी चाहिए।',
    'less_than_equal_to'    => '{field} फ़ील्ड में {param} से कम या उसके बराबर संख्या होनी चाहिए।',
    'matches'               => '{field} फ़ील्ड {param} फ़ील्ड से मेल नहीं खाता।',
    'max_length'            => '{field} फ़ील्ड की लंबाई {param} वर्णों से अधिक नहीं होनी चाहिए।',
    'min_length'            => '{field} फ़ील्ड की लंबाई कम से कम {param} वर्ण होनी चाहिए।',
    'not_equals'            => '{field} फ़ील्ड यह नहीं हो सकता: {param}।',
    'not_in_list'           => '{field} फ़ील्ड इनमें से एक नहीं होना चाहिए: {param}।',
    'numeric'               => '{field} फ़ील्ड में केवल संख्याएँ होनी चाहिए।',
    'regex_match'           => '{field} फ़ील्ड सही प्रारूप में नहीं है।',
    'required'              => '{field} फ़ील्ड आवश्यक है।',
    'required_with'         => '{field} फ़ील्ड आवश्यक है जब {param} मौजूद हो।',
    'required_without'      => '{field} फ़ील्ड आवश्यक है जब {param} मौजूद न हो।',
    'string'                => '{field} फ़ील्ड एक मान्य स्ट्रिंग होना चाहिए।',
    'timezone'              => '{field} फ़ील्ड एक मान्य समय क्षेत्र (timezone) होना चाहिए।',
    'valid_base64'          => '{field} फ़ील्ड एक मान्य base64 स्ट्रिंग होना चाहिए।',
    'valid_email'           => '{field} फ़ील्ड में एक मान्य ईमेल पता होना चाहिए।',
    'valid_emails'          => '{field} फ़ील्ड में सभी मान्य ईमेल पते होने चाहिए।',
    'valid_ip'              => '{field} फ़ील्ड में एक मान्य IP होना चाहिए।',
    'valid_url'             => '{field} फ़ील्ड में एक मान्य URL होना चाहिए।',
    'valid_url_strict'      => '{field} फ़ील्ड में एक मान्य URL होना चाहिए।',
    'valid_date'            => '{field} फ़ील्ड में एक मान्य दिनांक होनी चाहिए।',
    'valid_json'            => '{field} फ़ील्ड में एक मान्य JSON होना चाहिए।',

    // Credit Cards
    'valid_cc_num' => '{field} एक मान्य क्रेडिट कार्ड नंबर प्रतीत नहीं होता है।',

    // Files
    'uploaded' => '{field} एक मान्य अपलोड की गई फ़ाइल नहीं है।',
    'max_size' => '{field} बहुत बड़ी फ़ाइल है।',
    'is_image' => '{field} एक मान्य, अपलोड की गई छवि फ़ाइल नहीं है।',
    'mime_in'  => '{field} का एक मान्य माईम प्रकार (mime type) नहीं है।',
    'ext_in'   => '{field} का एक मान्य फ़ाइल एक्सटेंशन नहीं है।',
    'max_dims' => '{field} या तो एक छवि नहीं है, या यह बहुत चौड़ी या लंबी है।',
    'min_dims' => '{field} या तो एक छवि नहीं है, या यह पर्याप्त चौड़ी या लंबी नहीं है।',
];
