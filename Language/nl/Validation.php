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
    'noRuleSets'            => 'Geen regelsets gespecificeerd in Validatieconfiguratie.',
    'ruleNotFound'          => '{0} is geen geldige regel.',
    'groupNotFound'         => '{0} is geen groep van validatieregels.',
    'groupNotArray'         => '{0} groep van regels moet een array zijn.',
    'invalidTemplate'       => '{0} is geen geldig Validatietemplate.',

    // Rule Messages
    'alpha'                 => 'Het {field}-veld mag alleen alfabetische karakters bevatten.',
    'alpha_dash'            => 'Het {field}-veld mag alleen alfanumerieke karakters, lage streepjes (_) en streepjes (-) bevatten.',
    'alpha_numeric'         => 'Het {field}-veld mag alleen alfanumerieke karakters bevatten.',
    'alpha_numeric_punct'   => 'Het {field}-veld mag alleen alfanumerieke tekens, spaties en ~ bevatten! # $% & * - _ + = | :. karakters.',
    'alpha_numeric_space'   => 'Het {field}-veld mag alleen alfanumerieke karakters en spaties bevatten.',
    'alpha_space'           => 'Het {field}-veld mag alleen alfabetische karakters en spaties bevatten.',
    'decimal'               => 'Het {field}-veld moet een decimaal getal bevatten.',
    'differs'               => 'Het {field}-veld moet verschillen van het {param}-veld.',
    'equals'                => 'Het {field}-veld moet exact gelijk zijn aan: {param}.',
    'exact_length'          => 'Het {field}-veld moet precies {param} karakters lang zijn.',
    'greater_than'          => 'Het {field}-veld moet een getal groter dan {param} bevatten.',
    'greater_than_equal_to' => 'Het {field}-veld moet een getal groter dan of gelijk aan {param} bevatten.',
    'hex'                   => 'Het {field}-veld mag alleen hexadecimale tekens bevatten.',
    'in_list'               => 'Het {field}-veld moet een van de volgende zijn: {param}.',
    'integer'               => 'Het {field}-veld moet een geheel getal bevatten.',
    'is_natural'            => 'Het {field}-veld moet uit alleen cijfers bestaan.',
    'is_natural_no_zero'    => 'Het {field}-veld moet uit alleen cijfers bestaan en groter zijn dan nul.',
    'is_not_unique'         => 'Het {field}-veld moet een eerder bestaande waarde in de database bevatten.',
    'is_unique'             => 'Het {field}-veld moet uniek zijn.',
    'less_than'             => 'Het {field}-veld moet een getal kleiner dan {param} bevatten.',
    'less_than_equal_to'    => 'Het {field}-veld moet een getal kleiner dan of gelijk aan {param} bevatten.',
    'matches'               => 'Het {field}-veld matcht niet met het {param}-veld.',
    'max_length'            => 'Het {field}-veld mag niet langer zijn dan {param} karakters.',
    'min_length'            => 'Het {field}-veld moet minstens {param} karakters lang zijn.',
    'not_equals'            => 'Het {field}-veld kan niet `{param}` zijn.',
    'numeric'               => 'Het {field}-veld mag alleen getallen bevatten.',
    'regex_match'           => 'Het {field}-veld staat niet in het juiste format.',
    'required'              => 'Het {field}-veld is verplicht.',
    'required_with'         => 'Het {field}-veld is verplicht als {param} ingevuld is.',
    'required_without'      => 'Het {field}-veld is verplicht als {param} niet ingevuld is.',
    'timezone'              => 'Het {field}-veld moet een geldige tijdzone zijn.',
    'valid_base64'          => 'Het {field}-veld moet een geldige `base64 string` zijn.',
    'valid_email'           => 'Het {field}-veld moet een geldig e-mailadres bevatten.',
    'valid_emails'          => 'Het {field}-veld kan geen ongeldige e-mailadressen bevatten.',
    'valid_ip'              => 'Het {field}-veld moet een geldig IP-adres bevatten.',
    'valid_url'             => 'Het {field}-veld moet een geldige URL bevatten.',
    'valid_date'            => 'Het {field}-veld moet een geldige datum bevatten.',

    // Credit Cards
    'valid_cc_num'          => '{field} lijkt geen geldig creditcardnummer te zijn.',

    // Files
    'uploaded'              => '{field} is geen geldig geüpload bestand.',
    'max_size'              => '{field} is een te groot bestand.',
    'is_image'              => '{field} is geen geldige, geüploade afbeelding.',
    'mime_in'               => '{field} heeft geen geldige MIME-type.',
    'ext_in'                => '{field} heeft geen geldige bestandsextensie.',
    'max_dims'              => '{field} is ofwel geen afbeelding, ofwel te hoog of breed.',
];
