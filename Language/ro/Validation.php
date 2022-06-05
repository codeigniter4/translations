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
    'noRuleSets'      => 'Nu sunt specificate seturile de reguli în configurația validării.',
    'ruleNotFound'    => '{0} nu este o regulă valabilă.',
    'groupNotFound'   => '{0} nu este un grup de reguli de validare.',
    'groupNotArray'   => '{0} grupul de reguli trebuie să fie o matrice.',
    'invalidTemplate' => '{0} nu este un șablon valid de validare.',

    // Rule Messages
    'alpha'                 => 'Câmpul {field} poate conține doar caractere alfabetice.',
    'alpha_dash'            => 'Câmpul {field} poate conține numai caractere alfanumerice, liniuţă de subliniere și liniuță.',
    'alpha_numeric'         => 'Câmpul {field} poate conține doar caractere alfanumerice.',
    'alpha_numeric_punct'   => 'Câmpul {field} poate conține doar caractere alfanumerice, spații și  ~ ! # $ % & * - _ + = | : ..',
    'alpha_numeric_space'   => 'Câmpul {field} poate conține doar caractere alfanumerice și spațiale.',
    'alpha_space'           => 'Câmpul {field} poate conține doar caractere alfabetice și spații.',
    'decimal'               => 'Câmpul {field} trebuie să conțină un număr zecimal.',
    'differs'               => 'Câmpul {field} trebuie să difere de câmpul {param}.',
    'equals'                => 'Câmpul {field} trebuie să fie exact: {param}.',
    'exact_length'          => 'Câmpul {field} trebuie să aibă exact {param} caractere lungime.',
    'greater_than'          => 'Câmpul {field} trebuie să conțină un număr mai mare decât {param}.',
    'greater_than_equal_to' => 'Câmpul {field} trebuie să conțină un număr mai mare sau egal cu {param}.',
    'hex'                   => 'Câmpul {field} poate conține doar caractere hexazecimale.',
    'in_list'               => 'Câmpul {field} trebuie să fie unul dintre: {param}.',
    'integer'               => 'Câmpul {field} trebuie să conțină un număr întreg.',
    'is_natural'            => 'Câmpul {field} trebuie să conțină doar cifre.',
    'is_natural_no_zero'    => 'Câmpul {field} trebuie să conțină doar cifre și trebuie să fie mai mare decât zero.',
    'is_not_unique'         => 'Câmpul {field} trebuie să conțină o valoare existentă anterior în baza de date.',
    'is_unique'             => 'Câmpul {field} trebuie să conțină o valoare unică.',
    'less_than'             => 'Câmpul {field} trebuie să conțină un număr mai mic decât {param}.',
    'less_than_equal_to'    => 'Câmpul {field} trebuie să conțină un număr mai mic sau egal cu {param}.',
    'matches'               => 'Câmpul {field} nu se potrivește cu câmpul {param}.',
    'max_length'            => 'Câmpul {field} nu poate depăși {param} caractere în lungime.',
    'min_length'            => 'Câmpul {field} trebuie să aibă cel puțin {param} caractere lungime.',
    'not_equals'            => 'Câmpul {field} nu poate fi: {param}.',
    'not_in_list'           => 'Câmpul {field} nu trebuie să fie unul dintre: {param}.',
    'numeric'               => 'Câmpul {field} trebuie să conțină numai numere.',
    'regex_match'           => 'Câmpul {field} nu este in formatul corect.',
    'required'              => 'Câmpul {field} este obligatoriu.',
    'required_with'         => 'Câmpul {field} este obligatoriu când {param} este prezent.',
    'required_without'      => 'Câmpul {field} este obligatoriu când {param} nu este prezent.',
    'string'                => 'Câmpul {field} trebuie să fie un șir valid.',
    'timezone'              => 'Câmpul {field} trebuie să fie un fus orar valid.',
    'valid_base64'          => 'Câmpul {field} trebuie să fie un șir valid de tip base64.',
    'valid_email'           => 'Câmpul {field} trebuie să conțină o adresă de e-mail validă.',
    'valid_emails'          => 'Câmpul {field} trebuie să conțină toate adresele de e-mail valide.',
    'valid_ip'              => 'Câmpul {field} trebuie să conțină un IP valid.',
    'valid_url'             => 'Câmpul {field} trebuie să conțină un URL valid.',
    'valid_url_strict'      => 'Câmpul {field} trebuie să conțină un URL valid.',
    'valid_date'            => 'Câmpul {field} trebuie să conțină o dată validă.',

    // Credit Cards
    'valid_cc_num' => '{field} nu pare a fi un număr valid de card de credit.',

    // Files
    'uploaded' => '{field} nu este un fișier încărcat valid.',
    'max_size' => '{field} este un fișier prea mare.',
    'is_image' => '{field} nu este un fișier imagine încărcat corect.',
    'mime_in'  => '{field} nu are un tip mime valid.',
    'ext_in'   => '{field} nu are o extensie de fișier validă.',
    'max_dims' => '{field} fie nu este o imagine, fie este prea lată sau prea înaltă.',
];
