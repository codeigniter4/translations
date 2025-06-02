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
    'sourceImageRequired'    => 'તમારે તમારી પસંદગીઓમાં સ્ત્રોત છબીનો ઉલ્લેખ કરવો આવશ્યક છે.', // 'You must specify a source image in your preferences.'
    'gdRequired'             => 'આ સુવિધાનો ઉપયોગ કરવા માટે GD છબી લાઇબ્રેરી જરૂરી છે.', // 'The GD image library is required to use this feature.'
    'gdRequiredForProps'     => 'છબીના ગુણધર્મો નક્કી કરવા માટે તમારા સર્વરને GD છબી લાઇબ્રેરીને સપોર્ટ કરવો આવશ્યક છે.', // 'Your server must support the GD image library in order to determine the image properties.'
    'gifNotSupported'        => 'લાઇસન્સિંગ પ્રતિબંધોને કારણે GIF છબીઓ ઘણીવાર સપોર્ટેડ નથી. તમારે તેના બદલે JPG અથવા PNG છબીઓનો ઉપયોગ કરવો પડી શકે છે.', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.'
    'jpgNotSupported'        => 'JPG છબીઓ સપોર્ટેડ નથી.', // 'JPG images are not supported.'
    'pngNotSupported'        => 'PNG છબીઓ સપોર્ટેડ નથી.', // 'PNG images are not supported.'
    'webpNotSupported'       => 'WEBP છબીઓ સપોર્ટેડ નથી.', // 'WEBP images are not supported.'
    'fileNotSupported'       => 'પ્રદાન કરેલી ફાઇલ સપોર્ટેડ છબી પ્રકાર નથી.', // 'The supplied file is not a supported image type.'
    'unsupportedImageCreate' => 'તમારું સર્વર આ પ્રકારની છબી પર પ્રક્રિયા કરવા માટે જરૂરી GD ફંક્શનને સપોર્ટ કરતું નથી.', // 'Your server does not support the GD function required to process this type of image.'
    'jpgOrPngRequired'       => 'તમારી પસંદગીઓમાં ઉલ્લેખિત છબીનું કદ બદલવાનું પ્રોટોકોલ ફક્ત JPEG અથવા PNG છબી પ્રકારો સાથે કામ કરે છે.', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.'
    'rotateUnsupported'      => 'છબીનું રોટેશન તમારા સર્વર દ્વારા સપોર્ટેડ જણાતું નથી.', // 'Image rotation does not appear to be supported by your server.'
    'libPathInvalid'         => 'તમારી છબી લાઇબ્રેરીનો પાથ સાચો નથી. કૃપા કરીને તમારી છબી પસંદગીઓમાં સાચો પાથ સેટ કરો. "{0}"', // 'The path to your image library is not correct. Please set the correct path in your image preferences. "{0}"'
    'imageProcessFailed'     => 'છબીની પ્રક્રિયા નિષ્ફળ ગઈ. કૃપા કરીને ચકાસો કે તમારું સર્વર પસંદ કરેલા પ્રોટોકોલને સપોર્ટ કરે છે અને તમારી છબી લાઇબ્રેરીનો પાથ સાચો છે.', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.'
    'rotationAngleRequired'  => 'છબીને ફેરવવા માટે રોટેશન એંગલ જરૂરી છે.', // 'An angle of rotation is required to rotate the image.'
    'invalidPath'            => 'છબીનો પાથ સાચો નથી.', // 'The path to the image is not correct.'
    'copyFailed'             => 'છબી કોપી રૂટિન નિષ્ફળ ગયું.', // 'The image copy routine failed.'
    'missingFont'            => 'ઉપયોગ કરવા માટે ફોન્ટ શોધી શકાતો નથી.', // 'Unable to find a font to use.'
    'saveFailed'             => 'છબી સાચવી શકાતી નથી. કૃપા કરીને ખાતરી કરો કે છબી અને ફાઇલ ડિરેક્ટરી લખી શકાય તેવી છે.', // 'Unable to save the image. Please make sure the image and file directory are writable.'
    'invalidDirection'       => 'ફ્લિપ દિશા ફક્ત "vertical" અથવા "horizontal" હોઈ શકે છે. આપેલ: "{0}"', // 'Flip direction can be only "vertical" or "horizontal". Given: "{0}"'
    'exifNotSupported'       => 'આ PHP ઇન્સ્ટોલેશન દ્વારા EXIF ડેટા વાંચવા માટે સપોર્ટ નથી.', // 'Reading EXIF data is not supported by this PHP installation.'
];
