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
    'invalidEvent'                     => '"{0}" एक मान्य मॉडल इवेंट कॉलबैक नहीं है।',
    'invalidArgument'                  => 'आपको एक मान्य "{0}" प्रदान करना होगा।',
    'invalidAllowedFields'             => 'मॉडल के लिए अनुमत फ़ील्ड निर्दिष्ट होने चाहिए: "{0}"',
    'emptyDataset'                     => '{0} के लिए कोई डेटा नहीं है।',
    'emptyPrimaryKey'                  => '{0} बनाने की कोशिश करते समय कोई प्राथमिक कुंजी परिभाषित नहीं है।',
    'failGetFieldData'                 => 'डेटाबेस से फ़ील्ड डेटा प्राप्त करने में विफल।',
    'failGetIndexData'                 => 'डेटाबेस से इंडेक्स डेटा प्राप्त करने में विफल।',
    'failGetForeignKeyData'            => 'डेटाबेस से विदेशी कुंजी डेटा प्राप्त करने में विफल।',
    'parseStringFail'                  => 'कुंजी स्ट्रिंग पार्स करने में विफल।',
    'featureUnavailable'               => 'यह सुविधा आपके द्वारा उपयोग किए जा रहे डेटाबेस के लिए उपलब्ध नहीं है।',
    'tableNotFound'                    => 'वर्तमान डेटाबेस में टेबल "{0}" नहीं मिली।',
    'noPrimaryKey'                     => '"{0}" मॉडल क्लास में प्राथमिक कुंजी निर्दिष्ट नहीं है।',
    'noDateFormat'                     => '"{0}" मॉडल क्लास में मान्य dateFormat नहीं है।',
    'fieldNotExists'                   => 'फ़ील्ड "{0}" नहीं मिला।',
    'forEmptyInputGiven'               => 'फ़ील्ड "{0}" के लिए खाली स्टेटमेंट दिया गया है।',
    'forFindColumnHaveMultipleColumns' => 'कॉलम नाम में केवल एक कॉलम की अनुमति है।',
    'methodNotAvailable'               => 'आप "{0}" में "{1}" का उपयोग नहीं कर सकते। यह क्वेरी बिल्डर क्लास की एक विधि है।',
];
