<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Publisher language settings
return [
    'collision'             => 'Kopijuoklis susidūrė su netikėta „{0}“ kopijuojant „{1}“ į „{2}“.',
    'destinationNotAllowed' => 'Paskirties vietos nėra leidžiamų Kopijuoklio direktorijų sąraše: {0}',
    'fileNotAllowed'        => '„{0}“ neatitinka šio „{1}“ apribojimo: {2}',

    // Publish Command
    'publishMissing' => 'Kopijuoklio („Publisher“) klasių neaptikta {0} visose vardų erdvėse (namespaces).',
    'publishSuccess' => '{1, plural,
                            =0 {„{0}“ nukopijavo nulį failų į „{2}“.}
                            =1 {„{0}“ nukopijavo vieną failą į „{2}“.}
                            one {„{0}“ nukopijavo # failą į „{2}“.}
                            few {„{0}“ nukopijavo # failus į „{2}“.}
                            other {„{0}“ nukopijavo # failų į „{2}“.}
                        }',
    'publishFailure' => '„{0}“ nepavyko paskelbti {1}!',
];
