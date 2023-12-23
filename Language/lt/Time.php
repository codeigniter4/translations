<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Time language settings
// Lithuanian might need more nuances: there is difference if the time is in the future
// or in the past; (e.g., 7 months in the past would be "prieš 7 mėnesius",
// and in the future – "už 7 mėnesių")
return [
    'invalidFormat'  => '„{0}“ nėra galiojantis datos ir laiko formatas',
    'invalidMonth'   => 'Menesių reikšmės gali būti nuo 1 iki 12. Įrašyta: {0}',
    'invalidDay'     => 'Dienų reikšmės gali būti nuo 1 iki 31. Įrašyta: {0}',
    'invalidOverDay' => 'Dienų reikšmės gali būti nuo 1 iki {0}. Įrašyta: {1}',
    'invalidHours'   => 'Valandų reikšmės gali būti nuo 0 iki 23. Įrašyta: {0}',
    'invalidMinutes' => 'Minučių reikšmės gali būti nuo 0 iki 59. Įrašyta: {0}',
    'invalidSeconds' => 'Sekundžių reikšmės gali būti nuo 0 iki 59. Įrašyta: {0}',
    // hint for translator:
    // '{0, plural, =0 {nulį metų} =1 {vienerius metus} one {dvidešimtvienerius metus} few {penkis metus} other{trisdešimt metų}}',
    'years'     => '{0, plural, =0 {# metų} =1 {# metus} one {# metus} few {# metus} other{# metų}}',
    'months'    => '{0, plural, =0 {# mėnesių} =1 {# mėnesį} one {# mėnesį} few {# mėnesius} other{# mėnesių}}',
    'weeks'     => '{0, plural, =0 {# savaičių} =1 {# savaitę} one {# savaitę} few {# savaites} other{# savaičių}}',
    'days'      => '{0, plural, =0 {# dienų} =1 {# dieną} one {# dieną} few {# dienas} other{# dienų}}',
    'hours'     => '{0, plural, =0 {# valandų} =1 {# valanda} one {# valanda} few {# valandos} other{# valandų}}',
    'minutes'   => '{0, plural, =0 {# minučių} =1 {# minutę} one {# minutę} few {# minutes} other{# minučių}}',
    'seconds'   => '{0, plural, =0 {# sekundžių} =1 {# sekundę} one {# sekundę} few {# sekundes} other{# sekundžių}}',
    'ago'       => 'prieš {0}',
    'inFuture'  => 'po {0}',
    'yesterday' => 'vakar',
    'tomorrow'  => 'rytoj',
    'now'       => 'dabar',
];
