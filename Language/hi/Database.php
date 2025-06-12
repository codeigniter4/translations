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

// Database language settings
return [
    'invalidEvent'                     => '"{0}" एक मान्य मॉडल इवेंट कॉलबैक नहीं है।', // '"{0}" is not a valid Model Event callback.'
    'invalidArgument'                  => 'आपको एक मान्य "{0}" प्रदान करना होगा।', // 'You must provide a valid "{0}".'
    'invalidAllowedFields'             => 'मॉडल के लिए अनुमत फ़ील्ड निर्दिष्ट होने चाहिए: "{0}"', // 'Allowed fields must be specified for model: "{0}"'
    'emptyDataset'                     => '{0} के लिए कोई डेटा नहीं है।', // 'There is no data to {0}.'
    'emptyPrimaryKey'                  => '{0} बनाने की कोशिश करते समय कोई प्राथमिक कुंजी परिभाषित नहीं है।', // 'There is no primary key defined when trying to make {0}.'
    'failGetFieldData'                 => 'डेटाबेस से फ़ील्ड डेटा प्राप्त करने में विफल।', // 'Failed to get field data from database.'
    'failGetIndexData'                 => 'डेटाबेस से इंडेक्स डेटा प्राप्त करने में विफल।', // 'Failed to get index data from database.'
    'failGetForeignKeyData'            => 'डेटाबेस से विदेशी कुंजी डेटा प्राप्त करने में विफल।', // 'Failed to get foreign key data from database.'
    'parseStringFail'                  => 'कुंजी स्ट्रिंग पार्स करने में विफल।', // 'Parsing key string failed.'
    'featureUnavailable'               => 'यह सुविधा आपके द्वारा उपयोग किए जा रहे डेटाबेस के लिए उपलब्ध नहीं है।', // 'This feature is not available for the database you are using.'
    'tableNotFound'                    => 'वर्तमान डेटाबेस में टेबल "{0}" नहीं मिली।', // 'Table "{0}" was not found in the current database.'
    'noPrimaryKey'                     => '"{0}" मॉडल क्लास में प्राथमिक कुंजी निर्दिष्ट नहीं है।', // '"{0}" model class does not specify a Primary Key.'
    'noDateFormat'                     => '"{0}" मॉडल क्लास में मान्य dateFormat नहीं है।', // '"{0}" model class does not have a valid dateFormat.'
    'fieldNotExists'                   => 'फ़ील्ड "{0}" नहीं मिला।', // 'Field "{0}" not found.'
    'forEmptyInputGiven'               => 'फ़ील्ड "{0}" के लिए खाली स्टेटमेंट दिया गया है।', // 'Empty statement is given for the field "{0}"'
    'forFindColumnHaveMultipleColumns' => 'कॉलम नाम में केवल एक कॉलम की अनुमति है।', // 'Only single column allowed in Column name.'
    'methodNotAvailable'               => 'आप "{0}" में "{1}" का उपयोग नहीं कर सकते। यह क्वेरी बिल्डर क्लास की एक विधि है।', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.'
];
