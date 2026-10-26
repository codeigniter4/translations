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
    'noRuleSets'      => 'V konfigurácii validácie nie sú zadané žiadne sady pravidiel.',
    'ruleNotFound'    => '"{0}" nie je platné pravidlo.',
    'groupNotFound'   => '"{0}" nie je skupina validačných pravidiel.',
    'groupNotArray'   => 'Skupina pravidiel "{0}" musí byť pole.',
    'invalidTemplate' => '"{0}" nie je platná šablóna Validation.',

    // Rule Messages
    'alpha'                 => 'Pole {field} môže obsahovať iba abecedné znaky.',
    'alpha_dash'            => 'Pole {field} môže obsahovať iba alfanumerické znaky, podčiarkovníky a pomlčky.',
    'alpha_numeric'         => 'Pole {field} môže obsahovať iba alfanumerické znaky.',
    'alpha_numeric_punct'   => 'Pole {field} môže obsahovať iba alfanumerické znaky, medzery a znaky ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'Pole {field} môže obsahovať iba alfanumerické znaky a medzery.',
    'alpha_space'           => 'Pole {field} môže obsahovať iba abecedné znaky a medzery.',
    'decimal'               => 'Pole {field} musí obsahovať desatinné číslo.',
    'differs'               => 'Pole {field} sa musí líšiť od poľa {param}.',
    'equals'                => 'Pole {field} musí byť presne: {param}.',
    'exact_length'          => 'Pole {field} musí mať presne {param} znakov.',
    'field_exists'          => 'Pole {field} musí existovať.',
    'greater_than'          => 'Pole {field} musí obsahovať číslo väčšie ako {param}.',
    'greater_than_equal_to' => 'Pole {field} musí obsahovať číslo väčšie alebo rovné {param}.',
    'hex'                   => 'Pole {field} môže obsahovať iba hexadecimálne znaky.',
    'in_list'               => 'Pole {field} musí byť jedno z: {param}.',
    'integer'               => 'Pole {field} musí obsahovať celé číslo.',
    'is_natural'            => 'Pole {field} musí obsahovať iba číslice.',
    'is_natural_no_zero'    => 'Pole {field} musí obsahovať iba číslice a musí byť väčšie ako nula.',
    'is_not_unique'         => 'Pole {field} musí obsahovať hodnotu, ktorá už existuje v databáze.',
    'is_unique'             => 'Pole {field} musí obsahovať jedinečnú hodnotu.',
    'less_than'             => 'Pole {field} musí obsahovať číslo menšie ako {param}.',
    'less_than_equal_to'    => 'Pole {field} musí obsahovať číslo menšie alebo rovné {param}.',
    'matches'               => 'Pole {field} sa nezhoduje s poľom {param}.',
    'max_length'            => 'Pole {field} nemôže mať viac ako {param} znakov.',
    'min_length'            => 'Pole {field} musí mať aspoň {param} znakov.',
    'not_equals'            => 'Pole {field} nemôže byť: {param}.',
    'not_in_list'           => 'Pole {field} nesmie byť jedno z: {param}.',
    'numeric'               => 'Pole {field} musí obsahovať iba čísla.',
    'regex_match'           => 'Pole {field} nemá správny formát.',
    'required'              => 'Pole {field} je povinné.',
    'required_with'         => 'Pole {field} je povinné, ak je zadané {param}.',
    'required_without'      => 'Pole {field} je povinné, ak nie je zadané {param}.',
    'string'                => 'Pole {field} musí byť platný reťazec.',
    'timezone'              => 'Pole {field} musí byť platná časová zóna.',
    'valid_base64'          => 'Pole {field} musí byť platný base64 reťazec.',
    'valid_email'           => 'Pole {field} musí obsahovať platnú e-mailovú adresu.',
    'valid_emails'          => 'Pole {field} musí obsahovať iba platné e-mailové adresy.',
    'valid_ip'              => 'Pole {field} musí obsahovať platnú IP adresu.',
    'valid_url'             => 'Pole {field} musí obsahovať platnú URL adresu.',
    'valid_url_strict'      => 'Pole {field} musí obsahovať platnú URL adresu.',
    'valid_date'            => 'Pole {field} musí obsahovať platný dátum.',
    'valid_json'            => 'Pole {field} musí obsahovať platný JSON.',

    // Credit Cards
    'valid_cc_number' => '{field} nevyzerá ako platné číslo kreditnej karty.',

    // Files
    'uploaded' => '{field} nie je platný nahraný súbor.',
    'max_size' => 'Súbor {field} je príliš veľký.',
    'is_image' => '{field} nie je platný nahraný obrázok.',
    'mime_in'  => '{field} nemá platný mime typ.',
    'ext_in'   => '{field} nemá platnú príponu súboru.',
    'max_dims' => '{field} nie je obrázok alebo je príliš široký alebo vysoký.',
    'min_dims' => '{field} nie je obrázok alebo nie je dostatočne široký alebo vysoký.',
];
