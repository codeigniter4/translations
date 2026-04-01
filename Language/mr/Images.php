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
    'sourceImageRequired'    => 'तुमच्या preferences मध्ये source image निर्दिष्ट करणे आवश्यक आहे.', // 'You must specify a source image in your preferences.'
    'gdRequired'             => 'ही सुविधा वापरण्यासाठी GD image library आवश्यक आहे.', // 'The GD image library is required to use this feature.'
    'gdRequiredForProps'     => 'Image properties ठरवण्यासाठी तुमच्या server ला GD image library चे समर्थन असणे आवश्यक आहे.', // 'Your server must support the GD image library in order to determine the image properties.'
    'gifNotSupported'        => 'Licensing restrictions मुळे GIF images अनेकदा समर्थित नसतात. त्याऐवजी तुम्हाला JPG किंवा PNG images वापराव्या लागू शकतात.', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.'
    'jpgNotSupported'        => 'JPG images समर्थित नाहीत.', // 'JPG images are not supported.'
    'pngNotSupported'        => 'PNG images समर्थित नाहीत.', // 'PNG images are not supported.'
    'webpNotSupported'       => 'WEBP images समर्थित नाहीत.', // 'WEBP images are not supported.'
    'fileNotSupported'       => 'दिलेली फाइल समर्थित image type नाही.', // 'The supplied file is not a supported image type.'
    'unsupportedImageCreate' => 'या प्रकारच्या image वर प्रक्रिया करण्यासाठी आवश्यक functionality तुमचा server समर्थित करत नाही.', // 'Your server does not support the required functionality to process this type of image.'
    'jpgOrPngRequired'       => 'तुमच्या preferences मध्ये दिलेला image resize protocol फक्त JPEG किंवा PNG image types सोबतच काम करतो.', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.'
    'rotateUnsupported'      => 'Image rotation तुमच्या server कडून समर्थित नसल्यासारखे दिसते.', // 'Image rotation does not appear to be supported by your server.'
    'imageProcessFailed'     => 'Image processing अयशस्वी झाले. कृपया तुमचा server निवडलेला protocol समर्थित करतो का आणि image library चा path योग्य आहे का ते तपासा.', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.'
    'rotationAngleRequired'  => 'Image rotate करण्यासाठी rotation चा angle आवश्यक आहे.', // 'An angle of rotation is required to rotate the image.'
    'invalidPath'            => 'Image चा path योग्य नाही.', // 'The path to the image is not correct.'
    'copyFailed'             => 'Image copy routine अयशस्वी झाली.', // 'The image copy routine failed.'
    'missingFont'            => 'वापरण्यासाठी font सापडला नाही.', // 'Unable to find a font to use.'
    'saveFailed'             => 'Image save करता आली नाही. कृपया image आणि file directory writable आहेत याची खात्री करा.', // 'Unable to save the image. Please make sure the image and file directory are writable.'
    'invalidDirection'       => 'Flip direction फक्त "vertical" किंवा "horizontal" असू शकतो. दिलेले: "{0}"', // 'Flip direction can be only "vertical" or "horizontal". Given: "{0}"'
    'exifNotSupported'       => 'या PHP installation मध्ये EXIF data वाचणे समर्थित नाही.', // 'Reading EXIF data is not supported by this PHP installation.'

    // @deprecated
    'libPathInvalid'         => 'तुमच्या image library चा path योग्य नाही. कृपया image preferences मध्ये योग्य path सेट करा. "{0}"', // 'The path to your image library is not correct. Please set the correct path in your image preferences. "{0}"'
];
