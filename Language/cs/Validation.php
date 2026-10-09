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

// Validation language settings
return [
    // Core Messages
    'noRuleSets'      => 'V konfiguraci validace nejsou zadány žádné sady pravidel.',
    'ruleNotFound'    => '"{0}" není platné pravidlo.',
    'groupNotFound'   => '"{0}" není skupina validačních pravidel.',
    'groupNotArray'   => 'Skupina pravidel "{0}" musí být pole.',
    'invalidTemplate' => '"{0}" není platná šablona Validation.',

    // Rule Messages
    'alpha'                 => 'Pole {field} může obsahovat pouze abecední znaky.',
    'alpha_dash'            => 'Pole {field} může obsahovat pouze alfanumerické znaky, podtržítka a pomlčky.',
    'alpha_numeric'         => 'Pole {field} může obsahovat pouze alfanumerické znaky.',
    'alpha_numeric_punct'   => 'Pole {field} může obsahovat pouze alfanumerické znaky, mezery a znaky ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'Pole {field} může obsahovat pouze alfanumerické znaky a mezery.',
    'alpha_space'           => 'Pole {field} může obsahovat pouze abecední znaky a mezery.',
    'decimal'               => 'Pole {field} musí obsahovat desetinné číslo.',
    'differs'               => 'Pole {field} se musí lišit od pole {param}.',
    'equals'                => 'Pole {field} musí být přesně: {param}.',
    'exact_length'          => 'Pole {field} musí mít přesně {param} znaků.',
    'field_exists'          => 'Pole {field} musí existovat.',
    'greater_than'          => 'Pole {field} musí obsahovat číslo větší než {param}.',
    'greater_than_equal_to' => 'Pole {field} musí obsahovat číslo větší nebo rovné {param}.',
    'hex'                   => 'Pole {field} může obsahovat pouze hexadecimální znaky.',
    'in_list'               => 'Pole {field} musí být jedno z: {param}.',
    'integer'               => 'Pole {field} musí obsahovat celé číslo.',
    'is_natural'            => 'Pole {field} musí obsahovat pouze číslice.',
    'is_natural_no_zero'    => 'Pole {field} musí obsahovat pouze číslice a musí být větší než nula.',
    'is_not_unique'         => 'Pole {field} musí obsahovat hodnotu, která již existuje v databázi.',
    'is_unique'             => 'Pole {field} musí obsahovat jedinečnou hodnotu.',
    'less_than'             => 'Pole {field} musí obsahovat číslo menší než {param}.',
    'less_than_equal_to'    => 'Pole {field} musí obsahovat číslo menší nebo rovné {param}.',
    'matches'               => 'Pole {field} se neshoduje s polem {param}.',
    'max_length'            => 'Pole {field} nesmí mít více než {param} znaků.',
    'min_length'            => 'Pole {field} musí mít alespoň {param} znaků.',
    'not_equals'            => 'Pole {field} nesmí být: {param}.',
    'not_in_list'           => 'Pole {field} nesmí být jedno z: {param}.',
    'numeric'               => 'Pole {field} musí obsahovat pouze čísla.',
    'regex_match'           => 'Pole {field} nemá správný formát.',
    'required'              => 'Pole {field} je povinné.',
    'required_with'         => 'Pole {field} je povinné, pokud je zadáno {param}.',
    'required_without'      => 'Pole {field} je povinné, pokud není zadáno {param}.',
    'string'                => 'Pole {field} musí být platný řetězec.',
    'timezone'              => 'Pole {field} musí být platná časová zóna.',
    'valid_base64'          => 'Pole {field} musí být platný base64 řetězec.',
    'valid_email'           => 'Pole {field} musí obsahovat platnou e-mailovou adresu.',
    'valid_emails'          => 'Pole {field} musí obsahovat pouze platné e-mailové adresy.',
    'valid_ip'              => 'Pole {field} musí obsahovat platnou IP adresu.',
    'valid_url'             => 'Pole {field} musí obsahovat platnou URL adresu.',
    'valid_url_strict'      => 'Pole {field} musí obsahovat platnou URL adresu.',
    'valid_date'            => 'Pole {field} musí obsahovat platné datum.',
    'valid_json'            => 'Pole {field} musí obsahovat platný JSON.',

    // Credit Cards
    'valid_cc_number' => '{field} nevypadá jako platné číslo kreditní karty.',

    // Files
    'uploaded' => '{field} není platný nahraný soubor.',
    'max_size' => 'Soubor {field} je příliš velký.',
    'is_image' => '{field} není platný nahraný obrázek.',
    'mime_in'  => '{field} nemá platný mime typ.',
    'ext_in'   => '{field} nemá platnou příponu souboru.',
    'max_dims' => '{field} není obrázek, nebo je příliš široký nebo vysoký.',
    'min_dims' => '{field} není obrázek, nebo není dostatečně široký nebo vysoký.',
];
