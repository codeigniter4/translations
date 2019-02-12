<?php

/**
 * Image language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'Es muss in den Einstellungen ein Quellbild angegeben werden',
   'gdRequired'             => 'Für die Nutzung dieser Funktion ist die GD-Bildbibliothek erforderlich.',
   'gdRequiredForProps'     => 'Der Server muss die GD-Bildbibliothek unterstützen, um die Bildeigenschaften zu bestimmen.',
   'gifNotSupported'        => 'GIF-Bilder werden aufgrund von Lizenzbeschränkungen oft nicht unterstützt. Möglicherweise müssen stattdessen JPG- oder PNG-Bilder verwendet werden.',
   'jpgNotSupported'        => 'JPG-Bilder werden nicht unterstützt.',
   'pngNotSupported'        => 'PNG-Bilder werden nicht unterstützt.',
   'unsupportedImagecreate' => 'Der Server unterstützt die GD-Funktion, welche für die Verarbeitung dieser Art von Bildern erforderlich ist, nicht.',
   'jpgOrPngRequired'       => 'Das in den Einstellungen angegebene Protokoll zur Änderung der Bildgröße funktioniert nur mit den Bildtypen JPEG oder PNG.',
   'rotateUnsupported'      => 'Die Bildrotation scheint vom Server nicht unterstützt zu werden.',
   'libPathInvalid'         => 'Der Pfad zu Ihrer Bildbibliothek ist nicht korrekt. Bitte in den Bildeinstellungen den richtigen Pfad einstellen. {0, string)',
   'imageProcessFailed'     => 'Die Bildverarbeitung ist fehlgeschlagen. Bitte überprüfen, ob der Server das gewählte Protokoll unterstützt und ob der Pfad zur Bildbibliothek korrekt ist.',
   'rotationAngleRequired'  => 'Für die Drehung des Bildes ist ein Drehwinkel erforderlich.',
   'invalidPath'            => 'Der Pfad zum Bild ist nicht korrekt.',
   'copyFailed'             => 'Die Image-Kopierroutine ist fehlgeschlagen.',
   'missingFont'            => 'Es ist nicht möglich, eine zu verwendende Schriftart zu finden.',
   'saveFailed'             => 'Das Bild kann nicht gespeichert werden. Bitte sicherstellen, dass das Bild- und Dateiverzeichnis beschreibbar ist.',
   'invalidDirection'       => 'Die Umkehrrichtung kann nur `vertical` oder `horizontal` sein. Gegeben: {0}',
   'exifNotSupported'       => 'Das Lesen von EXIF-Daten wird von dieser PHP-Installation nicht unterstützt.',
];
