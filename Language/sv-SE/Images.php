<?php

/**
 * Image language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author     Mattias Sandström
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
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
