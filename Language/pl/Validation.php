<?php

/**
 * Validation language strings.
 *
 * @package      CodeIgniter
 * @author       CodeIgniter Dev Team
 * @copyright    2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license      https://opensource.org/licenses/MIT	MIT License
 * @link         https://codeigniter.com
 * @since        Version 3.0.0
 * @filesource
 * 
 * @codeCoverageIgnore
 */

return [
	// Core Messages
	'noRuleSets'            => 'Brak zestawów reguł określonych w konfiguracji sprawdzania poprawności.',
	'ruleNotFound'          => '{0} nie jest prawidłową regułą.',
	'groupNotFound'         => '{0} nie jest grupą reguł sprawdzania poprawności.',
	'groupNotArray'         => 'Grupa reguł {0} musi być tablicą.',
	'invalidTemplate'       => '{0} nie jest prawidłowym szablonem sprawdzania poprawności.',

	// Rule Messages
	'alpha'                 => 'Pole {field} może zawierać tylko znaki alfabetyczne.',
	'alpha_dash'            => 'Pole {field} może zawierać tylko znaki alfanumeryczne, podkreślenia i myślniki.',
	'alpha_numeric'         => 'Pole {field} może zawierać tylko znaki alfanumeryczne.',
	'alpha_numeric_space'   => 'Pole {field} może zawierać tylko znaki alfanumeryczne i spacje.',
	'alpha_space'  			=> 'Pole {field} może zawierać tylko znaki alfabetyczne i spacje.',
	'decimal'               => 'Pole {field} musi zawierać liczbę dziesiętną.',
	'differs'               => 'Pole {field} musi różnić się od pola {param}.',
	'exact_length'          => 'Pole {field} musi mieć dokładnie {param} długości.',
	'greater_than'          => 'Pole {field} musi zawierać liczbę większą niż {param}.',
	'greater_than_equal_to' => 'Pole {field} musi zawierać liczbę większą lub równą {param}.',
	'in_list'               => 'Pole {field} musi być jednym z: {param}.',
	'integer'               => 'Pole {field} musi zawierać liczbę całkowitą.',
	'is_natural'            => 'Pole {field} może zawierać tylko cyfry.',
	'is_natural_no_zero'    => 'Pole {field} może zawierać tylko cyfry i musi być większe od zera.',
	'is_unique'             => 'Pole {field} musi zawierać unikalną wartość.',
	'less_than'             => 'Pole {field} musi zawierać liczbę mniejszą niż {param}.',
	'less_than_equal_to'    => 'Pole {field} musi zawierać liczbę mniejszą lub równą {param}.',
	'matches'               => 'Pole {field} nie pasuje do pola {param}.',
	'max_length'            => 'Pole {field} nie może przekraczać długości znaków {param}.',
	'min_length'            => 'Pole {field} musi mieć przynajmniej {param} długości.',
	'numeric'               => 'Pole {field} musi zawierać tylko liczby.',
	'regex_match'           => 'Pole {field} ma niepoprawny format.',
	'required'              => 'Pole {field} jest wymagane',
	'required_with'         => 'Pole {field} jest wymagane, gdy występuje {param}.',
	'required_without'      => 'Pole {field} jest wymagane, gdy nie ma parametru {param}.',
	'timezone'              => 'Pole {field} musi być prawidłową strefą czasową.',
	'valid_base64'          => 'Pole {field} musi być poprawnym łańcuchem base64.',
	'valid_json'            => 'Pole {field} musi być w formacie JSON.',
	'valid_email'           => 'Pole {field} musi zawierać poprawny adres e-mail.',
	'valid_emails'          => 'Pole {field} musi zawierać wszystkie prawidłowe adresy e-mail.',
	'valid_ip'              => 'Pole {field} musi zawierać poprawny adres IP.',
	'valid_url'             => 'Pole {field} musi zawierać prawidłowy adres URL.',
	'valid_date'            => 'Pole {field} musi zawierać poprawną datę.',

	// Credit Cards
	'valid_cc_num'          => '{field} nie wydaje się być prawidłowym numerem karty kredytowej.',

	// Files
	'uploaded'              => '{field} nie jest prawidłowym przesłanym plikiem.',
	'max_size'              => '{field} jest zbyt dużym plikiem.',
	'is_image'              => '{field} nie jest prawidłowym, przesłanym plikiem graficznym.',
	'mime_in'               => '{field} nie ma prawidłowego typu MIME.',
	'ext_in'                => '{field} nie ma poprawnego rozszerzenia pliku.',
	'max_dims'              => '{field} nie jest obrazem lub jest zbyt szeroki lub wysoki.',
];
