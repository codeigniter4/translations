<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// HTTP language settings
return [
    // CurlRequest
    'missingCurl'     => 'CURLRequest ক্লাস ব্যবহার করার জন্য CURL সক্রিয় করতে হবে।',
    'invalidSSLKey'   => 'SSL কী সেট করা যাবে না। {0} একটি বৈধ ফাইল নয়।',
    'sslCertNotFound' => 'SSL সার্টিফিকেট পাওয়া যায়নি: {0}',
    'curlError'       => '{0} : {1}',

    // IncomingRequest
    'invalidNegotiationType' => '{0} একটি বৈধ আলোচনার ধরন নয়। এর মধ্যে একটি হতে হবে: মিডিয়া, অক্ষর সেট, এনকোডিং, ভাষা।',

    // Message
    'invalidHTTPProtocol' => 'অবৈধ HTTP প্রোটোকল সংস্করণ। এর মধ্যে একটি হতে হবে: {0}',

    // Negotiate
    'emptySupportedNegotiations' => 'আপনাকে অবশ্যই সমস্ত আলোচনায় সমর্থিত মানগুলির একটি অ্যারে প্রদান করতে হবে।',

    // RedirectResponse
    'invalidRoute' => '"{0}" এর রুটটি খুঁজে পাওয়া যাচ্ছে না।',

    // DownloadResponse
    'cannotSetBinary'        => 'যখন ফাইলপথ সেট করা বাইনারি সেট করা যায় না।',
    'cannotSetFilepath'      => 'যখন বাইনারি সেট করা ফাইলপথ সেট করতে পারে না: {0}',
    'notFoundDownloadSource' => 'ডাউনলোড বডি সোর্স পাওয়া যায়নি।',
    'cannotSetCache'         => 'এটি ডাউনলোড করার জন্য ক্যাশে সমর্থন করে না।',
    'cannotSetStatusCode'    => 'এটি ডাউনলোড করার জন্য স্ট্যাটাস কোড পরিবর্তন সমর্থন করে না। কোড: {0}, কারণ: {1}',

    // Response
    'missingResponseStatus' => 'HTTP রেসপন্সে একটি স্ট্যাটাস কোড নেই',
    'invalidStatusCode'     => '{0} একটি বৈধ HTTP রিটার্ন স্ট্যাটাস কোড নয়',
    'unknownStatusCode'     => 'অজানা HTTP স্ট্যাটাস কোড কোনো বার্তা ছাড়াই দেওয়া হয়েছে: {0}',

    // URI
    'cannotParseURI'       => 'URI পার্স করতে অক্ষম: {0}',
    'segmentOutOfRange'    => 'অনুরোধ URI সেগমেন্ট পরিসীমার বাইরে: {0}',
    'invalidPort'          => 'পোর্টগুলি অবশ্যই 0 এবং 65535 এর মধ্যে হতে হবে। দেওয়া হয়েছে: {0}',
    'malformedQueryString' => 'কোয়েরি স্ট্রিংগুলিতে URI খণ্ড নাও থাকতে পারে।',

    // Page Not Found
    'pageNotFound'       => 'পৃষ্ঠা পাওয়া যায়নি',
    'emptyController'    => 'কোন কন্ট্রোলার নির্দিষ্ট করা নেই।',
    'controllerNotFound' => 'কন্ট্রোলার বা এর পদ্ধতি খুঁজে পাওয়া যায়নি: {0}::{1}',
    'methodNotFound'     => 'নিয়ন্ত্রক পদ্ধতি পাওয়া যায়নি: {0}',
    'localeNotSupported' => 'লোকেল সমর্থিত নয়: {0}।',

    // CSRF
    // @deprecated use `Security.disallowedAction`
    'disallowedAction' => 'আপনি যে কর্মের অনুরোধ করেছেন তা অনুমোদিত নয়।',

    // Uploaded file moving
    'alreadyMoved' => 'আপলোড করা ফাইলটি ইতিমধ্যে সরানো হয়েছে।',
    'invalidFile'  => 'মূল ফাইলটি বৈধ ফাইল নয়।',
    'moveFailed'   => 'ফাইল {0} থেকে {1} ({2}) এ সরানো যায়নি',

    'uploadErrOk'        => 'ফাইলটি সফলভাবে আপলোড হয়েছে।',
    'uploadErrIniSize'   => 'ফাইলটি "%s" আপনার upload_max_filesize ini নির্দেশকে ছাড়িয়ে গেছে।',
    'uploadErrFormSize'  => 'ফাইল "%s" আপনার ফর্মে সংজ্ঞায়িত আপলোড সীমা অতিক্রম করেছে।',
    'uploadErrPartial'   => 'ফাইলটি "%s" শুধুমাত্র আংশিকভাবে আপলোড করা হয়েছিল।',
    'uploadErrNoFile'    => 'কোন ফাইল আপলোড করা হয়নি।',
    'uploadErrCantWrite' => 'ফাইলটি "%s" ডিস্কে লেখা যাবে না।',
    'uploadErrNoTmpDir'  => 'ফাইল আপলোড করা যায়নি: অস্থায়ী ডিরেক্টরি অনুপস্থিত।',
    'uploadErrExtension' => 'ফাইল আপলোড একটি PHP এক্সটেনশন দ্বারা বন্ধ করা হয়েছিল।',
    'uploadErrUnknown'   => '"%s" ফাইলটি একটি অজানা ত্রুটির কারণে আপলোড করা হয়নি।',

    // SameSite setting
    // @deprecated
    'invalidSameSiteSetting' => 'একইসাইট সেটিংটি অবশ্যই কোনোটি নয়, শৈথিল্য, কঠোর, বা একটি ফাঁকা স্ট্রিং হতে হবে। দেওয়া হয়েছে: {0}',
];
