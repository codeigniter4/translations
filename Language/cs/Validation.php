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
    'noRuleSets'      => 'V konfiguraci ověření nebyly zadány žádné sady pravidel.',
    'ruleNotFound'    => '{0} je neplatné pravidlo.',
    'groupNotFound'   => '{0} není skupina ověřovacích pravidel.',
    'groupNotArray'   => '{0} skupina pravidel musí být pole.',
    'invalidTemplate' => '{0} je neplatná šablona validace.',

    // Rule Messages
    'alpha'                 => 'Pole {field} může obsahovat pouze abecední znaky.',
    'alpha_dash'            => 'Pole {field} může obsahovat pouze alfanumerické znaky, podtržítka a pomlčky.',
    'alpha_numeric'         => 'Pole {field} může obsahovat pouze alfanumerické znaky.',
    'alpha_numeric_punct'   => 'Pole {field} může obsahovat pouze alfanumerické znaky, mezery a ~ ! # $ % & * - _ + = | : . znaky.',
    'alpha_numeric_space'   => 'Pole {field} může obsahovat pouze alfanumerické znaky a mezery.',
    'alpha_space'           => 'Pole {field} může obsahovat pouze abecední znaky a mezery.',
    'decimal'               => 'Pole {field} musí obsahovat číslo (0-9).',
    'differs'               => 'Pole {field} musí být rozdílné než pole {param}.',
    'equals'                => 'Pole {field} musí být přesně: {param}.',
    'exact_length'          => 'Pole {field} musí být přesně {param} znaků dlouhé.',
    'greater_than'          => 'Pole {field} musí obsahovat číslo větší než {param}.',
    'greater_than_equal_to' => 'Pole {field} musí obsahovat číslo větší nebo rovno než {param}.',
    'hex'                   => 'Pole {field} může obsahovat pouze hexadecimální znaky.',
    'in_list'               => 'Pole {field} musí být jedno z: {param}.',
    'integer'               => 'Pole {field} musí obsahovat celé číslo.',
    'is_natural'            => 'Pole {field} musí obsahovat pouze číslice.',
    'is_natural_no_zero'    => 'Pole {field} musí obsahovat pouze číslice a musí být větší než nula.',
    'is_not_unique'         => 'Pole {field} musí obsahovat dříve existující hodnotu v databázi.',
    'is_unique'             => 'Pole {field} musí obsahovat unikátní hodnotu.',
    'less_than'             => 'Pole {field} musí obsahovat číslo menší než {param}.',
    'less_than_equal_to'    => 'Pole {field} musí obsahovat číslo menší nebo rovno než {param}.',
    'matches'               => 'Pole {field} sa neshoduje s polem {param}.',
    'max_length'            => 'Pole {field} nemůže překročit počet znaků: {param}.',
    'min_length'            => 'Pole {field} musí být delší než {param} znaky/ů.',
    'not_equals'            => 'Pole {field} nemůže být: {param}.',
    'not_in_list'           => 'Pole {field} nesmí být jedno z: {param}.',
    'numeric'               => 'Pole {field} musí obsahovat pouze čísla.',
    'regex_match'           => 'Pole {field} má nesprávný formát.',
    'required'              => 'Pole {field} je povinné.',
    'required_with'         => 'Pole {field} je povinné pokud {param} je zadán.',
    'required_without'      => 'Pole {field} je povinné pokud {param} není zadán.',
    'string'                => 'Pole {field} musí být platný řetězec.',
    'timezone'              => 'Pole {field} musí být platná časová zóna.',
    'valid_base64'          => 'Pole {field} musí být platný base64 řetězec.',
    'valid_email'           => 'Pole {field} musí obsahovat platnou emailovú adresu.',
    'valid_emails'          => 'Pole {field} musí obsahovat pouze platné emailové adresy.',
    'valid_ip'              => 'Pole {field} musí obsahovat platnou IP adresu.',
    'valid_url'             => 'Pole {field} musí obsahovat platnou URL adresu.',
    'valid_date'            => 'Pole {field} musí obsahovat platné datum.',

    // Credit Cards
    'valid_cc_num' => '{field} sa nezdá být platné číslo kreditní/debetní karty.',

    // Files
    'uploaded' => '{field} je neplatný nahraný soubor.',
    'max_size' => '{field} je příliš velký soubor.',
    'is_image' => '{field} je neplatný nahraný obrázek.',
    'mime_in'  => '{field} nemá platný mime typ.',
    'ext_in'   => '{field} je neplatný typ souboru.',
    'max_dims' => '{field} není obrázek, nebo je příliš široký nebo vysoký.',
];
