<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2019-2020 CodeIgniter Foundation
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'Nessun set di regole è stato specificato nella configurazione di convalida.',
   'ruleNotFound'          => '{0} non è una regola valida.',
   'groupNotFound'         => '{0} non è un gruppo di regole di convalida.',
   'groupNotArray'         => 'Il gruppo di regole {0} deve essere array.',
   'invalidTemplate'       => '{0} non è un template di convalida valido.',

	// Rule Messages
   'alpha'                 => 'Il campo {field} può contenere solamente caratteri alfabetici.',
   'alpha_dash'            => 'Il campo {field} può contenere solamente caratteri alfanumerici, trattini bassi e trattini.',
   'alpha_numeric'         => 'Il campo {field} può contenere solamente caratteri alfanumerici.',
   'alpha_numeric_punct'   => 'Il campo {field} può contenere solamente caratteri alfanumerici, spazi, ~, !, #, $, %, &, *, -, _, +, =, |, :, e . (punto).',
   'alpha_numeric_space'   => 'Il campo {field} può contenere solamente caratteri alfanumerici e spazi.',
   'alpha_space'           => 'Il campo {field} può contenere solamente caratteri alfabetici e spazi.',
   'decimal'               => 'Il campo {field} deve contenere un numero decimale.',
   'differs'               => 'Il campo {field} deve differire dal campo {param}.',
   'equals'                => 'Il campo {field} deve contenere essattamente: {param}.',
   'exact_length'          => 'Il campo {field} deve contenere essattamente {param} caratteri di lunghezza.',
   'greater_than'          => 'Il campo {field} deve contenere un numero maggiore di {param}.',
   'greater_than_equal_to' => 'Il campo {field} deve contenere un numero maggiore o uguale a {param}.',
   'hex'                   => 'Il campo {field} può contenere solo caratteri esadecimali.',
   'in_list'               => 'Il campo {field} deve essere uno tra: {param}.',
   'integer'               => 'Il campo {field} deve contenere un numero intero.',
   'is_natural'            => 'Il campo {field} deve contenere solo cifre.',
   'is_natural_no_zero'    => 'Il campo {field} deve contenere solo cifre e deve essere maggiore di zero.',
   'is_not_unique'         => 'Il campo {field} deve contenere un valore già esistente tra quelli nel database.',
   'is_unique'             => 'Il campo {field} deve contenere un valore univoco.',
   'less_than'             => 'Il campo {field} deve contenere un numero minore di {param}.',
   'less_than_equal_to'    => 'Il campo {field} deve contenere un numero minore o uguale a {param}.',
   'matches'               => 'Il campo {field} non corrisponde al campo {param}.',
   'max_length'            => 'Il campo {field} non può superare i {param} caratteri di lunghezza.',
   'min_length'            => 'Il campo {field} deve contenere almeno {param} caratteri di lunghezza.',
   'not_equals'            => 'Il campo {field} non può essere: {param}.',
   'numeric'               => 'Il campo {field} deve contenere solamente numeri.',
   'regex_match'           => 'Il campo {field} non è nel formato corretto.',
   'required'              => 'Il campo {field} è obbligatorio.',
   'required_with'         => 'Il campo {field} è obbligatorio quando {param} è presente.',
   'required_without'      => 'Il campo {field} è obbligatorio quando {param} non è presente.',
   'timezone'              => 'Il campo {field} deve contenere un fuso orario valido.',
   'valid_base64'          => 'Il campo {field} deve contenere una stringa base64 valida.',
   'valid_email'           => 'Il campo {field} deve contenere un indirizzo email valido.',
   'valid_emails'          => 'Il campo {field} deve contenere tutti indirizzi email validi.',
   'valid_ip'              => 'Il campo {field} deve contenere un IP valido.',
   'valid_url'             => 'Il campo {field} deve contenere un URL valido.',
   'valid_date'            => 'Il campo {field} deve contenere una data valida.',

	// Credit Cards
   'valid_cc_num'          => '{field} non sembra essere un numero di carta di credito valido.',

	// Files
   'uploaded'              => 'Il file {field} non è valido.',
   'max_size'              => 'Il file {field} è troppo grande.',
   'is_image'              => 'Il file {field} non è un\'immagine valida.',
   'mime_in'               => 'Il file {field} non contiene un mime type valido.',
   'ext_in'                => 'Il file {field} non contiene un estenzione di file valida.',
   'max_dims'              => 'Il file {field} non è un immagine, o questa e troppo larga o troppo alta.',
];
