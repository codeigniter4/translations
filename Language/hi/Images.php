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
    'sourceImageRequired'    => 'आपको अपनी वरीयताओं में एक स्रोत छवि (source image) निर्दिष्ट करनी होगी।', // 'You must specify a source image in your preferences.'
    'gdRequired'             => 'इस सुविधा का उपयोग करने के लिए GD इमेज लाइब्रेरी आवश्यक है।', // 'The GD image library is required to use this feature.'
    'gdRequiredForProps'     => 'छवि के गुणों को निर्धारित करने के लिए आपके सर्वर को GD इमेज लाइब्रेरी का समर्थन करना चाहिए।', // 'Your server must support the GD image library in order to determine the image properties.'
    'gifNotSupported'        => 'लाइसेंसिंग प्रतिबंधों के कारण GIF छवियों का अक्सर समर्थन नहीं किया जाता है। आपको इसके बजाय JPG या PNG छवियों का उपयोग करना पड़ सकता है।', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.'
    'jpgNotSupported'        => 'JPG छवियों का समर्थन नहीं किया जाता है।', // 'JPG images are not supported.'
    'pngNotSupported'        => 'PNG छवियों का समर्थन नहीं किया जाता है।', // 'PNG images are not supported.'
    'webpNotSupported'       => 'WEBP छवियों का समर्थन नहीं किया जाता है।', // 'WEBP images are not supported.'
    'fileNotSupported'       => 'प्रदान की गई फ़ाइल एक समर्थित छवि प्रकार नहीं है।', // 'The supplied file is not a supported image type.'
    'unsupportedImageCreate' => 'आपका सर्वर इस प्रकार की छवि को संसाधित करने के लिए आवश्यक GD फ़ंक्शन का समर्थन नहीं करता है।', // 'Your server does not support the GD function required to process this type of image.'
    'jpgOrPngRequired'       => 'आपकी वरीयताओं में निर्दिष्ट छवि आकार बदलने का प्रोटोकॉल केवल JPEG या PNG छवि प्रकारों के साथ काम करता है।', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.'
    'rotateUnsupported'      => 'छवि रोटेशन आपके सर्वर द्वारा समर्थित प्रतीत नहीं होता है।', // 'Image rotation does not appear to be supported by your server.'
    'libPathInvalid'         => 'आपकी इमेज लाइब्रेरी का पथ सही नहीं है। कृपया अपनी इमेज वरीयताओं में सही पथ सेट करें। "{0}"', // 'The path to your image library is not correct. Please set the correct path in your image preferences. "{0}"'
    'imageProcessFailed'     => 'छवि प्रसंस्करण विफल रहा। कृपया सत्यापित करें कि आपका सर्वर चुने हुए प्रोटोकॉल का समर्थन करता है और आपकी इमेज लाइब्रेरी का पथ सही है।', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.'
    'rotationAngleRequired'  => 'छवि को घुमाने के लिए एक रोटेशन कोण आवश्यक है।', // 'An angle of rotation is required to rotate the image.'
    'invalidPath'            => 'छवि का पथ सही नहीं है।', // 'The path to the image is not correct.'
    'copyFailed'             => 'छवि कॉपी करने की दिनचर्या विफल रही।', // 'The image copy routine failed.'
    'missingFont'            => 'उपयोग करने के लिए कोई फ़ॉन्ट नहीं मिल रहा है।', // 'Unable to find a font to use.'
    'saveFailed'             => 'छवि को सहेजने में असमर्थ। कृपया सुनिश्चित करें कि छवि और फ़ाइल डायरेक्टरी लिखने योग्य हैं।', // 'Unable to save the image. Please make sure the image and file directory are writable.'
    'invalidDirection'       => 'फ्लिप दिशा केवल "vertical" या "horizontal" हो सकती है। दिया गया: "{0}"', // 'Flip direction can be only "vertical" or "horizontal". Given: "{0}"'
    'exifNotSupported'       => 'इस PHP इंस्टॉलेशन द्वारा EXIF डेटा पढ़ना समर्थित नहीं है।', // 'Reading EXIF data is not supported by this PHP installation.'
];
