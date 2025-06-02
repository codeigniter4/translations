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
    'noRuleSets'      => 'વેલિડેશન કન્ફિગરેશનમાં કોઈ નિયમ સેટ સ્પષ્ટ કરેલા નથી.', // 'No rule sets specified in Validation configuration.'
    'ruleNotFound'    => '"{0}" માન્ય નિયમ નથી.', // '"{0}" is not a valid rule.'
    'groupNotFound'   => '"{0}" વેલિડેશન નિયમોનું જૂથ નથી.', // '"{0}" is not a validation rules group.'
    'groupNotArray'   => '"{0}" નિયમ જૂથ એરે હોવું આવશ્યક છે.', // '"{0}" rule group must be an array.'
    'invalidTemplate' => '"{0}" માન્ય વેલિડેશન ટેમ્પલેટ નથી.', // '"{0}" is not a valid Validation template.'

    // Rule Messages
    'alpha'                 => '{field} ફીલ્ડમાં ફક્ત આલ્ફાબેટિકલ અક્ષરો હોવા જોઈએ.', // 'The {field} field may only contain alphabetical characters.'
    'alpha_dash'            => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક, અન્ડરસ્કોર અને ડેશ અક્ષરો હોવા જોઈએ.', // 'The {field} field may only contain alphanumeric, underscore, and dash characters.'
    'alpha_numeric'         => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક અક્ષરો હોવા જોઈએ.', // 'The {field} field may only contain alphanumeric characters.'
    'alpha_numeric_punct'   => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક અક્ષરો, જગ્યાઓ અને ~ ! # $ % & * - _ + = | : . અક્ષરો હોઈ શકે છે.', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.'
    'alpha_numeric_space'   => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક અને જગ્યા અક્ષરો હોવા જોઈએ.', // 'The {field} field may only contain alphanumeric and space characters.'
    'alpha_space'           => '{field} ફીલ્ડમાં ફક્ત આલ્ફાબેટિકલ અક્ષરો અને જગ્યાઓ હોવા જોઈએ.', // 'The {field} field may only contain alphabetical characters and spaces.'
    'decimal'               => '{field} ફીલ્ડમાં દશાંશ સંખ્યા હોવી આવશ્યક છે.', // 'The {field} field must contain a decimal number.'
    'differs'               => '{field} ફીલ્ડ {param} ફીલ્ડથી અલગ હોવું જોઈએ.', // 'The {field} field must differ from the {param} field.'
    'equals'                => '{field} ફીલ્ડ બરાબર {param} હોવું આવશ્યક છે.', // 'The {field} field must be exactly: {param}.'
    'exact_length'          => '{field} ફીલ્ડની લંબાઈ બરાબર {param} અક્ષરો હોવી આવશ્યક છે.', // 'The {field} field must be exactly {param} characters in length.'
    'field_exists'          => '{field} ફીલ્ડ અસ્તિત્વમાં હોવું આવશ્યક છે.', // 'The {field} field must exist.'
    'greater_than'          => '{field} ફીલ્ડમાં {param} કરતાં મોટી સંખ્યા હોવી આવશ્યક છે.', // 'The {field} field must contain a number greater than {param}.'
    'greater_than_equal_to' => '{field} ફીલ્ડમાં {param} કરતાં મોટી અથવા તેના સમાન સંખ્યા હોવી આવશ્યક છે.', // 'The {field} field must contain a number greater than or equal to {param}.'
    'hex'                   => '{field} ફીલ્ડમાં ફક્ત હેક્સાડેસિમલ અક્ષરો હોવા જોઈએ.', // 'The {field} field may only contain hexadecimal characters.'
    'in_list'               => '{field} ફીલ્ડ આમાંથી એક હોવું આવશ્યક છે: {param}.', // 'The {field} field must be one of: {param}.'
    'integer'               => '{field} ફીલ્ડમાં પૂર્ણાંક સંખ્યા હોવી આવશ્યક છે.', // 'The {field} field must contain an integer.'
    'is_natural'            => '{field} ફીલ્ડમાં ફક્ત અંકો હોવા જોઈએ.', // 'The {field} field must only contain digits.'
    'is_natural_no_zero'    => '{field} ફીલ્ડમાં ફક્ત અંકો હોવા જોઈએ અને તે શૂન્ય કરતાં મોટો હોવો જોઈએ.', // 'The {field} field must only contain digits and must be greater than zero.'
    'is_not_unique'         => '{field} ફીલ્ડમાં ડેટાબેઝમાં અગાઉથી અસ્તિત્વમાં રહેલું મૂલ્ય હોવું આવશ્યક છે.', // 'The {field} field must contain a previously existing value in the database.'
    'is_unique'             => '{field} ફીલ્ડમાં અનન્ય મૂલ્ય હોવું આવશ્યક છે.', // 'The {field} field must contain a unique value.'
    'less_than'             => '{field} ફીલ્ડમાં {param} કરતાં નાની સંખ્યા હોવી આવશ્યક છે.', // 'The {field} field must contain a number less than {param}.'
    'less_than_equal_to'    => '{field} ફીલ્ડમાં {param} કરતાં નાની અથવા તેના સમાન સંખ્યા હોવી આવશ્યક છે.', // 'The {field} field must contain a number less than or equal to {param}.'
    'matches'               => '{field} ફીલ્ડ {param} ફીલ્ડ સાથે મેળ ખાતું નથી.', // 'The {field} field does not match the {param} field.'
    'max_length'            => '{field} ફીલ્ડની લંબાઈ {param} અક્ષરોથી વધુ ન હોવી જોઈએ.', // 'The {field} field cannot exceed {param} characters in length.'
    'min_length'            => '{field} ફીલ્ડની લંબાઈ ઓછામાં ઓછી {param} અક્ષરો હોવી આવશ્યક છે.', // 'The {field} field must be at least {param} characters in length.'
    'not_equals'            => '{field} ફીલ્ડ {param} ન હોઈ શકે.', // 'The {field} field cannot be: {param}.'
    'not_in_list'           => '{field} ફીલ્ડ આમાંથી એક ન હોવું જોઈએ: {param}.', // 'The {field} field must not be one of: {param}.'
    'numeric'               => '{field} ફીલ્ડમાં ફક્ત સંખ્યાઓ હોવી જોઈએ.', // 'The {field} field must contain only numbers.'
    'regex_match'           => '{field} ફીલ્ડ યોગ્ય ફોર્મેટમાં નથી.', // 'The {field} field is not in the correct format.'
    'required'              => '{field} ફીલ્ડ આવશ્યક છે.', // 'The {field} field is required.'
    'required_with'         => 'જ્યારે {param} હાજર હોય ત્યારે {field} ફીલ્ડ આવશ્યક છે.', // 'The {field} field is required when {param} is present.'
    'required_without'      => 'જ્યારે {param} હાજર ન હોય ત્યારે {field} ફીલ્ડ આવશ્યક છે.', // 'The {field} field is required when {param} is not present.'
    'string'                => '{field} ફીલ્ડ માન્ય સ્ટ્રિંગ હોવી આવશ્યક છે.', // 'The {field} field must be a valid string.'
    'timezone'              => '{field} ફીલ્ડ માન્ય ટાઈમઝોન હોવું આવશ્યક છે.', // 'The {field} field must be a valid timezone.'
    'valid_base64'          => '{field} ફીલ્ડ માન્ય base64 સ્ટ્રિંગ હોવી આવશ્યક છે.', // 'The {field} field must be a valid base64 string.'
    'valid_email'           => '{field} ફીલ્ડમાં માન્ય ઇમેઇલ સરનામું હોવું આવશ્યક છે.', // 'The {field} field must contain a valid email address.'
    'valid_emails'          => '{field} ફીલ્ડમાં તમામ માન્ય ઇમેઇલ સરનામાં હોવા આવશ્યક છે.', // 'The {field} field must contain all valid email addresses.'
    'valid_ip'              => '{field} ફીલ્ડમાં માન્ય IP હોવું આવશ્યક છે.', // 'The {field} field must contain a valid IP.'
    'valid_url'             => '{field} ફીલ્ડમાં માન્ય URL હોવું આવશ્યક છે.', // 'The {field} field must contain a valid URL.'
    'valid_url_strict'      => '{field} ફીલ્ડમાં માન્ય URL હોવું આવશ્યક છે.', // 'The {field} field must contain a valid URL.'
    'valid_date'            => '{field} ફીલ્ડમાં માન્ય તારીખ હોવી આવશ્યક છે.', // 'The {field} field must contain a valid date.'
    'valid_json'            => '{field} ફીલ્ડમાં માન્ય JSON હોવું આવશ્યક છે.', // 'The {field} field must contain a valid json.'

    // Credit Cards
    'valid_cc_num' => '{field} માન્ય ક્રેડિટ કાર્ડ નંબર લાગતો નથી.', // '{field} does not appear to be a valid credit card number.'

    // Files
    'uploaded' => '{field} માન્ય અપલોડ કરેલી ફાઇલ નથી.', // '{field} is not a valid uploaded file.'
    'max_size' => '{field} ખૂબ મોટી ફાઇલ છે.', // '{field} is too large of a file.'
    'is_image' => '{field} માન્ય, અપલોડ કરેલી છબી ફાઇલ નથી.', // '{field} is not a valid, uploaded image file.'
    'mime_in'  => '{field} નો માન્ય માઇમ પ્રકાર નથી.', // '{field} does not have a valid mime type.'
    'ext_in'   => '{field} નો માન્ય ફાઇલ એક્સ્ટેંશન નથી.', // '{field} does not have a valid file extension.'
    'max_dims' => '{field} કાં તો છબી નથી, અથવા તે ખૂબ પહોળી કે ઊંચી છે.', // '{field} is either not an image, or it is too wide or tall.'
    'min_dims' => '{field} કાં તો છબી નથી, અથવા તે પૂરતી પહોળી કે ઊંચી નથી.', // '{field} is either not an image, or it is not wide or tall enough.'
];
