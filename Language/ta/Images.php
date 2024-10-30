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
    'sourceImageRequired'    => 'உங்கள் விருப்பத்தேர்வுகளில் மூலப் படத்தைக் குறிப்பிட வேண்டும்.', // 'You must specify a source image in your preferences.',
    'gdRequired'             => 'இந்த அம்சத்தைப் பயன்படுத்த GD பட நூலகம் தேவை.', // 'The GD image library is required to use this feature.',
    'gdRequiredForProps'     => 'படத்தின் பண்புகளை தீர்மானிக்க உங்கள் சேவையகம் GD பட நூலகத்தை ஆதரிக்க வேண்டும்.', // 'Your server must support the GD image library in order to determine the image properties.',
    'gifNotSupported'        => 'உரிமக் கட்டுப்பாடுகள் காரணமாக GIF படங்கள் பெரும்பாலும் ஆதரிக்கப்படுவதில்லை. அதற்குப் பதிலாக நீங்கள் JPG அல்லது PNG படங்களைப் பயன்படுத்த வேண்டியிருக்கும்.', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.',
    'jpgNotSupported'        => 'JPG படங்கள் ஆதரிக்கப்படவில்லை.', // 'JPG images are not supported.',
    'pngNotSupported'        => 'PNG படங்கள் ஆதரிக்கப்படவில்லை.', // 'PNG images are not supported.',
    'webpNotSupported'       => 'WEBP படங்கள் ஆதரிக்கப்படவில்லை.', // 'WEBP images are not supported.',
    'fileNotSupported'       => 'வழங்கப்பட்ட கோப்பு ஆதரிக்கப்படும் பட வகை அல்ல.', // 'The supplied file is not a supported image type.',
    'unsupportedImageCreate' => 'இந்த வகையான படத்தைச் செயலாக்குவதற்குத் தேவையான GD செயல்பாட்டை உங்கள் சேவையகம் ஆதரிக்கவில்லை.', // 'Your server does not support the GD function required to process this type of image.',
    'jpgOrPngRequired'       => 'உங்கள் விருப்பத்தேர்வுகளில் குறிப்பிடப்பட்டுள்ள படத்தின் மறுஅளவிடல் நெறிமுறை JPEG அல்லது PNG பட வகைகளுடன் மட்டுமே செயல்படும்.', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.',
    'rotateUnsupported'      => 'பட சுழற்சியை உங்கள் சேவையகம் ஆதரிக்கவில்லை.', // 'Image rotation does not appear to be supported by your server.',
    'libPathInvalid'         => 'உங்கள் பட நூலகத்திற்கான பாதை சரியாக இல்லை. உங்கள் பட விருப்பங்களில் சரியான பாதையை அமைக்கவும். "{0}"', // 'The path to your image library is not correct. Please set the correct path in your image preferences. "{0}"',
    'imageProcessFailed'     => 'பட செயலாக்கம் தோல்வியடைந்தது. உங்கள் சேவையகம் தேர்ந்தெடுக்கப்பட்ட நெறிமுறையை ஆதரிக்கிறது என்பதையும், உங்கள் பட நூலகத்திற்கான பாதை சரியானது என்பதையும் சரிபார்க்கவும்.', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.',
    'rotationAngleRequired'  => 'படத்தை சுழற்ற ஒரு கோணம் தேவைப்படுகிறது.', // 'An angle of rotation is required to rotate the image.',
    'invalidPath'            => 'படத்திற்கான பாதை சரியாக இல்லை.', // 'The path to the image is not correct.',
    'copyFailed'             => 'படத்தை நகலெடுக்கும் வழக்கம் தோல்வியடைந்தது.', // 'The image copy routine failed.',
    'missingFont'            => 'பயன்படுத்துவதற்கு எழுத்துருவைக் கண்டுபிடிக்க முடியவில்லை.', // 'Unable to find a font to use.',
    'saveFailed'             => 'படத்தைச் சேமிக்க முடியவில்லை. படமும் கோப்பு கோப்பகமும் எழுதக்கூடியவை என்பதை உறுதிப்படுத்தவும்.', // 'Unable to save the image. Please make sure the image and file directory are writable.',
    'invalidDirection'       => 'புரட்டு (flip) திசையானது "செங்குத்து" அல்லது "கிடைமட்டமாக" மட்டுமே இருக்க முடியும். கொடுக்கப்பட்டது: "{0}"', // 'Flip direction can be only "vertical" or "horizontal". Given: "{0}"',
    'exifNotSupported'       => 'EXIF தரவைப் படிப்பது இந்த PHP நிறுவலால் ஆதரிக்கப்படவில்லை.', // 'Reading EXIF data is not supported by this PHP installation.',
];
