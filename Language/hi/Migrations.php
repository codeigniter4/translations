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

// Migration language settings
return [
    // Migration Runner
    'missingTable'  => 'माइग्रेशन टेबल सेट होनी चाहिए।',
    'disabled'      => 'माइग्रेशन लोड हो गए हैं लेकिन अक्षम हैं या गलत तरीके से सेट किए गए हैं।',
    'notFound'      => 'माइग्रेशन फ़ाइल नहीं मिली: ',
    'batchNotFound' => 'टारगेट बैच नहीं मिला: ',
    'empty'         => 'कोई माइग्रेशन फ़ाइल नहीं मिली',
    'gap'           => 'संस्करण संख्या के पास माइग्रेशन अनुक्रम में एक गैप है: ',
    'classNotFound' => 'माइग्रेशन क्लास "%s" नहीं मिल सकी।',
    'missingMethod' => 'माइग्रेशन क्लास में "%s" विधि गायब है।',

    // Migration Command
    'migHelpLatest'   => "\t\tडेटाबेस को नवीनतम उपलब्ध माइग्रेशन में माइग्रेट करता है।",
    'migHelpCurrent'  => "\t\tडेटाबेस को कॉन्फ़िगरेशन में 'वर्तमान' के रूप में सेट किए गए संस्करण में माइग्रेट करता है।",
    'migHelpVersion'  => "\tडेटाबेस को संस्करण {v} में माइग्रेट करता है।",
    'migHelpRollback' => "\tसभी माइग्रेशन को संस्करण 0 तक 'डाउन' करता है।",
    'migHelpRefresh'  => "\t\tडेटाबेस को ताज़ा करने के लिए सभी माइग्रेशन को अनइंस्टॉल और पुनः चलाता है।",
    'migHelpSeed'     => "\t[नाम] नामक सीडर चलाता है।",
    'migCreate'       => "\t[नाम] नामक एक नया माइग्रेशन बनाता है",
    'nameMigration'   => 'माइग्रेशन फ़ाइल का नाम दें',
    'migNumberError'  => 'माइग्रेशन संख्या तीन अंकों की होनी चाहिए, और अनुक्रम में कोई गैप नहीं होना चाहिए।',
    'rollBackConfirm' => 'क्या आप रोलबैक करना सुनिश्चित हैं?',
    'refreshConfirm'  => 'क्या आप रीफ्रेश करना सुनिश्चित हैं?',

    'latest'            => 'सभी नए माइग्रेशन चलाए जा रहे हैं...',
    'generalFault'      => 'माइग्रेशन विफल रहा!',
    'migrated'          => 'माइग्रेशन पूर्ण।',
    'migInvalidVersion' => 'अमान्य संस्करण संख्या प्रदान की गई।',
    'toVersionPH'       => 'संस्करण %s में माइग्रेट कर रहा है...',
    'toVersion'         => 'वर्तमान संस्करण में माइग्रेट कर रहा है...',
    'rollingBack'       => 'माइग्रेशन को बैच में रोलबैक कर रहा है: ',
    'noneFound'         => 'कोई माइग्रेशन नहीं मिला।',
    'migSeeder'         => 'सीडर का नाम',
    'migMissingSeeder'  => 'आपको एक सीडर नाम प्रदान करना होगा।',
    'nameSeeder'        => 'सीडर फ़ाइल का नाम दें',
    'removed'           => 'रोलबैक कर रहा है: ',
    'added'             => 'चला रहा है: ',

    // Migrate Status
    'namespace' => 'नेमस्पेस',
    'filename'  => 'फ़ाइलनाम',
    'version'   => 'संस्करण',
    'group'     => 'समूह',
    'on'        => 'पर माइग्रेट किया गया: ',
    'batch'     => 'बैच',
];
