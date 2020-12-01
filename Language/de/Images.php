<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Images language settings
return [
	'sourceImageRequired'    => 'Es muss in den Einstellungen ein Quellbild angegeben werden',
	'gdRequired'             => 'Für die Nutzung dieser Funktion ist die GD-Bildbibliothek erforderlich.',
	'gdRequiredForProps'     => 'Der Server muss die GD-Bildbibliothek unterstützen, um die Bildeigenschaften zu bestimmen.',
	'gifNotSupported'        => 'GIF-Bilder werden aufgrund von Lizenzbeschränkungen oft nicht unterstützt. Möglicherweise müssen stattdessen JPG- oder PNG-Bilder verwendet werden.',
	'jpgNotSupported'        => 'JPG-Bilder werden nicht unterstützt.',
	'pngNotSupported'        => 'PNG-Bilder werden nicht unterstützt.',
	'webpNotSupported'       => 'WEBP-Bilder werden nicht unterstützt.',
	'fileNotSupported'       => 'Die Datei enthält ein nicht unterstütztes Bildformat.',
	'unsupportedImageCreate' => 'Der Server unterstützt die GD-Funktion, die für die Verarbeitung dieser Art von Bildern erforderlich ist, nicht.',
	'jpgOrPngRequired'       => 'Das in den Einstellungen angegebene Protokoll zur Änderung der Bildgröße funktioniert nur mit den Bildtypen JPEG oder PNG.',
	'rotateUnsupported'      => 'Die Bildrotation scheint vom Server nicht unterstützt zu werden.',
	'libPathInvalid'         => 'Der Pfad zu Ihrer Bildbibliothek ist nicht korrekt. Bitte in den Bildeinstellungen den richtigen Pfad einstellen. {0}',
	'imageProcessFailed'     => 'Die Bildverarbeitung ist fehlgeschlagen. Bitte überprüfen, ob der Server das gewählte Protokoll unterstützt und ob der Pfad zur Bildbibliothek korrekt ist.',
	'rotationAngleRequired'  => 'Für die Drehung des Bildes ist ein Drehwinkel erforderlich.',
	'invalidPath'            => 'Der Pfad zum Bild ist nicht korrekt.',
	'copyFailed'             => 'Die Bildkopierfunktion ist fehlgeschlagen.',
	'missingFont'            => 'Es konnte keine zu verwendende Schriftart gefunden werden.',
	'saveFailed'             => 'Das Bild kann nicht gespeichert werden. Bitte sicherstellen, dass das Bild- und Dateiverzeichnis beschreibbar ist.',
	'invalidDirection'       => 'Die Umkehrrichtung kann nur `vertical` oder `horizontal` sein. Gegeben: {0}',
	'exifNotSupported'       => 'Das Lesen von EXIF-Daten wird von dieser PHP-Installation nicht unterstützt.',
];
