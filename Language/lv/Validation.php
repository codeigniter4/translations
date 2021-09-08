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
    'noRuleSets'      => 'Validācijas iestatījumos nav norādīts noteikumu kopums.', // 'No rulesets specified in Validation configuration.'
    'ruleNotFound'    => '{0} nav derīgs noteikums.', // '{0} is not a valid rule.'
    'groupNotFound'   => '{0} nav validācijas noteikumu grupa.', // '{0} is not a validation rules group.'
    'groupNotArray'   => '{0} noteikumu grupai ir jābūt masīvam.', // '{0} rule group must be an array.'
    'invalidTemplate' => '{0} nav derīga validācijas veidne.', // '{0} is not a valid Validation template.'

    // Rule Messages
    'alpha'                 => 'Lauka {field} vērtība drīkst saturēt tikai alfabētiskas rakstzīmes.', // 'The {field} field may only contain alphabetical characters.'
    'alpha_dash'            => 'Lauka {field} vērtība drīkst saturēt tikai burtu, ciparu, apakšsvītras un domuzīmes rakstzīmes.', // 'The {field} field may only contain alphanumeric, underscore, and dash characters.'
    'alpha_numeric'         => 'Lauka {field} vērtība drīkst saturēt tikai burtu un ciparu rakstzīmes.', // 'The {field} field may only contain alphanumeric characters.'
    'alpha_numeric_punct'   => 'Lauka {field} vērtība drīkst saturēt tikai burtu un ciparu rakstzīmes, atstarpes un ~ ! # $ % & * - _ + = | : . rakstzīmes.', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.'
    'alpha_numeric_space'   => 'Lauka {field} vērtība drīkst saturēt tikai burtu, ciparu un atstarpes rakstzīmes.', // 'The {field} field may only contain alphanumeric and space characters.'
    'alpha_space'           => 'Lauka {field} vērtība drīkst saturēt tikai alfabētiskas rakstzīmes un atstarpes.', // 'The {field} field may only contain alphabetical characters and spaces.'
    'decimal'               => 'Lauka {field} vērtība drīkst saturēt tikai decimālskaitli.', // 'The {field} field must contain a decimal number.'
    'differs'               => 'Lauka {field} vērtībai ir jābūt savādākaai nekā {param} lauka vērtībai.', // 'The {field} field must differ from the {param} field.'
    'equals'                => 'Lauka {field} vērtībai ir jābūt precīzi: {param}.', // 'The {field} field must be exactly: {param}.'
    'exact_length'          => 'Lauka {field} vērtībai ir jābūt precīzi {param} rakstzīmju garumā.', // 'The {field} field must be exactly {param} characters in length.'
    'greater_than'          => 'Lauka {field} vērtībai ir jābūt ciparam lielākam par {param}.', // 'The {field} field must contain a number greater than {param}.'
    'greater_than_equal_to' => 'Lauka {field} vērtībai ir jābūt ciparam vienādam vai lielākam par {param}.', // 'The {field} field must contain a number greater than or equal to {param}.'
    'hex'                   => 'Lauka {field} vērtībai drīkst saturēt tikai heksadecimālas rakstzīmes.', // 'The {field} field may only contain hexidecimal characters.'
    'in_list'               => 'Lauka {field} vērtībai ir jābūt vienai no: {param}.', // 'The {field} field must be one of: {param}.'
    'integer'               => 'Lauka {field} vērtība drīkst saturēt tikai veselu skaitli.', // 'The {field} field must contain an integer.'
    'is_natural'            => 'Lauka {field} vērtība drīkst saturēt tikai ciparus.', // 'The {field} field must only contain digits.'
    'is_natural_no_zero'    => 'Lauka {field} vērtība drīkst saturēt tikai ciparus un ir jābūt lielākai par nulli.', // 'The {field} field must only contain digits and must be greater than zero.'
    'is_not_unique'         => 'Lauka {field} vērtība drīkst saturēt tikai iepriekšējo vērtību no datu bāzes.', // 'The {field} field must contain a previously existing value in the database.'
    'is_unique'             => 'Lauka {field} vērtība drīkst saturēt tikai unikālu vērtību.', // 'The {field} field must contain a unique value.'
    'less_than'             => 'Lauka {field} vērtībai ir jābūt ciparam mazākam par {param}.', // 'The {field} field must contain a number less than {param}.'
    'less_than_equal_to'    => 'Lauka {field} vērtībai ir jābūt ciparam vienādam vai mazākam par {param}.', // 'The {field} field must contain a number less than or equal to {param}.'
    'matches'               => 'Lauka {field} vērtība nesakrīt ar {param} lauka vērtību.', // 'The {field} field does not match the {param} field.'
    'max_length'            => 'Lauka {field} vērtība nedrīkst būt garāka par {param} rakstzīmēm.', // 'The {field} field cannot exceed {param} characters in length.'
    'min_length'            => 'Lauka {field} vērtībai ir jābūt vismaz {param} rakstzīmju garumā.', // 'The {field} field must be at least {param} characters in length.'
    'not_equals'            => 'Lauka {field} vērtība nedrīkst būt: {param}.', // 'The {field} field cannot be: {param}.'
    'not_in_list'           => 'Lauka {field} vērtība nedrīkst būt viena no: {param}.', // 'The {field} field must not be one of: {param}.'
    'numeric'               => 'Lauka {field} vērtībai ir jāsatur tikai cipari.', // 'The {field} field must contain only numbers.'
    'regex_match'           => 'Lauka {field} vērtība nav pareizā formātā.', // 'The {field} field is not in the correct format.'
    'required'              => 'Lauka {field} vērtība ir obligāta.', // 'The {field} field is required.'
    'required_with'         => 'Lauka {field} vērtība ir obligāta, ja {param} lauka vērtība ir norādīta.', // 'The {field} field is required when {param} is present.'
    'required_without'      => 'Lauka {field} vērtība ir obligāta, ja {param} lauka vērtība nav norādīta.', // 'The {field} field is required when {param} is not present.'
    'string'                => 'Lauka {field} vērtībai ir jābūt virknei.', // 'The {field} field must be a valid string.'
    'timezone'              => 'Lauka {field} vērtībai ir jābūt laika zonai.', // 'The {field} field must be a valid timezone.'
    'valid_base64'          => 'Lauka {field} vērtībai ir jābūt `base64` virknei.', // 'The {field} field must be a valid base64 string.'
    'valid_email'           => 'Lauka {field} vērtībai ir jābūt e-pasta adresei.', // 'The {field} field must contain a valid email address.'
    'valid_emails'          => 'Lauka {field} vērtībai ir jābūt visām e-pasta adresēm.', // 'The {field} field must contain all valid email addresses.'
    'valid_ip'              => 'Lauka {field} vērtībai ir jābūt IP adresei.', // 'The {field} field must contain a valid IP.'
    'valid_url'             => 'Lauka {field} vērtībai ir jābūt URL adresei.', // 'The {field} field must contain a valid URL.'
    'valid_date'            => 'Lauka {field} vērtībai ir jābūt datumam.', // 'The {field} field must contain a valid date.'

    // Credit Cards
    'valid_cc_num' => 'Lauka {field} vērtība nav derīgs bankas kartes numurs.', // '{field} does not appear to be a valid credit card number.'

    // Files
    'uploaded' => 'Lauka {field} vērtība nav augšupielādēts fails.', // '{field} is not a valid uploaded file.'
    'max_size' => 'Lauka {field} vērtība ir pārāk liels faila izmērs.', // '{field} is too large of a file.'
    'is_image' => 'Lauka {field} vērtība nav augšupielādēts attēls.', // '{field} is not a valid, uploaded image file.'
    'mime_in'  => 'Lauka {field} vērtība nav derīgs `mime` tips.', // '{field} does not have a valid mime type.'
    'ext_in'   => 'Lauka {field} vērtība nesatur derīgu faila paplašinājumu.', // '{field} does not have a valid file extension.'
    'max_dims' => 'Lauka {field} vērtība vai nu nav attēls vai tā izmērs ir pārāks plats vai garš.', // '{field} is either not an image, or it is too wide or tall.'
];
