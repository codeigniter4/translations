<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
	'sourceImageRequired'    => 'ඔබේ preferences හි source image එකක් සඳහන් කළ යුතුය.', // You must specify a source image in your preferences.
	'gdRequired'             => 'මෙම අංගය භාවිතා කිරීමට GD image library එක අවශ්‍ය වේ.', // The GD image library is required to use this feature.
	'gdRequiredForProps'     => 'රූපයේ ගුණාංග තීරණය කිරීම සඳහා ඔබේ server එක GD image library සඳහා සහාය විය යුතුය.', // Your server must support the GD image library in order to determine the image properties.
	'gifNotSupported'        => 'බලපත්‍ර සීමාවන් නිසා GIF පින්තූර බොහෝ විට සහාය නොදක්වයි. ඒ වෙනුවට ඔබට JPG හෝ PNG රූප භාවිතා කිරීමට සිදුවනු ඇත.', // GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.
	'jpgNotSupported'        => 'JPG රූප සඳහා සහය නොදක්වයි.', // JPG images are not supported.
	'pngNotSupported'        => 'PNG රූප සඳහා සහය නොදක්වයි.', // PNG images are not supported.
	'webpNotSupported'       => 'WEBP රූප සඳහා සහය නොදක්වයි.', // WEBP images are not supported.
	'fileNotSupported'       => 'සපයන ලද ගොනුව සහය දක්වන රූප වර්ගයක් නොවේ.', // The supplied file is not a supported image type.
	'unsupportedImageCreate' => 'මෙම වර්ගයේ රූප සැකසීමට අවශ්‍ය GD function එක සඳහා ඔබගේ server එක සහය නොදක්වයි.', // Your server does not support the GD function required to process this type of image.
	'jpgOrPngRequired'       => 'ඔබගේ preferences දක්වා ඇති image resize ප්‍රොටෝකෝලය ක්‍රියාත්මක වන්නේ JPEG හෝ PNG රූප වර්ග සමඟ පමණි.', // The image resize protocol specified in your preferences only works with JPEG or PNG image types.
	'rotateUnsupported'      => 'Image rotation සඳහා ඔබගේ server එක සහාය දක්වන බවක් නොපෙනේ.', // Image rotation does not appear to be supported by your server.
	'libPathInvalid'         => 'ඔබගේ image library එක සඳහා වන path එක නිවැරදි නොවේ. කරුණාකර ඔබගේ image preferences හි නිවැරදි path එක සකසන්න. {0}', // The path to your image library is not correct. Please set the correct path in your image preferences. {0}
	'imageProcessFailed'     => 'Image processing අසාර්ථක විය. කරුණාකර ඔබේ server එක තෝරාගත් ප්‍රොටෝකෝලය සඳහා සහය දක්වන බවත් ඔබේ image library එක සඳහා වන path එක නිවැරදි බවත් තහවුරු කරන්න.', // Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.
	'rotationAngleRequired'  => 'රූපය භ්‍රමණය කිරීම සඳහා භ්‍රමණ කෝණයක් අවශ්‍ය වේ.', // An angle of rotation is required to rotate the image.
	'invalidPath'            => 'රූපයට අදාල වන path එක නිවැරදි නොවේ.', // The path to the image is not correct.
	'copyFailed'             => 'පින්තූර පිටපත් කිරීමේ ක්‍රියාවලිය අසාර්ථක විය.', // The image copy routine failed.
	'missingFont'            => 'භාවිතා කිරීමට font එකක් සොයාගත නොහැක.', // Unable to find a font to use.
	'saveFailed'             => 'රූපය save කිරීමට නොහැක. කරුණාකර රූපය සහ ගොනු ඩිරෙක්ටරිය ලිවිය හැකි බවට වග බලා ගන්න.', // Unable to save the image. Please make sure the image and file directory are writable.
	'invalidDirection'       => 'පෙරළීමේ දිශාව විය හැක්කේ `සිරස්` හෝ `තිරස්` පමණි. ලබා දී ඇත්තේ: {0}', // Flip direction can be only `vertical` or `horizontal`. Given: {0}
	'exifNotSupported'       => 'EXIF දත්ත කියවීමට මෙම PHP ස්ථාපනය සහාය නොදක්වයි.', // Reading EXIF data is not supported by this PHP installation.
];
