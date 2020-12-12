<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

return [
	'sourceImageRequired'    => 'En källfil för bilder måste anges i inställningarna.',
	'gdRequired'             => 'GD biblioteket krävs för denna funktion.',
	'gdRequiredForProps'     => 'Din server måste ha GD biblioteket installerat för att kunna ange bildens egenskaper.',
	'gifNotSupported'        => 'GIF-bilder är ofta inte supporterade på grund av licensrestriktioner. Du kanske måste använda JPG eller PNG formaten istället.',
	'jpgNotSupported'        => 'JPG-bilder är inte supporterade.',
	'pngNotSupported'        => 'PNG-bilder är inte supporterade.',
	'webpNotSupported'       => 'WEBP-bilder är inte supporterade.',
	'fileNotSupported'       => 'Den angivna filen är inte i ett supporterat bildformat.',
	'unsupportedImageCreate' => 'Servern har inte support för den GD funktion som behövs för att hantera denna typ av bild.',
	'jpgOrPngRequired'       => 'De angivna funktionerna för storleksförändring av bilden fungerar enbart med JPEG och PNG bilder.',
	'rotateUnsupported'      => 'Rotering av bilder verkar inte supporteras på din server.',
	'libPathInvalid'         => 'Sökvägen till binärbiblioteket är inte korrekt. Ange korrekt sökväg i inställningarna. {0}',
	'imageProcessFailed'     => 'Kunde inte processa bilden. Kontrollera att servern har support för det valda formatet och att sökvägen till binärbiblioteket är korrekt.',
	'rotationAngleRequired'  => 'En rotationsvinkel krävs för att kunna rotera bilden.',
	'invalidPath'            => 'Sökvägen till bilden är inte korrekt.',
	'copyFailed'             => 'Kunde inte kopiera bilden.',
	'missingFont'            => 'Kunde inte hitta ett teckensnitt att använda.',
	'saveFailed'             => 'Kunde inte spara bilden. Kontrollera att bildfilen och filkatalogen är skrivbara.',
	'invalidDirection'       => 'Flip direction kan bara vara `vertical` eller `horizontal`. Givet: {0}',
	'exifNotSupported'       => 'Denna PHP installation supporterar inte att läsa EXIF-data.',
];
