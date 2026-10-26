<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Images language settings
return [
    'sourceImageRequired'    => 'Vo vašich nastaveniach musíte zadať zdrojový obrázok.',
    'gdRequired'             => 'Na použitie tejto funkcie je potrebná knižnica obrázkov GD.',
    'gdRequiredForProps'     => 'Váš server musí podporovať knižnicu obrázkov GD, aby bolo možné určiť vlastnosti obrázka.',
    'gifNotSupported'        => 'Obrázky GIF často nie sú podporované kvôli licenčným obmedzeniam. Možno budete musieť namiesto toho použiť obrázky JPG alebo PNG.',
    'jpgNotSupported'        => 'Obrázky JPG nie sú podporované.',
    'pngNotSupported'        => 'Obrázky PNG nie sú podporované.',
    'webpNotSupported'       => 'Obrázky WEBP nie sú podporované.',
    'fileNotSupported'       => 'Zadaný súbor nie je podporovaným typom obrázka.',
    'unsupportedImageCreate' => 'Váš server nepodporuje funkcie potrebné na spracovanie tohto typu obrázka.',
    'jpgOrPngRequired'       => 'Protokol zmeny veľkosti obrázka zadaný vo vašich nastaveniach funguje iba s typmi obrázkov JPEG alebo PNG.',
    'rotateUnsupported'      => 'Zdá sa, že váš server nepodporuje otáčanie obrázkov.',
    'imageProcessFailed'     => 'Spracovanie obrázka zlyhalo. Skontrolujte, či váš server podporuje zvolený protokol a či je cesta k vašej knižnici obrázkov správna.',
    'rotationAngleRequired'  => 'Na otočenie obrázka je potrebný uhol otočenia.',
    'invalidPath'            => 'Cesta k obrázku nie je správna.',
    'copyFailed'             => 'Kopírovanie obrázka zlyhalo.',
    'missingFont'            => 'Nie je možné nájsť písmo na použitie.',
    'saveFailed'             => 'Obrázok sa nepodarilo uložiť. Uistite sa, že do obrázka a adresára so súbormi je možné zapisovať.',
    'invalidDirection'       => 'Smer preklopenia môže byť iba "vertical" alebo "horizontal". Zadané: "{0}"',
    'exifNotSupported'       => 'Táto inštalácia PHP nepodporuje čítanie EXIF dát.',

    // @deprecated
    'libPathInvalid' => 'Cesta k vašej knižnici obrázkov nie je správna. Nastavte správnu cestu v nastaveniach obrázkov. "{0}"',
];
