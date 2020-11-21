<?php

/**
 * Images language strings.
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
 * @author     Dāvis Lasis <davis.lasis@gmail.com>
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'Iestatījumos ir jānorāda avota attēls.',
   'gdRequired'             => 'Lai izmantotu šo funkciju, ir nepieciešama GD attēlu bibliotēka.',
   'gdRequiredForProps'     => 'Jūsu serverim ir jāatbalsta GD attēlu bibliotēka, lai noteiktu attēla īpašības.',
   'gifNotSupported'        => 'GIF attēli bieži netiek atbalstīti licencēšanas ierobežojumu dēļ. Tā vietā, iesakam izmantot JPG vai PNG attēlus.',
   'jpgNotSupported'        => 'JPG attēli netiek atbalstīti.',
   'pngNotSupported'        => 'PNG attēli netiek atbalstīti.',
   'webpNotSupported'       => 'WEBP attēli netiek atbalstīti.',
   'fileNotSupported'       => 'Piegādātais fails nav atbalstīts attēla tips.',
   'unsupportedImageCreate' => 'Jūsu serveris neatbalsta GD funkciju, kas nepieciešama šāda veida attēlu apstrādei.',
   'jpgOrPngRequired'       => 'Jūsu iestatījumos norādītais attēla lieluma maiņas protokols darbojas tikai ar JPEG vai PNG attēlu tipiem.',
   'rotateUnsupported'      => 'Jūsu serveris neatbalsta attēlu pagriešanu un rotācijas funkcijas.',
   'libPathInvalid'         => 'Ceļš uz attēlu bibliotēku nav pareizs. Lūdzu, attēla iestatījumos iestatiet pareizo ceļu. {0}',
   'imageProcessFailed'     => 'Attēlu apstrāde neizdevās. Lūdzu, pārbaudiet, vai jūsu serveris atbalsta izvēlēto protokolu un vai ceļš uz attēlu bibliotēku ir pareizs.',
   'rotationAngleRequired'  => 'Attēla pagriešanai ir nepieciešams rotācijas leņķis.',
   'invalidPath'            => 'Ceļš uz attēlu nav pareizs.',
   'copyFailed'             => 'Attēla kopēšanas darbība neizdevās.',
   'missingFont'            => 'Nevar atrast izmantojamu fontu.',
   'saveFailed'             => 'Nevar saglabāt attēlu. Lūdzu, pārliecinieties vai attēls un failu direktorija ir rakstāma.',
   'invalidDirection'       => 'Pagriešanas virzienam ir jābūt: `vertical` vai `horizontal`. Norādīts: {0}',
   'exifNotSupported'       => 'Šī PHP instalācija neatbalsta EXIF datu lasīšanu.',
];
