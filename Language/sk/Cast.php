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

// Cast language settings
return [
    'baseCastMissing'        => 'Trieda "{0}" musí dediť od triedy "CodeIgniter\Entity\Cast\BaseCast".',
    'enumInvalidCaseName'    => 'Neplatný názov prípadu (case) "{0}" pre enum "{1}".',
    'enumInvalidType'        => 'Očakávaný enum typu "{1}", ale prijatý "{0}".',
    'enumInvalidValue'       => 'Neplatná hodnota "{1}" pre enum "{0}".',
    'enumMissingClass'       => 'Pre pretypovanie na enum musí byť zadaná trieda enumu.',
    'enumNotEnum'            => '"{0}" nie je platná trieda enumu.',
    'invalidCastMethod'      => '"{0}" je neplatná metóda pretypovania, platné metódy sú: ["get", "set"].',
    'invalidTimestamp'       => 'Pretypovanie "timestamp" očakáva platnú časovú pečiatku.',
    'jsonErrorCtrlChar'      => 'Nájdený neočakávaný riadiaci znak.',
    'jsonErrorDepth'         => 'Bola prekročená maximálna hĺbka zásobníka.',
    'jsonErrorStateMismatch' => 'Podtečenie alebo nezhoda režimov.',
    'jsonErrorSyntax'        => 'Chyba syntaxe, poškodený JSON.',
    'jsonErrorUnknown'       => 'Neznáma chyba.',
    'jsonErrorUtf8'          => 'Poškodené UTF-8 znaky, pravdepodobne nesprávne zakódované.',
];
