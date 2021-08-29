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
    'noRuleSets'      => 'Nessun set di regole è stato specificato nella configurazione della Validazione.',
    'ruleNotFound'    => '{0} non è una regola valida.',
    'groupNotFound'   => '{0} non è un gruppo di regole di validazione.',
    'groupNotArray'   => '{0} il gruppo di regole deve essere un array.',
    'invalidTemplate' => '{0} non è un valido template di Validazione.',

    // Rule Messages
    'alpha'                 => 'Il campo {field} può contenere solamente caratteri dell\'alfabeto.',
    'alpha_dash'            => 'Il campo {field} può contenere solamente caratteri alfanumerici, lineette basse, e lineette (meno).',
    'alpha_numeric'         => 'Il campo {field} può contenere solamente caratteri alfanumerici.',
    'alpha_numeric_punct'   => 'Il campo {field} può contenere solo caratteri alfanumerici, spazi e i caratteri ~ ! # $ % & * - _ + = | : ..',
    'alpha_numeric_space'   => 'Il campo {field} può contenere solamente caratteri alfanumerici e spazi.',
    'alpha_space'           => 'Il campo {field} può contenere solamente caratteri dell\'alfabeto e spazi.',
    'decimal'               => 'Il campo {field} deve contenere un numero decimale.',
    'differs'               => 'Il campo {field} deve essere diverso dal campo {param}.',
    'equals'                => 'Il campo {field} deve essere esattamente: {param}.',
    'exact_length'          => 'Il campo {field} deve essere esattamente di {param} caratteri.',
    'greater_than'          => 'Il campo {field} deve contenere un numero maggiore di {param}.',
    'greater_than_equal_to' => 'Il campo {field} deve contenere un numero maggiore o uguale a {param}.',
    'hex'                   => 'Il campo {field} può contenere solamente caratteri esadecimali.',
    'in_list'               => 'Il campo {field} deve essere uno tra: {param}.',
    'integer'               => 'Il campo {field} deve contenere un intero.',
    'is_natural'            => 'Il campo {field} deve contenere solo caratteri numerici.',
    'is_natural_no_zero'    => 'Il campo {field} deve contenere solo caratteri numerici e deve essere maggiore di zero.',
    'is_not_unique'         => 'Il campo {field} deve contenere un valore già esistente nel database.',
    'is_unique'             => 'Il campo {field} deve contenere un valore univoco.',
    'less_than'             => 'Il campo {field} deve contenere un numero minore di {param}.',
    'less_than_equal_to'    => 'Il campo {field} deve contenere un numero minore o uguale a {param}.',
    'matches'               => 'Campo {field} non corrispondente al campo {param} .',
    'max_length'            => 'Il campo {field} non può superare i {param} caratteri.',
    'min_length'            => 'Il campo {field} deve essere almeno di {param} caratteri.',
    'not_equals'            => 'Il campo {field} non può essere: {param}.',
    'not_in_list'           => 'Il campo {field} non deve essere parte di: {param}.',
    'numeric'               => 'Il campo {field} deve contenere solo numeri.',
    'regex_match'           => 'Il formato per il campo {field} non è corretto.',
    'required'              => 'Il campo {field} è obbligatorio.',
    'required_with'         => 'Il campo {field} è obbligatorio quando {param} è presente.',
    'required_without'      => 'Il campo {field} è obbligatorio quando {param} non è presente.',
    'string'                => 'Il campo {field} deve essere una stringa valida.',
    'timezone'              => 'Il campo {field} deve essere una timezone valida.',
    'valid_base64'          => 'Il campo {field} deve essere una stringa in base64 valida.',
    'valid_email'           => 'Il campo {field} deve contenere un indirizzo email valido.',
    'valid_emails'          => 'Il campo {field} deve contenere tutti indirizzi email validi.',
    'valid_ip'              => 'Il campo {field} deve contenere un IP valido.',
    'valid_url'             => 'Il campo {field} deve contenere un URL valido.',
    'valid_date'            => 'Il campo {field} deve contenere una data valida.',

    // Credit Cards
    'valid_cc_num' => '{field} non sembra essere un numero di carta di credito valido.',

    // Files
    'uploaded' => 'Il file {field} non è valido.',
    'max_size' => 'Il file {field} supera le dimensioni consentite.',
    'is_image' => 'Il file {field} non è un\'immagine valida.',
    'mime_in'  => 'Il file {field} non ha un mime consentito.',
    'ext_in'   => 'Il file {field} non ha una estesione valida.',
    'max_dims' => 'Il file {field} o non è una immagine oppure l\'immagine ha dimensioni troppo grandi.',
];
