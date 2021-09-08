<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'Validavimo konfigūracijoje nenurodyta jokių taisyklių.',
    'ruleNotFound'    => '{0} nėra tinkama taisyklė.',
    'groupNotFound'   => '{0} nėra validavimo taisyklių grupė.',
    'groupNotArray'   => '{0} taisyklių grupė turi būti masyvas.',
    'invalidTemplate' => '{0} nėra tinkamas validavimo šablonas.',

    // Rule Messages
    'alpha'                 => 'Lauke {field} gali būti tik abėcėlės raidės.',
    'alpha_dash'            => 'Lauke {field} gali būti tik raidės, skaičiai, brūkšneliai ir apatiniai brūkšneliai.',
    'alpha_numeric'         => 'Lauke {field} gali būti tik raidės ir skaičiai.',
    'alpha_numeric_space'   => 'Lauke {field} gali būti tik raidės, skaičiai ir tarpai.',
    'alpha_space'           => 'Lauke {field} gali būti tik raidės ir tarpai.',
    'decimal'               => 'Lauke {field} turi būti dešimtainis skaičius.',
    'differs'               => 'Laukas {field} turi skirtis nuo {param} lauko.',
    'equals'                => 'Laukas {field} turi tiksliai atitikti: {param}.',
    'exact_length'          => 'Laukas {field} turi būti tiksliai {param} ženklų ilgio.',
    'greater_than'          => 'Lauke {field} turi būti skaičius, didesnis nei {param}.',
    'greater_than_equal_to' => 'Lauke {field} turi būti skaičius, didesnis ar lygus {param}.',
    'in_list'               => 'Lauko {field} reikšmė turi atitikti vieną iš: {param}.',
    'integer'               => 'Lauke {field} gali būti tik sveikasis skaičius.',
    'is_natural'            => 'Lauke {field} gali būti tik skaitmenys.',
    'is_natural_no_zero'    => 'Lauke {field} gali būti tik skaitmenys, ir jo reikšmė turi būti didesnė nei nulis.',
    'is_unique'             => 'Lauke {field} turi būti unikali reikšmė.',
    'less_than'             => 'Lauke {field} turi būti skaičius, mažesnis už {param}.',
    'less_than_equal_to'    => 'Lauke {field} turi būti skaičius, mažesnis ar lygus {param}.',
    'matches'               => 'Laukas {field} neatitinka {param} lauko.',
    'max_length'            => 'Laukas {field} negali būti ilgesnis, nei {param} ženklai/-ų.',
    'min_length'            => 'Lauke {field} negali būti mažiau nei {param} ženklų.',
    'not_equals'            => 'Lauko {field} reikšmė negali būti {param}.',
    'numeric'               => 'Lauke {field} gali būti tik skaičiai.',
    'regex_match'           => 'Laulas {field} yra neteisingo formato.',
    'required'              => 'Laukas {field} yra privalomas.',
    'required_with'         => 'Laukas {field} yra privalomas kai yra nustatytas {param}.',
    'required_without'      => 'Laukas {field} yra privalomas kai nėra nustatytas {param}.',
    'timezone'              => 'Laukas {field} turi atitikti egzistuojančią laiko zoną.',
    'valid_base64'          => 'Lauke {field} turi būti validi base64 eilutė.',
    'valid_email'           => 'Lauke {field} turi būti teisyklingas el. pašto adresas.',
    'valid_emails'          => 'Lauke {field} visi el. pašto adresai turi būti teisyklingi.',
    'valid_ip'              => 'Lauke {field} turi būti taisyklingas IP adresas.',
    'valid_url'             => 'Lauke {field} turi būti taisyklingas URL.',
    'valid_date'            => 'Lauke {field} turi būti taisyklinga data.',

    // Credit Cards
    'valid_cc_num' => 'Nepanašu, kad lauke {field} būtų įrašytas taisyklingas kredito kortelės numeris.',

    // Files
    'uploaded' => '{field} nėra realus įkeltas failas.',
    'max_size' => '{field} failas yra per didelis.',
    'is_image' => '{field} nėra taisyklingas įkeltas paveikslėlis.',
    'mime_in'  => '{field} nėra taisyklingo mime tipo.',
    'ext_in'   => '{field} neturi taisyklingo failo praplėtimo.',
    'max_dims' => '{field} nėra paveikslėlis, arba paveikslėlis yra per platus ar per aukštas.',
];
