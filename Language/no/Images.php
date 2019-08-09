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
   'sourceImageRequired'    => 'Det må spesifiseres i innstillingene til et kildebilde',
   'gdRequired'             => 'For å bruke denne funksjonen er GD-bildebiblioteket påkrevd.',
   'gdRequiredForProps'     => 'Serveren må støtte GD-bildebiblioteket for å bestemme bildeegenskapene.',
   'gifNotSupported'        => 'GIF-bilder støttes ofte ikke på grunn av lisensbegrensninger. Du må kanskje bruke JPG- eller PNG-bilder i stedet.',
   'jpgNotSupported'        => 'JPG-bilder støttes ikke.',
   'pngNotSupported'        => 'PNG-bilder støttes ikke.',
   'unsupportedImagecreate' => 'Serveren støtter ikke GD-funksjonen som kreves for å behandle denne typen bilder.',
   'jpgOrPngRequired'       => 'Endringsprotokoll for bildestørrelse som er spesifisert i innstillingene, fungerer bare med JPEG- eller PNG-bildetyper.',
   'rotateUnsupported'      => 'Bildrotasjon ser ikke ut til å være støttet av serveren.',
   'libPathInvalid'         => 'Stien til bildebiblioteket ditt er ikke riktig. Angi riktig sti i bildeinnstillingene. {0, string)',
   'imageProcessFailed'     => 'Bildebehandlingen mislyktes. Kontroller om serveren støtter den valgte protokollen, og om banen til bildebiblioteket er riktig.',
   'rotationAngleRequired'  => 'Rotasjonen av bildet krever en rotasjonsvinkel.',
   'invalidPath'            => 'Stien til bildet er ikke riktig.',
   'copyFailed'             => 'Rutinen for bildekopiering mislyktes.',
   'missingFont'            => 'Det er ikke mulig å finne en font som skal brukes.',
   'saveFailed'             => 'Bildet kan ikke lagres. Forsikre deg om at bilde- og filkatalogen er skrivbar.',
   'invalidDirection'       => 'Den motsatte retningen kan bare være "vertikal" eller "horisontal". satt: {0}',
   'exifNotSupported'       => 'Lesing av EXIF-data støttes ikke av denne PHP-installasjonen.',
];
