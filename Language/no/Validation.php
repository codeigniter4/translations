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
    'noRuleSets'      => 'Ingen regelsett er spesifisert i valideringskonfigurasjonen.',
    'ruleNotFound'    => '{0} er ikke en gyldig regel.',
    'groupNotFound'   => '{0} er ikke en gruppe valideringsregler.',
    'groupNotArray'   => '{0} Regelgruppe må være en matrise.',
    'invalidTemplate' => '{0} er ikke en gyldig valideringsmal.',

    // Rule Messages
    'alpha'                 => 'Skjemafeltet {field} kan bare inneholde alfabetiske tegn.',
    'alpha_dash'            => 'Skjemafeltet {field} kan bare inneholde alfanumeriske tegn, understrekinger og bindestrek.',
    'alpha_numeric'         => 'Skjemafeltet {field} kan bare inneholde alfanumeriske tegn.',
    'alpha_numeric_space'   => 'Skjemafeltet {field} kan bare inneholde alfanumeriske tegn og mellomrom.',
    'alpha_space'           => 'Skjemafeltet {field} kan bare inneholde alfabetiske tegn og mellomrom.',
    'decimal'               => 'Skjemafeltet {field} må inneholde et desimaltall.',
    'differs'               => 'Skjemafeltet {field} må være forskjellig fra {param} -feltet.',
    'equals'                => 'Skjemafeltet {field} må være nøyaktig: {param}.',
    'exact_length'          => 'Skjemafeltet {field} må være nøyaktig {param} tegn.',
    'greater_than'          => 'Skjemafeltet {field} må inneholde et tall som er større enn {param}.',
    'greater_than_equal_to' => 'Skjemafeltet {field} må inneholde et tall større enn eller lik {param}.',
    'in_list'               => 'Skjemafeltet {field} må være ett av følgende: {param}.',
    'integer'               => 'Skjemafeltet {field} må inneholde et heltall.',
    'is_natural'            => 'Skjemafeltet {field} kan bare inneholde sifre.',
    'is_natural_no_zero'    => 'Skjemafeltet {field} kan bare inneholde sifre og må være større enn null.',
    'is_unique'             => 'Skjemafeltet {field} må inneholde en unik verdi.',
    'less_than'             => 'Skjemafeltet {field} må inneholde et nummer som er mindre enn {param}.',
    'less_than_equal_to'    => 'Skjemafeltet {field} må inneholde et tall som er mindre enn eller lik {param}.',
    'matches'               => 'Skjemafeltet {field} tilsvarer ikke {param} -feltet.',
    'max_length'            => 'Skjemafeltet {field} kan ikke overstige lengden på {param} tegn.',
    'min_length'            => 'Skjemafeltet {field} må være minst {param} tegn langt.',
    'not_equals'            => 'Skjemafeltet {field} kan ikke være: {param}.',
    'numeric'               => 'Skjemafeltet {field} kan bare inneholde tall.',
    'regex_match'           => 'Skjemafeltet {field} er ikke i riktig format.',
    'required'              => 'Skjemafeltet {field} er obligatorisk.',
    'required_with'         => 'Skjemafeltet {field} er obligatorisk hvis {param} eksisterer. {field} -Formularfelt',
    'required_without'      => 'Skjemafeltet {field} er obligatorisk hvis {param} ikke eksisterer.',
    'timezone'              => 'Skjemafeltet {field} må være en gyldig tidssone.',
    'valid_base64'          => 'Skjemafeltet {field} må være en gyldig base64-streng.',
    'valid_email'           => 'Skjemafeltet {field} må inneholde en gyldig e-postadresse.',
    'valid_emails'          => 'Skjemafeltet {field} må inneholde gyldige e-postadresser.',
    'valid_ip'              => 'Skjemafeltet {field} må inneholde en gyldig IP.',
    'valid_url'             => 'Skjemafeltet {field} må inneholde en gyldig URL.',
    'valid_date'            => 'Skjemafeltet {field} må inneholde en gyldig dato.',

    // Credit Cards
    'valid_cc_num' => 'Skjemafeltet {field} ser ikke ut til å inneholde et gyldig kredittkortnummer.',

    // Files
    'uploaded' => 'Skjemafeltet {field} inneholder ikke en gyldig opplastet fil.',
    'max_size' => 'Skjemafeltet {field} inneholder en for stor fil.',
    'is_image' => 'Skjemafeltet {field} inneholder ikke en gyldig, opplastet bildefil.',
    'mime_in'  => 'Skjemafeltet {field} inneholder ikke en gyldig mimetype.',
    'ext_in'   => 'Skjemafeltet {field} inneholder ikke en gyldig filtype.',
    'max_dims' => 'Skjemafeltet {field} inneholder enten ikke noe bilde eller er for bredt eller for høyt.',
];
