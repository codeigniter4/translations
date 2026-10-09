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
    'sourceImageRequired'    => 'Ve vašem nastavení musíte zadat zdrojový obrázek.',
    'gdRequired'             => 'Pro použití této funkce je potřeba obrázková knihovna GD.',
    'gdRequiredForProps'     => 'Váš server musí podporovat obrázkovou knihovnu GD, aby bylo možné určit vlastnosti obrázku.',
    'gifNotSupported'        => 'Obrázky GIF často nejsou podporovány kvůli licenčním omezením. Možná budete muset místo nich použít obrázky JPG nebo PNG.',
    'jpgNotSupported'        => 'Obrázky JPG nejsou podporovány.',
    'pngNotSupported'        => 'Obrázky PNG nejsou podporovány.',
    'webpNotSupported'       => 'Obrázky WEBP nejsou podporovány.',
    'fileNotSupported'       => 'Zadaný soubor není podporovaným typem obrázku.',
    'unsupportedImageCreate' => 'Váš server nepodporuje funkce potřebné pro zpracování tohoto typu obrázku.',
    'jpgOrPngRequired'       => 'Protokol pro změnu velikosti obrázku zadaný ve vašem nastavení funguje pouze s typy obrázků JPEG nebo PNG.',
    'rotateUnsupported'      => 'Zdá se, že váš server nepodporuje otáčení obrázků.',
    'imageProcessFailed'     => 'Zpracování obrázku selhalo. Zkontrolujte, zda váš server podporuje zvolený protokol a zda je cesta k vaší knihovně obrázků správná.',
    'rotationAngleRequired'  => 'Pro otočení obrázku je potřeba úhel otočení.',
    'invalidPath'            => 'Cesta k obrázku není správná.',
    'copyFailed'             => 'Kopírování obrázku selhalo.',
    'missingFont'            => 'Nelze najít písmo k použití.',
    'saveFailed'             => 'Obrázek se nepodařilo uložit. Ujistěte se, že do obrázku a adresáře se soubory lze zapisovat.',
    'invalidDirection'       => 'Směr překlopení může být pouze "vertical" nebo "horizontal". Zadáno: "{0}"',
    'exifNotSupported'       => 'Tato instalace PHP nepodporuje čtení EXIF dat.',

    // @deprecated
    'libPathInvalid' => 'Cesta k vaší knihovně obrázků není správná. Nastavte správnou cestu v nastavení obrázků. "{0}"',
];
