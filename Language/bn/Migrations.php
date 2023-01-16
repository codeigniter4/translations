<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'মাইগ্রেশন টেবিল অবশ্যই সেট করতে হবে।',
    'disabled'      => 'মাইগ্রেশন লোড করা হয়েছে কিন্তু নিষ্ক্রিয় করা হয়েছে বা ভুলভাবে সেটআপ করা হয়েছে।',
    'notFound'      => 'মাইগ্রেশন ফাইল পাওয়া যায়নি:',
    'batchNotFound' => 'টার্গেট ব্যাচ পাওয়া যায়নি:',
    'empty'         => 'কোন মাইগ্রেশন ফাইল পাওয়া যায়নি',
    'gap'           => 'সংস্করণ নম্বরের কাছে মাইগ্রেশন সিকোয়েন্সে একটি ফাঁক রয়েছে:',
    'classNotFound' => 'মাইগ্রেশন ক্লাস "%s" খুঁজে পাওয়া যায়নি।',
    'missingMethod' => 'মাইগ্রেশন ক্লাসে একটি "%s" পদ্ধতি অনুপস্থিত।',

    // Migration Command
    'migHelpLatest'   => "\t\t সর্বশেষ উপলব্ধ মাইগ্রেশনে ডাটাবেস মাইগ্রেট করে।",
    'migHelpCurrent'  => "\t\t কনফিগারেশনে 'বর্তমান' হিসাবে সেট করা সংস্করণে ডাটাবেস স্থানান্তরিত করে।",
    'migHelpVersion'  => "\t ডেটাবেসকে {v} সংস্করণে স্থানান্তরিত করে।",
    'migHelpRollback' => "\tসমস্ত মাইগ্রেশনকে 'ডাউন' সংস্করণ 0 এ চালায়।",
    'migHelpRefresh'  => "\t\tডাটাবেসকে সতেজ করতে সমস্ত মাইগ্রেশন আনইনস্টল করে এবং পুনরায় চালায়।",
    'migHelpSeed'     => "\t [নাম] নামের সীডারটি চালায়।",
    'migCreate'       => "\t [নাম] নামে একটি নতুন মাইগ্রেশন তৈরি করে",
    'nameMigration'   => 'মাইগ্রেশন ফাইলের নাম দিন',
    'migNumberError'  => 'মাইগ্রেশন নম্বরটি অবশ্যই তিন অঙ্কের হতে হবে, এবং অনুক্রমের মধ্যে কোনো ফাঁক থাকা উচিত নয়।',
    'rollBackConfirm' => 'আপনি কি নিশ্চিত যে আপনি রোলব্যাক করতে চান?',
    'refreshConfirm'  => 'আপনি কি নিশ্চিত আপনি রিফ্রেশ করতে চান?',

    'latest'            => 'সকল নতুন মাইগ্রেশন চলছে...',
    'generalFault'      => 'মাইগ্রেশন ব্যর্থ হয়েছে!',
    'migrated'          => 'মাইগ্রেশন সম্পূর্ণ হয়েছে।',
    'migInvalidVersion' => 'অবৈধ সংস্করণ নম্বর দেওয়া হয়েছে।',
    'toVersionPH'       => '%s সংস্করণে স্থানান্তরিত হচ্ছে...',
    'toVersion'         => 'বর্তমান সংস্করণে স্থানান্তরিত হচ্ছে...',
    'rollingBack'       => 'ব্যাচে মাইগ্রেশন ফিরিয়ে আনা হচ্ছে:',
    'noneFound'         => 'কোন স্থানান্তর পাওয়া যায়নি।',
    'migSeeder'         => 'বীজের নাম',
    'migMissingSeeder'  => 'আপনাকে অবশ্যই একটি সিডারের নাম দিতে হবে।',
    'nameSeeder'        => 'সিডার ফাইলের নাম দিন',
    'removed'           => 'রোলিং ব্যাক:',
    'added'             => 'চলমান:',

    // Migrate Status
    'namespace' => 'নেমস্পেস',
    'filename'  => 'ফাইলের নাম',
    'version'   => 'সংস্করণ',
    'group'     => 'গ্রুপ',
    'on'        => 'মাইগ্রেটেড অন:',
    'batch'     => 'ব্যাচ',
];
