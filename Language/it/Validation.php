<?php

/**
 * Validation language strings.
 *
 * @package      CodeIgniter
 * @author       Luca Marco Rasia
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 4.0.0
*
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
	'noRuleSets'            => 'Nessun set di regole è stato specificato nella configurazione della Validazione.',
	'ruleNotFound'          => '{0} non è una regola valida.',
	'groupNotFound'         => '{0} non è un gruppo di regole di validazione.',
	'groupNotArray'         => '{0} il gruppo di regole deve essere un array.',
	'invalidTemplate'       => '{0} non è un valido template di Validazione.',

	// Rule Messages
	'alpha'                 => 'Il campo {field} può contenere solamente caratteri dell\'alfabeto.',
	'alpha_dash'            => 'Il campo {field} può contenere solamente caratteri alfanumerici, lineette basse, e lineette (meno).',
	'alpha_numeric'         => 'Il campo {field} può contenere solamente caratteri alfanumerici.',
	'alpha_numeric_space'   => 'Il campo {field} può contenere solamente caratteri alfanumerici e spazi.',
	'alpha_space'  			=> 'Il campo {field} può contenere solamente caratteri dell\'alfabeto e spazi.',
	'decimal'               => 'Il campo {field} deve contenere un numero decimale.',
	'differs'               => 'Il campo {field} deve essere diverso dal campo {param}.',
	'exact_length'          => 'Il campo {field} deve essere esattamente {param} caratteri in lunghezza.',
	'greater_than'          => 'Il campo {field} deve contenere un numero maggiore di {param}.',
	'greater_than_equal_to' => 'Il campo {field} deve contenere a numero maggiore o uguale a {param}.',
	'in_list'               => 'Il campo {field} deve essere uno di: {param}.',
	'integer'               => 'Il campo {field} deve contenere un integer.',
	'is_natural'            => 'Il campo {field} deve contenere solo caratteri numerici.',
	'is_natural_no_zero'    => 'Il campo {field} deve contenere solo caratteri numerici e deve essere maggiore di zero.',
	'is_unique'             => 'Il campo {field} deve contenere un valore univoco.',
	'less_than'             => 'Il campo {field} deve contenere un numero minore di {param}.',
	'less_than_equal_to'    => 'Il campo {field} deve contenere un numero minore o uguale a {param}.',
	'matches'               => 'Campo {field} non corrispondente al campo {param} .',
	'max_length'            => 'Il campo {field} non può superare {param} caratteri di lunghezza.',
	'min_length'            => 'Il campo {field} deve essere almeno {param} caratteri di lunghezza.',
	'numeric'               => 'Il campo {field} deve contenere solo numeri.',
	'regex_match'           => 'Non è corretto il formato per il campo {field}.',
	'required'              => 'Il campo {field} è richiesto.',
	'required_with'         => 'Il campo {field} è richiesto quando {param} è presente.',
	'required_without'      => 'Il campo {field} è richiesto quando {param} non è presente.',
	'timezone'              => 'Il campo {field} deve essere una timezone valida.',
	'valid_base64'          => 'Il campo {field} deve essere una valida stringa base64.',
	'valid_email'           => 'Il campo {field} deve contenere un indirizzo email valido.',
	'valid_emails'          => 'Il campo {field} deve contenere tutti indirizzi email validi.',
	'valid_ip'              => 'Il campo {field} deve contenere un valido IP.',
	'valid_url'             => 'Il campo {field} deve contenere un valido URL.',
	'valid_date'            => 'Il campo {field} deve contenere una data valida.',

	// Credit Cards
	'valid_cc_num'          => '{field} non sembra essere un valido numero di carta di credito.',

	// Files
	'uploaded'              => '{field} non è un valido file uploadato.',
	'max_size'              => '{field} è un file troppo grande.',
	'is_image'              => '{field} non è un valido file immagine uploadato.',
	'mime_in'               => '{field} non ha un valido tipo mime.',
	'ext_in'                => '{field} non ha una estesione di file valida.',
	'max_dims'              => '{field} o non è una immagine, o è troppo larga o alta.',
];
