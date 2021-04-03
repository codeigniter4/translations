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
	'sourceImageRequired'    => 'Iestatījumos ir jānorāda avota attēls.', // 'You must specify a source image in your preferences.'
	'gdRequired'             => 'Lai izmantotu šo funkciju, ir nepieciešama GD attēlu bibliotēka.', // 'The GD image library is required to use this feature.'
	'gdRequiredForProps'     => 'Jūsu serverim ir jāatbalsta GD attēlu bibliotēka, lai noteiktu attēla īpašības.', // 'Your server must support the GD image library in order to determine the image properties.'
	'gifNotSupported'        => 'GIF attēli bieži netiek atbalstīti licencēšanas ierobežojumu dēļ. Tā vietā, iesakam izmantot JPG vai PNG attēlus.', // 'GIF images are often not supported due to licensing restrictions. You may have to use JPG or PNG images instead.'
	'jpgNotSupported'        => 'JPG attēli netiek atbalstīti.', // 'JPG images are not supported.'
	'pngNotSupported'        => 'PNG attēli netiek atbalstīti.', // 'PNG images are not supported.'
	'webpNotSupported'       => 'WEBP attēli netiek atbalstīti.', // 'WEBP images are not supported.'
	'fileNotSupported'       => 'Piegādātais fails nav atbalstīts attēla tips.', // 'The supplied file is not a supported image type.'
	'unsupportedImageCreate' => 'Jūsu serveris neatbalsta GD funkciju, kas nepieciešama šāda veida attēlu apstrādei.', // 'Your server does not support the GD function required to process this type of image.'
	'jpgOrPngRequired'       => 'Jūsu iestatījumos norādītais attēla lieluma maiņas protokols darbojas tikai ar JPEG vai PNG attēlu tipiem.', // 'The image resize protocol specified in your preferences only works with JPEG or PNG image types.'
	'rotateUnsupported'      => 'Jūsu serveris neatbalsta attēlu pagriešanu un rotācijas funkcijas.', // 'Image rotation does not appear to be supported by your server.'
	'libPathInvalid'         => 'Ceļš uz attēlu bibliotēku nav pareizs. Lūdzu, attēla iestatījumos iestatiet pareizo ceļu. {0}', // 'The path to your image library is not correct. Please set the correct path in your image preferences. {0}'
	'imageProcessFailed'     => 'Attēlu apstrāde neizdevās. Lūdzu, pārbaudiet, vai jūsu serveris atbalsta izvēlēto protokolu un vai ceļš uz attēlu bibliotēku ir pareizs.', // 'Image processing failed. Please verify that your server supports the chosen protocol and that the path to your image library is correct.'
	'rotationAngleRequired'  => 'Attēla pagriešanai ir nepieciešams rotācijas leņķis.', // 'An angle of rotation is required to rotate the image.'
	'invalidPath'            => 'Ceļš uz attēlu nav pareizs.', // 'The path to the image is not correct.'
	'copyFailed'             => 'Attēla kopēšanas darbība neizdevās.', // 'The image copy routine failed.'
	'missingFont'            => 'Nevar atrast izmantojamu fontu.', // 'Unable to find a font to use.'
	'saveFailed'             => 'Nevar saglabāt attēlu. Lūdzu, pārliecinieties vai attēls un failu direktorija ir rakstāma.', // 'Unable to save the image. Please make sure the image and file directory are writable.'
	'invalidDirection'       => 'Pagriešanas virzienam ir jābūt: `vertical` vai `horizontal`. Norādīts: {0}', // 'Flip direction can be only `vertical` or `horizontal`. Given: {0}'
	'exifNotSupported'       => 'Šī PHP instalācija neatbalsta EXIF datu lasīšanu.', // 'Reading EXIF data is not supported by this PHP installation.'
];
