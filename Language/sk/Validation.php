<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     Jozef Botka - xbotkaj on Github
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'No rulesets specified in Validation configuration.',
   'ruleNotFound'          => '{0} je neplatné pravidlo.',
   'groupNotFound'         => '{0} nie je skupina overovacích pravidiel..',
   'groupNotArray'         => '{0} skupina pravididel musí byť pole.',
   'invalidTemplate'       => '{0} je neplatná Validation predloha.',

	// Rule Messages
   'alpha'                 => 'Pole {field} môže obsahovať iba abecedné znaky.',
   'alpha_dash'            => 'Pole {field} môže obsahovať iba alfanumerické znaky, podtržníky a pomlčky.',
   'alpha_numeric'         => 'Pole {field} môže obsahovať iba alfanumerické znaky.',
   'alpha_numeric_space'   => 'Pole {field} môže obsahovať iba alfanumerické znaky a medzery.',
   'alpha_space'           => 'Pole {field} môže obsahovať iba abecedné znaky a medzery.',
   'decimal'               => 'Pole {field} musí obsahovať decimálne číslo.',
   'differs'               => 'Pole {field} musí byť rozdielne od poľa {param}.',
   'equals'                => 'Pole {field} musí byť presne: {param}.',
   'exact_length'          => 'Pole {field} musí byť presne {param} znakov dlhé.',
   'greater_than'          => 'Pole {field} musí obsahovať číslo väčšie ako {param}.',
   'greater_than_equal_to' => 'Pole {field} musí obsahovať číslo väčšie alebo rovné ako {param}.',
   'in_list'               => 'Pole {field} musí byť jedno z: {param}.',
   'integer'               => 'Pole {field} musí obsahovať celé číslo.',
   'is_natural'            => 'Pole {field} musí obsahovať iba číslice.',
   'is_natural_no_zero'    => 'Pole {field} musí obsahovať iba číslice a musí byť väčšie ako nula.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => 'Pole {field} musí obsahovať unikátnu hodnotu.',
   'less_than'             => 'Pole {field} musí obsahovať číslo menšie ako {param}.',
   'less_than_equal_to'    => 'Pole {field} musí obsahovať číslo menšie alebo rovné ako {param}.',
   'matches'               => 'Pole {field} sa nezhoduje s poľom {param}.',
   'max_length'            => 'Pole {field} nemôže prekročiť počet znakov: {param}.',
   'min_length'            => 'Pole {field} musí byť dlhšie ako {param} znaky.',
   'not_equals'            => 'Pole {field} nemôže byť: {param}.',
   'numeric'               => 'Pole {field} musí obsahovať iba čísla.',
   'regex_match'           => 'Pole {field} má nesprávny formát.',
   'required'              => 'Pole {field} je povinné.',
   'required_with'         => 'Pole {field} je povinné ak {param} je zadaný.',
   'required_without'      => 'Pole {field} je povinné ak {param} nie je zadaný.',
   'timezone'              => 'Pole {field} musí byť platná časová zóna.',
   'valid_base64'          => 'Pole {field} musí byť platný base64 reťazec.',
   'valid_email'           => 'Pole {field} musí obsahovať platnú emailovú adresu.',
   'valid_emails'          => 'Pole {field} musí obsahovať iba platné emailové adresy.',
   'valid_ip'              => 'Pole {field} musí obsahovať platnú IP adresu.',
   'valid_url'             => 'Pole {field} musí obsahovať platnú URL adresu.',
   'valid_date'            => 'Pole {field} musí obsahovať platný dátum.',

	// Credit Cards
   'valid_cc_num'          => '{field} sa nezdá byť platné číslo kreditnej/debetnej karty.',

	// Files
   'uploaded'              => '{field} je neplatný nahraný súbor.',
   'max_size'              => '{field} je príliš veľký súbor.',
   'is_image'              => '{field} je neplatný nahraný obrázok.',
   'mime_in'               => '{field} nemá platný mime typ.',
   'ext_in'                => '{field} je neplatný typ súboru.',
   'max_dims'              => '{field} nie je obrázok alebo je príliš široký alebo vysoký.',
];
