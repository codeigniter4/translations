<?php

/**
 * Validation language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
	// Core Messages
   'noRuleSets'            => 'Kein Regelset in der Konfiguration der Validierung angegeben.',
   'ruleNotFound'          => '{0} ist keine gültige Regel.',
   'groupNotFound'         => '{0} ist keine Gruppe von Validierungsregeln.',
   'groupNotArray'         => '{0} Regelgruppe muss ein Array sein.',
   'invalidTemplate'       => '{0} ist keine gültige Validierungsvorlage.',

	// Rule Messages
   'alpha'                 => 'Das {field}-Formularfeld darf nur alphabetische Zeichen enthalten.',
   'alpha_dash'            => 'Das {field}-Formularfeld darf nur alphanumerische Zeichen, Unterstriche und Bindestriche enthalten.',
   'alpha_numeric'         => 'Das {field}-Formularfeld darf nur alphanumerische Zeichen enthalten.',
   'alpha_numeric_space'   => 'Das {field}-Formularfeld darf nur alphanumerische Zeichen und Leerzeichen enthalten.',
   'alpha_space'           => 'Das {field}-Formularfeld darf nur alphabetische Zeichen und Leerzeichen enthalten.',
   'decimal'               => 'Das {field}-Formularfeld muss eine Dezimalzahl enthalten.',
   'differs'               => 'Das {field}-Formularfeld muss sich vom Feld {param} unterscheiden.',
   'exact_length'          => 'Das {field}-Formularfeld muss genau {param} Zeichen lang sein.',
   'greater_than'          => 'Das {field}-Formularfeld muss eine Zahl größer als {param} enthalten.',
   'greater_than_equal_to' => 'Das {field}-Formularfeld muss eine Zahl größer oder gleich {param} enthalten.',
   'in_list'               => 'Das {field}-Formularfeld muss eines der folgenden sein: {param}.',
   'integer'               => 'Das {field}-Formularfeld muss eine ganze Zahl enthalten.',
   'is_natural'            => 'Das {field}-Formularfeld darf nur Ziffern enthalten.',
   'is_natural_no_zero'    => 'Das {field}-Formularfeld darf nur Ziffern enthalten und muss größer als Null sein.',
   'is_unique'             => 'Das {field}-Formularfeld muss einen eindeutigen Wert enthalten.',
   'less_than'             => 'Das {field}-Formularfeld muss eine Zahl kleiner als {param} enthalten.',
   'less_than_equal_to'    => 'Das {field}-Formularfeld muss eine Zahl kleiner oder gleich {param} enthalten.',
   'matches'               => 'Das {field}-Formularfeld stimmt nicht mit dem Feld {param} überein.',
   'max_length'            => 'Das {field}-Formularfeld darf die Länge von {param} Zeichen nicht überschreiten.',
   'min_length'            => 'Das {field}-Formularfeld muss mindestens {param} Zeichen lang sein.',
   'numeric'               => 'Das {field}-Formularfeld darf nur Zahlen enthalten.',
   'regex_match'           => 'Das {field}-Formularfeld ist nicht im richtigen Format.',
   'required'              => 'Das {field}-Formularfeld ist erforderlich.',
   'required_with'         => 'Das {field}-Formularfeld ist erforderlich, wenn {param} vorhanden ist. {field}-Formularfeld',
   'required_without'      => 'Das {field}-Formularfeld ist erforderlich, wenn {param} nicht vorhanden ist.',
   'timezone'              => 'Das {field}-Formularfeld muss eine gültige Zeitzone sein.',
   'valid_base64'          => 'Das {field}-Formularfeld muss eine gültige base64-Zeichenkette sein.',
   'valid_email'           => 'Das {field}-Formularfeld muss eine gültige E-Mail-Adresse enthalten.',
   'valid_emails'          => 'Das {field}-Formularfeld muss gültige E-Mail-Adressen enthalten.',
   'valid_ip'              => 'Das {field}-Formularfeld muss eine gültige IP enthalten..',
   'valid_url'             => 'Das {field}-Formularfeld muss eine gültige URL enthalten.',
   'valid_date'            => 'Das {field}-Formularfeld muss ein gültiges Datum enthalten.',

	// Credit Cards
   'valid_cc_num'          => 'Das {field}-Formularfeld scheint keine gültige Kreditkartennummer zu enthalten.',

	// Files
   'uploaded'              => 'Das {field}-Formularfeld enthält keine gültige hochgeladene Datei.',
   'max_size'              => 'Das {field}-Formularfeld enthält enthält eine zu grosse Datei.',
   'is_image'              => 'Das {field}-Formularfeld enthält keine gültige, hochgeladene Bilddatei.',
   'mime_in'               => 'Das {field}-Formularfeld enthält keinen gültigen Mime-Typ.',
   'ext_in'                => 'Das {field}-Formularfeld enthält keine gültige Dateiendung.',
   'max_dims'              => 'Das {field}-Formularfeld enthält entweder kein Bild, oder es ist zu breit oder zu hoch.',
];
