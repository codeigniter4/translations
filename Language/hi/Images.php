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

// Images language settings
return [
    'sourceImageRequired'    => 'आपको अपनी वरीयताओं में एक स्रोत छवि (source image) निर्दिष्ट करनी होगी।',
    'gdRequired'             => 'इस सुविधा का उपयोग करने के लिए GD इमेज लाइब्रेरी आवश्यक है।',
    'gdRequiredForProps'     => 'छवि के गुणों को निर्धारित करने के लिए आपके सर्वर को GD इमेज लाइब्रेरी का समर्थन करना चाहिए।',
    'gifNotSupported'        => 'लाइसेंसिंग प्रतिबंधों के कारण GIF छवियों का अक्सर समर्थन नहीं किया जाता है। आपको इसके बजाय JPG या PNG छवियों का उपयोग करना पड़ सकता है।',
    'jpgNotSupported'        => 'JPG छवियों का समर्थन नहीं किया जाता है।',
    'pngNotSupported'        => 'PNG छवियों का समर्थन नहीं किया जाता है।',
    'webpNotSupported'       => 'WEBP छवियों का समर्थन नहीं किया जाता है।',
    'fileNotSupported'       => 'प्रदान की गई फ़ाइल एक समर्थित छवि प्रकार नहीं है।',
    'unsupportedImageCreate' => 'आपका सर्वर इस प्रकार की छवि को संसाधित करने के लिए आवश्यक GD फ़ंक्शन का समर्थन नहीं करता है।',
    'jpgOrPngRequired'       => 'आपकी वरीयताओं में निर्दिष्ट छवि आकार बदलने का प्रोटोकॉल केवल JPEG या PNG छवि प्रकारों के साथ काम करता है।',
    'rotateUnsupported'      => 'छवि रोटेशन आपके सर्वर द्वारा समर्थित प्रतीत नहीं होता है।',
    'libPathInvalid'         => 'आपकी इमेज लाइब्रेरी का पथ सही नहीं है। कृपया अपनी इमेज वरीयताओं में सही पथ सेट करें। "{0}"',
    'imageProcessFailed'     => 'छवि प्रसंस्करण विफल रहा। कृपया सत्यापित करें कि आपका सर्वर चुने हुए प्रोटोकॉल का समर्थन करता है और आपकी इमेज लाइब्रेरी का पथ सही है।',
    'rotationAngleRequired'  => 'छवि को घुमाने के लिए एक रोटेशन कोण आवश्यक है।',
    'invalidPath'            => 'छवि का पथ सही नहीं है।',
    'copyFailed'             => 'छवि कॉपी करने की दिनचर्या विफल रही।',
    'missingFont'            => 'उपयोग करने के लिए कोई फ़ॉन्ट नहीं मिल रहा है।',
    'saveFailed'             => 'छवि को सहेजने में असमर्थ। कृपया सुनिश्चित करें कि छवि और फ़ाइल डायरेक्टरी लिखने योग्य हैं।',
    'invalidDirection'       => 'फ्लिप दिशा केवल "vertical" या "horizontal" हो सकती है। दिया गया: "{0}"',
    'exifNotSupported'       => 'इस PHP इंस्टॉलेशन द्वारा EXIF डेटा पढ़ना समर्थित नहीं है।',
];
