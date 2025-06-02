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

// Router language settings
return [
    'invalidParameter'         => 'એક પેરામીટર અપેક્ષિત પ્રકાર સાથે મેળ ખાતો નથી.', // 'A parameter does not match the expected type.'
    'missingDefaultRoute'      => 'શું પ્રદર્શિત કરવું જોઈએ તે નક્કી કરવામાં અસમર્થ. રૂટીંગ ફાઇલમાં ડિફોલ્ટ રૂટ સ્પષ્ટ કરવામાં આવ્યો નથી.', // 'Unable to determine what should be displayed. A default route has not been specified in the routing file.'
    'invalidDynamicController' => 'સુરક્ષા કારણોસર ડાયનેમિક કંટ્રોલરને મંજૂરી નથી. રૂટ હેન્ડલર: "{0}"', // 'A dynamic controller is not allowed for security reasons. Route handler: "{0}"'
    'invalidControllerName'    => 'નેમસ્પેસ ડિલિમિટર બેકસ્લેશ (\\) છે, સ્લેશ (/) નથી. રૂટ હેન્ડલર: "{0}"', // 'The namespace delimiter is a backslash (\), not a slash (/). Route handler: "{0}"'
];
