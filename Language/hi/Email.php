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
    'mustBeArray'          => 'ईमेल सत्यापन विधि को एक सरणी (array) पास किया जाना चाहिए।', // 'The email validation method must be passed an array.'
    'invalidAddress'       => 'अमान्य ईमेल पता: "{0}"', // 'Invalid email address: "{0}"'
    'attachmentMissing'    => 'निम्नलिखित ईमेल अटैचमेंट का पता लगाने में असमर्थ: "{0}"', // 'Unable to locate the following email attachment: "{0}"'
    'attachmentUnreadable' => 'इस अटैचमेंट को खोलने में असमर्थ: "{0}"', // 'Unable to open this attachment: "{0}"'
    'noFrom'               => '"From" हेडर के बिना मेल नहीं भेजा जा सकता।', // 'Cannot send mail with no "From" header.'
    'noRecipients'         => 'आपको प्राप्तकर्ताओं (recipients) को शामिल करना होगा: To, Cc, या Bcc', // 'You must include recipients: To, Cc, or Bcc'
    'sendFailurePHPMail'   => 'PHP mail() का उपयोग करके ईमेल भेजने में असमर्थ। आपका सर्वर इस विधि का उपयोग करके मेल भेजने के लिए कॉन्फ़िगर नहीं किया गया होगा।', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.'
    'sendFailureSendmail'  => 'Sendmail का उपयोग करके ईमेल भेजने में असमर्थ। आपका सर्वर इस विधि का उपयोग करके मेल भेजने के लिए कॉन्फ़िगर नहीं किया गया होगा।', // 'Unable to send email using Sendmail. Your server might not be configured to send mail using this method.'
    'sendFailureSmtp'      => 'SMTP का उपयोग करके ईमेल भेजने में असमर्थ। आपका सर्वर इस विधि का उपयोग करके मेल भेजने के लिए कॉन्फ़िगर नहीं किया गया होगा।', // 'Unable to send email using SMTP. Your server might not be configured to send mail using this method.'
    'sent'                 => 'आपका संदेश निम्नलिखित प्रोटोकॉल का उपयोग करके सफलतापूर्वक भेजा गया है: {0}', // 'Your message has been successfully sent using the following protocol: {0}'
    'noSocket'             => 'Sendmail से सॉकेट खोलने में असमर्थ। कृपया सेटिंग्स जांचें।', // 'Unable to open a socket to Sendmail. Please check settings.'
    'noHostname'           => 'आपने SMTP होस्टनाम निर्दिष्ट नहीं किया है।', // 'You did not specify a SMTP hostname.'
    'SMTPError'            => 'निम्नलिखित SMTP त्रुटि का सामना करना पड़ा: {0}', // 'The following SMTP error was encountered: {0}'
    'noSMTPAuth'           => 'त्रुटि: आपको एक SMTP उपयोगकर्ता नाम और पासवर्ड निर्दिष्ट करना होगा।', // 'Error: You must assign an SMTP username and password.'
    'failedSMTPLogin'      => 'AUTH LOGIN कमांड भेजने में विफल। त्रुटि: {0}', // 'Failed to send AUTH LOGIN command. Error: {0}'
    'SMTPAuthUsername'     => 'उपयोगकर्ता नाम को प्रमाणित करने में विफल। त्रुटि: {0}', // 'Failed to authenticate username. Error: {0}'
    'SMTPAuthPassword'     => 'पासवर्ड को प्रमाणित करने में विफल। त्रुटि: {0}', // 'Failed to authenticate password. Error: {0}'
    'SMTPDataFailure'      => 'डेटा भेजने में असमर्थ: {0}', // 'Unable to send data: {0}'
    'exitStatus'           => 'बाहर निकलने की स्थिति कोड: {0}', // 'Exit status code: {0}'
];
