<?php

/**
 * Image language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
    'sourceImageRequired'    => 'Gelieve een bron afbeelding op te geven in uw instellingen.',
    'gdRequired'             => 'De GD image library is vereist voor deze functie.',
    'gdRequiredForProps'     => 'De GD image library is vereist om de afbeelding specificaties te achterhalen.',
    'gifNotSupported'        => 'GIF afbeeldingen zijn vaak niet ondersteunt omwille van licentie restricties. Probeer indien mogelijk met PNG of JPG.',
    'jpgNotSupported'        => 'JPG afbeeldingen zijn niet ondersteunt.',
    'pngNotSupported'        => 'PNG afbeeldingen zijn niet ondersteunt.',
    'fileNotSupported'       => 'Het opgegeven bestand is geen ondersteutn afbeelding type.',
    'unsupportedImageCreate' => 'De GD image library nodig voor deze functie is niet beschikbaar.',
    'jpgOrPngRequired'       => 'Het afbeelding "resize" protocol opgegeven in uw instellingen is enkel beschikbaar voor JPEG en PNG bestanden.',
    'rotateUnsupported'      => 'Afbeelding draaien lijkt niet ondersteunt te worden door uw server.',
    'libPathInvalid'         => 'Het pad naar uw Image Library lijkt niet correct. Gelieve het correcte pad op te geven in uw instellingen. {0, string)',
    'imageProcessFailed'     => 'Afbeelding verwerken gefaald. Gelieve te verifieren of uw server het gekozen protocol ondersteunt en het pad naar uw Image Library correct is',
    'rotationAngleRequired'  => 'Een rotatiehoek is vereist om de afbeelding te roteren.',
    'invalidPath'            => 'Het pad naar de afbeelding is niet correct.',
    'copyFailed'             => 'De routine voor het kopiëren van afbeeldingen is mislukt.',
    'missingFont'            => 'Kan het opgegeven lettertype niet vinden.',
    'saveFailed'             => 'Kan de afbeelding niet opslaan. Zorg ervoor dat de afbeelding en de bestandsmap schrijfbaar zijn.',
    'invalidDirection'       => 'De draairichting kan alleen `vertical` of `horizontal` zijn. Opgegeven: {0}',
    'exifNotSupported'       => 'Lezen van EXIF data wordt niet ondersteunt door uw PHP installatie.',
];
