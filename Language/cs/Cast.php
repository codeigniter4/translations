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
    'baseCastMissing'        => 'Třída "{0}" musí dědit od třídy "CodeIgniter\Entity\Cast\BaseCast".',
    'enumInvalidCaseName'    => 'Neplatný název případu (case) "{0}" pro enum "{1}".',
    'enumInvalidType'        => 'Očekáván enum typu "{1}", ale přijat "{0}".',
    'enumInvalidValue'       => 'Neplatná hodnota "{1}" pro enum "{0}".',
    'enumMissingClass'       => 'Pro přetypování na enum musí být zadána třída enumu.',
    'enumNotEnum'            => '"{0}" není platná třída enumu.',
    'invalidCastMethod'      => '"{0}" je neplatná metoda přetypování, platné metody jsou: ["get", "set"].',
    'invalidTimestamp'       => 'Přetypování "timestamp" očekává platné časové razítko.',
    'jsonErrorCtrlChar'      => 'Nalezen neočekávaný řídicí znak.',
    'jsonErrorDepth'         => 'Byla překročena maximální hloubka zásobníku.',
    'jsonErrorStateMismatch' => 'Podtečení nebo neshoda režimů.',
    'jsonErrorSyntax'        => 'Chyba syntaxe, poškozený JSON.',
    'jsonErrorUnknown'       => 'Neznámá chyba.',
    'jsonErrorUtf8'          => 'Poškozené UTF-8 znaky, pravděpodobně nesprávně zakódované.',
];
