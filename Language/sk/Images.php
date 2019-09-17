<?php

/**
 * Image language strings.
 *
 * @package    CodeIgniter
 * @author     Jozef Botka - xbotkaj on Github
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'sourceImageRequired'    => 'Musíte uviesť zdrojový obrázok v preferenciách.',
   'gdRequired'             => 'Na použitie tejto funkcie je potrebná knižnica obrázkov GD.',
   'gdRequiredForProps'     => 'Server musí podporovať knižnicu obrázkov GD, aby určil vlastnosti obrázkov.',
   'gifNotSupported'        => 'Obrázky GIF často nie sú podporované kvôli licenčným obmedzeniam. Možno budete musieť namiesto toho použiť obrázky JPG alebo PNG.',
   'jpgNotSupported'        => 'Obrázky JPG nie sú podporované.',
   'pngNotSupported'        => 'Obrázky PNG nie sú podporované.',
   'unsupportedImageCreate' => 'Váš server nepodporuje funkciu GD potrebnú na spracovanie tohto typu obrázka.',
   'jpgOrPngRequired'       => 'Protokol o zmene veľkosti obrázka špecifikovaný vo vašich preferenciách funguje iba pre typy obrázkov JPEG alebo PNG.',
   'rotateUnsupported'      => 'Zdá sa, že váš server nepodporuje rotáciu obrázkov.',
   'libPathInvalid'         => 'Cesta do vašej knižnice obrázkov nie je správna. Nastavte správnu cestu v preferenciách obrázkov. {0, string)',
   'imageProcessFailed'     => 'Spracovanie obrázku zlyhalo. Skontrolujte, či váš server podporuje zvolený protokol a či je cesta k vašej knižnici obrázkov správna.',
   'rotationAngleRequired'  => 'Na otočenie obrázku je potrebný uhol rotácie.',
   'invalidPath'            => 'Cesta k obrázku nie je správna.',
   'copyFailed'             => 'Rutina kopírovania obrázkov zlyhala.',
   'missingFont'            => 'Nie je možné nájsť písmo na použitie.',
   'saveFailed'             => 'Obrázok sa nepodarilo uložiť. Uistite sa, že adresár obrázkov a súborov je zapisovateľný.',
   'invalidDirection'       => 'Smer preklopenia môže byť iba "vertikálny" alebo "horizontálny". Zadané: {0}',
   'exifNotSupported'       => 'Táto inštalácia PHP nepodporuje čítanie EXIF dát.',
];
