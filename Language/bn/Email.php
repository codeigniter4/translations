<?php

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
    'mustBeArray'          => 'ইমেল যাচাইকরণ পদ্ধতিটি অবশ্যই একটি অ্যারে পাস করতে হবে।',
    'invalidAddress'       => 'অবৈধ ইমেল ঠিকানা: {0}',
    'attachmentMissing'    => 'নিম্নলিখিত ইমেল সংযুক্তি সনাক্ত করতে অক্ষম: {0}',
    'attachmentUnreadable' => 'এই সংযুক্তিটি খুলতে অক্ষম: {0}',
    'noFrom'               => 'কোনও "থেকে" হেডার ছাড়া মেল পাঠানো যাবে না।',
    'noRecipients'         => 'আপনাকে অবশ্যই প্রাপকদের অন্তর্ভুক্ত করতে হবে: প্রতি, Cc, বা Bcc',
    'sendFailurePHPMail'   => 'PHP মেল () ব্যবহার করে ইমেল পাঠাতে অক্ষম। আপনার সার্ভার এই পদ্ধতি ব্যবহার করে মেল পাঠানোর জন্য কনফিগার নাও হতে পারে।',
    'sendFailureSendmail'  => 'সেন্ডমেইল ব্যবহার করে ইমেল পাঠাতে অক্ষম। আপনার সার্ভার এই পদ্ধতি ব্যবহার করে মেল পাঠানোর জন্য কনফিগার নাও হতে পারে।',
    'sendFailureSmtp'      => 'SMTP ব্যবহার করে ইমেল পাঠাতে অক্ষম। আপনার সার্ভার এই পদ্ধতি ব্যবহার করে মেল পাঠানোর জন্য কনফিগার নাও হতে পারে।',
    'sent'                 => 'নিম্নলিখিত প্রোটোকল ব্যবহার করে আপনার বার্তা সফলভাবে পাঠানো হয়েছে: {0}',
    'noSocket'             => 'সেন্ডমেইলে একটি সকেট খুলতে অক্ষম। অনুগ্রহ করে সেটিংস চেক করুন।',
    'noHostname'           => 'আপনি একটি SMTP হোস্টনাম উল্লেখ করেননি।',
    'SMTPError'            => 'নিম্নলিখিত SMTP ত্রুটির সম্মুখীন হয়েছে: {0}',
    'noSMTPAuth'           => 'ত্রুটি: আপনাকে অবশ্যই একটি SMTP ব্যবহারকারীর নাম এবং পাসওয়ার্ড দিতে হবে।',
    'failedSMTPLogin'      => 'AUTH লগইন কমান্ড পাঠাতে ব্যর্থ হয়েছে। ত্রুটি: {0}',
    'SMTPAuthUsername'     => 'ব্যবহারকারীর নাম প্রমাণীকরণে ব্যর্থ। ত্রুটি: {0}',
    'SMTPAuthPassword'     => 'পাসওয়ার্ড প্রমাণীকরণে ব্যর্থ। ত্রুটি: {0}',
    'SMTPDataFailure'      => 'ডেটা পাঠাতে অক্ষম: {0}',
    'exitStatus'           => 'স্ট্যাটাস কোড থেকে প্রস্থান করুন: {0}',
];
