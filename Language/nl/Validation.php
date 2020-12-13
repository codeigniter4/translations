<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Validation language settings
return [
	// Core Messages
	'noRuleSets'      => 'Geen regelgroep in Validatie instellignen.',
	'ruleNotFound'    => '{0} is geen geldige regel.',
	'groupNotFound'   => '{0} is geen validatie regelgroep.',
	'groupNotArray'   => '{0} regelgroep moet een array zijn.',
	'invalidTemplate' => '{0} is geen geldige validatie template.',

	// Rule Messages
	'alpha'                 => 'Het veld {field} mag enkel alfabetische karakters bevatten.',
	'alpha_dash'            => 'Het veld {field} mag enkel alfanumerieke, _, and - karakters bevatten.',
	'alpha_numeric'         => 'Het veld {field} mag enkel alfanumerieke karakters bevatten.',
	'alpha_numeric_punct'   => 'Het veld {field} mag enkel alfanumerieke karakters, spaties, en de karakters  ~ ! # $ % & * - _ + = | : . bevatten.',
	'alpha_numeric_space'   => 'Het veld {field} mag enkel alfanumerieke karakters en spaties bevatten.',
	'alpha_space'           => 'Het veld {field} mag enkel alfabetische karakters en spaties bevatten.',
	'decimal'               => 'Het veld {field} moet een decimaal getal bevatten.',
	'differs'               => 'Het veld {field} moet verschillen van het {param} veld.',
	'equals'                => 'Het veld {field} moet gelijk zijn aan: {param}.',
	'exact_length'          => 'Het veld {field} moet exact {param} karakters lang zijn.',
	'greater_than'          => 'Het veld {field} moet een waarde groter dan {param} bevatten.',
	'greater_than_equal_to' => 'Het veld {field} moet een waarde groter dan of gelijk aan {param} bevatten.',
	'hex'                   => 'Het veld {field} mag enkel hexadecimale karakters bevatten.',
	'in_list'               => 'Het veld {field} moet één van de volgende waardes bevatten: {param}.',
	'integer'               => 'Het veld {field} moet een geheel getal bevatten.',
	'is_natural'            => 'Het veld {field} mag enkel cijfers bevatten.',
	'is_natural_no_zero'    => 'Het veld {field} mag enkel cijfers bevatten en moet groter zijn dan.',
	'is_not_unique'         => 'Het veld {field} moet een waarde bevatten die reeds in de database bestaat.',
	'is_unique'             => 'Het veld {field} moet een unieke waarde bevatten.',
	'less_than'             => 'Het veld {field} moet een waarde bevatten kleiner dan {param}.',
	'less_than_equal_to'    => 'Het veld {field} moet een waarde bevatten kleiner dan of gelijk aan {param}.',
	'matches'               => 'Het veld {field} komt niet overeen met het  {param} veld.',
	'max_length'            => 'Het veld {field} mag niet meer dan {param} karakters lang zijn.',
	'min_length'            => 'Het veld {field} moet minstens {param} karakters lang zijn.',
	'not_equals'            => 'Het veld {field} mag niet zijn: {param}.',
	'numeric'               => 'Het veld {field} mag enkel nummer bevatten.',
	'regex_match'           => 'Het veld {field} is geen correct formaat.',
	'required'              => 'Het veld {field} is verplicht.',
	'required_with'         => 'Het veld {field} is verplicht wanneer {param} aanwezig is.',
	'required_without'      => 'Het veld {field} is verplicht wanneer {param} niet aanwezig is.',
	'timezone'              => 'Het veld {field} moet een geldige tijdzone zijn.',
	'valid_base64'          => 'Het veld {field} moet een geldige base64 string zijn.',
	'valid_email'           => 'Het veld {field} moet een geldig emailadres bevatten.',
	'valid_emails'          => 'Het veld {field} mag enkel geldige emailadressen bevatten.',
	'valid_ip'              => 'Het veld {field} moet een geldig IP-adres bevatten.',
	'valid_url'             => 'Het veld {field} moet een geldige URL bevatten.',
	'valid_date'            => 'Het veld {field} moet een geldige datum bevatten.',

	// Credit Cards
	'valid_cc_num' => '{field} lijkt geen geldige credit card nummer te bevatten.',

	// Files
	'uploaded' => '{field} bevat geen geldig upload bestand.',
	'max_size' => '{field} bevat een te groot bestand.',
	'is_image' => '{field} bevat geen geldige afbeelding.',
	'mime_in'  => '{field} heeft geen geldig mime type.',
	'ext_in'   => '{field} heeft geen geldige file extensie.',
	'max_dims' => '{field} is geen afbeelding, is te breed of te hoog',
];
