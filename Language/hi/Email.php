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

// Email language settings
return [
    'mustBeArray'          => 'ईमेल सत्यापन विधि को एक सरणी (array) पास किया जाना चाहिए।',
    'invalidAddress'       => 'अमान्य ईमेल पता: "{0}"',
    'attachmentMissing'    => 'निम्नलिखित ईमेल अटैचमेंट का पता लगाने में असमर्थ: "{0}"',
    'attachmentUnreadable' => 'इस अटैचमेंट को खोलने में असमर्थ: "{0}"',
    'noFrom'               => '"From" हेडर के बिना मेल नहीं भेजा जा सकता।',
    'noRecipients'         => 'आपको प्राप्तकर्ताओं (recipients) को शामिल करना होगा: To, Cc, या Bcc',
    'sendFailurePHPMail'   => 'PHP mail() का उपयोग करके ईमेल भेजने में असमर्थ। आपका सर्वर इस विधि का उपयोग करके मेल भेजने के लिए कॉन्फ़िगर नहीं किया गया होगा।',
    'sendFailureSendmail'  => 'Sendmail का उपयोग करके ईमेल भेजने में असमर्थ। आपका सर्वर इस विधि का उपयोग करके मेल भेजने के लिए कॉन्फ़िगर नहीं किया गया होगा।',
    'sendFailureSmtp'      => 'SMTP का उपयोग करके ईमेल भेजने में असमर्थ। आपका सर्वर इस विधि का उपयोग करके मेल भेजने के लिए कॉन्फ़िगर नहीं किया गया होगा।',
    'sent'                 => 'आपका संदेश निम्नलिखित प्रोटोकॉल का उपयोग करके सफलतापूर्वक भेजा गया है: {0}',
    'noSocket'             => 'Sendmail से सॉकेट खोलने में असमर्थ। कृपया सेटिंग्स जांचें।',
    'noHostname'           => 'आपने SMTP होस्टनाम निर्दिष्ट नहीं किया है।',
    'SMTPError'            => 'निम्नलिखित SMTP त्रुटि का सामना करना पड़ा: {0}',
    'noSMTPAuth'           => 'त्रुटि: आपको एक SMTP उपयोगकर्ता नाम और पासवर्ड निर्दिष्ट करना होगा।',
    'failedSMTPLogin'      => 'AUTH LOGIN कमांड भेजने में विफल। त्रुटि: {0}',
    'SMTPAuthUsername'     => 'उपयोगकर्ता नाम को प्रमाणित करने में विफल। त्रुटि: {0}',
    'SMTPAuthPassword'     => 'पासवर्ड को प्रमाणित करने में विफल। त्रुटि: {0}',
    'SMTPDataFailure'      => 'डेटा भेजने में असमर्थ: {0}',
    'exitStatus'           => 'बाहर निकलने की स्थिति कोड: {0}',
];
