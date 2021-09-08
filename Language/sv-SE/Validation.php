<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

return [
    // Core Messages
    'noRuleSets'      => 'Inga regler angivna i Validation-inställningarna.',
    'ruleNotFound'    => '{0} är inte en giltig valideringsregel.',
    'groupNotFound'   => '{0} är inte en valideringsgrupp.',
    'groupNotArray'   => 'Valideringsgruppen {0} måste vara en array.',
    'invalidTemplate' => '{0} är inte en giltig valideringsmall.',

    // Rule Messages
    'alpha'                 => 'Fältet {field} får enbart innehålla bokstäver.',
    'alpha_dash'            => 'Fältet {field} får enbart innehålla bokstäver, underscore eller streck.',
    'alpha_numeric'         => 'Fältet {field} får enbart innehålla alfanumeriska tecken.',
    'alpha_numeric_punct'   => 'Fältet {field} får enbart innehålla alfanumeriska tecken, mellanslag och följande tecken:  ~ ! # $ % & * - _ + = | : . ',
    'alpha_numeric_space'   => 'Fältet {field} får enbart innehålla alfanumeriska tecken och mellanslag.',
    'alpha_space'           => 'Fältet {field} får enbart innehålla bokstäver och mellanslag.',
    'decimal'               => 'Fältet {field} måste innehålla ett nummer med decimaler.',
    'differs'               => 'Fältet {field} måste innehålla annan information än fältet {param}.',
    'equals'                => 'Värdet i fältet {field} måste vara exakt lika med: {param}.',
    'exact_length'          => 'Värdet i fältet {field} måste vara exakt {param} tecken lång.',
    'greater_than'          => 'Värdet i fältet {field} måste vara numeriskt och större än {param}.',
    'greater_than_equal_to' => 'Värdet i fältet {field} måste vara numeriskt och större än eller lika med {param}.',
    'hex'                   => 'Fältet {field} får enbart innehålla hexadecimala tecken.',
    'in_list'               => 'Värdet i fältet {field} måste vara ett av: {param}.',
    'integer'               => 'Värdet i fältet {field} måste vara ett heltal.',
    'is_natural'            => 'Fältet {field} får enbart innehålla siffror.',
    'is_natural_no_zero'    => 'Värdet i fältet {field} måste vara numeriskt och större än noll.',
    'is_not_unique'         => 'Fältet {field} måste innehålla ett värde som redan finns i databasen.',
    'is_unique'             => 'Fältet {field} måste innehålla ett unikt värde.',
    'less_than'             => 'Värdet i fältet {field} nåste vara numeriskt och mindre än {param}.',
    'less_than_equal_to'    => 'Värdet i fältet {field} måste vara numeriskt och mindre än eller lika med {param}.',
    'matches'               => 'Värdet i fältet {field} är inte lika med värdet i fältet {param}.',
    'max_length'            => 'Värdet i fältet {field} får inte vara längre än {param} tecken.',
    'min_length'            => 'Värdet i fältet {field} måste vara minst {param} tecken långt.',
    'not_equals'            => 'Värdet i fältet {field} får inte vara: {param}.',
    'not_in_list'           => 'Värdet i fältet {field} får inte vara något av: {param}.',
    'numeric'               => 'Värdet i fältet {field} får enbart innehålla siffror.',
    'regex_match'           => 'Värdet i fältet {field} är inte korrekt formatterat.',
    'required'              => 'Fältet {field} måste anges.',
    'required_with'         => 'Ett värde i fältet {field} måste anges när {param} är angivet.',
    'required_without'      => 'Ett värde i fältet {field} måste anges när {param} inte är angiven.',
    'string'                => 'Värdet i fältet {field} måste vara en giltig sträng.',
    'timezone'              => 'Värdet i fältet {field} måste vara en giltig tidszon.',
    'valid_base64'          => 'Värdet i fältet {field} måste vara en giltig base64-kodad sträng.',
    'valid_email'           => 'Värdet i fältet {field} måste vara en giltig epost-adress.',
    'valid_emails'          => 'Värdena i fältet {field} måste alla vara giltiga epost-adresser.',
    'valid_ip'              => 'Värdet i fältet {field} måste vara en giltig IP-adress.',
    'valid_url'             => 'Värdet i fältet {field} måste vara en giltig URL.',
    'valid_date'            => 'Värdet i fältet {field} måste vara ett giltigt datum.',

    // Credit Cards
    'valid_cc_num' => 'Värdet i fältet {field} verkar inte vara ett giltig kontokortsnummer.',

    // Files
    'uploaded' => '{field} är inte en giltig uppladdad fil.',
    'max_size' => '{field} är en för stor fil.',
    'is_image' => '{field} är inte en giltig uppladdad bild.',
    'mime_in'  => '{field} har inte en giltig mime-typ.',
    'ext_in'   => '{field} har inte en giltig filändelse.',
    'max_dims' => '{field} är angingen inte en bild eller har för stora dimensioner.',
];
