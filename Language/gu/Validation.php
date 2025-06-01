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
    'noRuleSets'             => 'વેલિડેશન કન્ફિગરેશનમાં કોઈ નિયમ સેટ સ્પષ્ટ કરેલા નથી.',
    'ruleNotFound'           => '"{0}" માન્ય નિયમ નથી.',
    'groupNotFound'          => '"{0}" વેલિડેશન નિયમોનું જૂથ નથી.',
    'groupNotArray'          => '"{0}" નિયમ જૂથ એરે હોવું આવશ્યક છે.',
    'invalidTemplate'        => '"{0}" માન્ય વેલિડેશન ટેમ્પલેટ નથી.',

    // Rule Messages
    'alpha'                  => '{field} ફીલ્ડમાં ફક્ત આલ્ફાબેટિકલ અક્ષરો હોવા જોઈએ.',
    'alpha_dash'             => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક, અન્ડરસ્કોર અને ડેશ અક્ષરો હોવા જોઈએ.',
    'alpha_numeric'          => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક અક્ષરો હોવા જોઈએ.',
    'alpha_numeric_punct'    => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક અક્ષરો, જગ્યાઓ અને ~ ! # $ % & * - _ + = | : . અક્ષરો હોઈ શકે છે.',
    'alpha_numeric_space'    => '{field} ફીલ્ડમાં ફક્ત આલ્ફાન્યુમેરિક અને જગ્યા અક્ષરો હોવા જોઈએ.',
    'alpha_space'            => '{field} ફીલ્ડમાં ફક્ત આલ્ફાબેટિકલ અક્ષરો અને જગ્યાઓ હોવા જોઈએ.',
    'decimal'                => '{field} ફીલ્ડમાં દશાંશ સંખ્યા હોવી આવશ્યક છે.',
    'differs'                => '{field} ફીલ્ડ {param} ફીલ્ડથી અલગ હોવું જોઈએ.',
    'equals'                 => '{field} ફીલ્ડ બરાબર {param} હોવું આવશ્યક છે.',
    'exact_length'           => '{field} ફીલ્ડની લંબાઈ બરાબર {param} અક્ષરો હોવી આવશ્યક છે.',
    'field_exists'           => '{field} ફીલ્ડ અસ્તિત્વમાં હોવું આવશ્યક છે.',
    'greater_than'           => '{field} ફીલ્ડમાં {param} કરતાં મોટી સંખ્યા હોવી આવશ્યક છે.',
    'greater_than_equal_to'  => '{field} ફીલ્ડમાં {param} કરતાં મોટી અથવા તેના સમાન સંખ્યા હોવી આવશ્યક છે.',
    'hex'                    => '{field} ફીલ્ડમાં ફક્ત હેક્સાડેસિમલ અક્ષરો હોવા જોઈએ.',
    'in_list'                => '{field} ફીલ્ડ આમાંથી એક હોવું આવશ્યક છે: {param}.',
    'integer'                => '{field} ફીલ્ડમાં પૂર્ણાંક સંખ્યા હોવી આવશ્યક છે.',
    'is_natural'             => '{field} ફીલ્ડમાં ફક્ત અંકો હોવા જોઈએ.',
    'is_natural_no_zero'     => '{field} ફીલ્ડમાં ફક્ત અંકો હોવા જોઈએ અને તે શૂન્ય કરતાં મોટો હોવો જોઈએ.',
    'is_not_unique'          => '{field} ફીલ્ડમાં ડેટાબેઝમાં અગાઉથી અસ્તિત્વમાં રહેલું મૂલ્ય હોવું આવશ્યક છે.',
    'is_unique'              => '{field} ફીલ્ડમાં અનન્ય મૂલ્ય હોવું આવશ્યક છે.',
    'less_than'              => '{field} ફીલ્ડમાં {param} કરતાં નાની સંખ્યા હોવી આવશ્યક છે.',
    'less_than_equal_to'     => '{field} ફીલ્ડમાં {param} કરતાં નાની અથવા તેના સમાન સંખ્યા હોવી આવશ્યક છે.',
    'matches'                => '{field} ફીલ્ડ {param} ફીલ્ડ સાથે મેળ ખાતું નથી.',
    'max_length'             => '{field} ફીલ્ડની લંબાઈ {param} અક્ષરોથી વધુ ન હોવી જોઈએ.',
    'min_length'             => '{field} ફીલ્ડની લંબાઈ ઓછામાં ઓછી {param} અક્ષરો હોવી આવશ્યક છે.',
    'not_equals'             => '{field} ફીલ્ડ {param} ન હોઈ શકે.',
    'not_in_list'            => '{field} ફીલ્ડ આમાંથી એક ન હોવું જોઈએ: {param}.',
    'numeric'                => '{field} ફીલ્ડમાં ફક્ત સંખ્યાઓ હોવી જોઈએ.',
    'regex_match'            => '{field} ફીલ્ડ યોગ્ય ફોર્મેટમાં નથી.',
    'required'               => '{field} ફીલ્ડ આવશ્યક છે.',
    'required_with'          => 'જ્યારે {param} હાજર હોય ત્યારે {field} ફીલ્ડ આવશ્યક છે.',
    'required_without'       => 'જ્યારે {param} હાજર ન હોય ત્યારે {field} ફીલ્ડ આવશ્યક છે.',
    'string'                 => '{field} ફીલ્ડ માન્ય સ્ટ્રિંગ હોવી આવશ્યક છે.',
    'timezone'               => '{field} ફીલ્ડ માન્ય ટાઈમઝોન હોવું આવશ્યક છે.',
    'valid_base64'           => '{field} ફીલ્ડ માન્ય base64 સ્ટ્રિંગ હોવી આવશ્યક છે.',
    'valid_email'            => '{field} ફીલ્ડમાં માન્ય ઇમેઇલ સરનામું હોવું આવશ્યક છે.',
    'valid_emails'           => '{field} ફીલ્ડમાં તમામ માન્ય ઇમેઇલ સરનામાં હોવા આવશ્યક છે.',
    'valid_ip'               => '{field} ફીલ્ડમાં માન્ય IP હોવું આવશ્યક છે.',
    'valid_url'              => '{field} ફીલ્ડમાં માન્ય URL હોવું આવશ્યક છે.',
    'valid_url_strict'       => '{field} ફીલ્ડમાં માન્ય URL હોવું આવશ્યક છે.',
    'valid_date'             => '{field} ફીલ્ડમાં માન્ય તારીખ હોવી આવશ્યક છે.',
    'valid_json'             => '{field} ફીલ્ડમાં માન્ય JSON હોવું આવશ્યક છે.',

    // Credit Cards
    'valid_cc_num'           => '{field} માન્ય ક્રેડિટ કાર્ડ નંબર લાગતો નથી.',

    // Files
    'uploaded'               => '{field} માન્ય અપલોડ કરેલી ફાઇલ નથી.',
    'max_size'               => '{field} ખૂબ મોટી ફાઇલ છે.',
    'is_image'               => '{field} માન્ય, અપલોડ કરેલી છબી ફાઇલ નથી.',
    'mime_in'                => '{field} નો માન્ય માઇમ પ્રકાર નથી.',
    'ext_in'                 => '{field} નો માન્ય ફાઇલ એક્સ્ટેંશન નથી.',
    'max_dims'               => '{field} કાં તો છબી નથી, અથવા તે ખૂબ પહોળી કે ઊંચી છે.',
    'min_dims'               => '{field} કાં તો છબી નથી, અથવા તે પૂરતી પહોળી કે ઊંચી નથી.',
];
