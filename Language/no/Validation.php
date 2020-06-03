<?php

/**
 * Validation language strings.
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014-2019 British Columbia Institute of Technology
 * Copyright (c) 2019-2020 CodeIgniter Foundation
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
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
   'noRuleSets'            => 'Ingen regelsett er spesifisert i valideringskonfigurasjonen.',
   'ruleNotFound'          => '{0} er ikke en gyldig regel.',
   'groupNotFound'         => '{0} er ikke en gruppe valideringsregler.',
   'groupNotArray'         => '{0} Regelgruppe må være en matrise.',
   'invalidTemplate'       => '{0} er ikke en gyldig valideringsmal.',

	// Rule Messages
   'alpha'                 => 'Formfeltet {field} kan bare inneholde alfabetiske tegn.',
   'alpha_dash'            => 'Formfeltet {field} kan bare inneholde alfanumeriske tegn, understrekinger og bindestrek.',
   'alpha_numeric'         => 'Formfeltet {field} kan bare inneholde alfanumeriske tegn.',
   'alpha_numeric_space'   => 'Formfeltet {field} kan bare inneholde alfanumeriske tegn og mellomrom.',
   'alpha_space'           => 'Formfeltet {field} kan bare inneholde alfabetiske tegn og mellomrom.',
   'decimal'               => 'Formfeltet {field} må inneholde et desimaltall.',
   'differs'               => 'Formfeltet {field} må være forskjellig fra {param} -feltet.',
   'equals'                => 'The {field} field must be exactly: {param}.',
   'exact_length'          => 'Formfeltet {field} må være nøyaktig {param} tegn.',
   'greater_than'          => 'Formfeltet {field} må inneholde et tall som er større enn {param}.',
   'greater_than_equal_to' => 'Formfeltet {field} må inneholde et tall større enn eller lik {param}.',
   'in_list'               => 'Formfeltet {field} må være ett av følgende: {param}.',
   'integer'               => 'Formfeltet {field} må inneholde et heltall.',
   'is_natural'            => 'Formfeltet {field} kan bare inneholde sifre.',
   'is_natural_no_zero'    => 'Formfeltet {field} kan bare inneholde sifre og må være større enn null.',
   'is_not_unique'         => 'The {field} field must contain a previously existing value in the database.',
   'is_unique'             => 'Formfeltet {field} må inneholde en unik verdi.',
   'less_than'             => 'Formfeltet {field} må inneholde et nummer som er mindre enn {param}.',
   'less_than_equal_to'    => 'Formfeltet {field} må inneholde et tall som er mindre enn eller lik {param}.',
   'matches'               => 'Formfeltet {field} tilsvarer ikke {param} -feltet.',
   'max_length'            => 'Formfeltet {field} kan ikke overstige lengden på {param} tegn.',
   'min_length'            => 'Formfeltet {field} må være minst {param} tegn langt.',
   'not_equals'            => 'The {field} field cannot be: {param}.',
   'numeric'               => 'Formfeltet {field} kan bare inneholde tall.',
   'regex_match'           => 'Formfeltet {field} er ikke i riktig format.',
   'required'              => 'Formfeltet {field} er obligatorisk.',
   'required_with'         => 'Formfeltet {field} er obligatorisk hvis {param} eksisterer. {field} -Formularfelt',
   'required_without'      => 'Formfeltet {field} er obligatorisk hvis {param} ikke eksisterer.',
   'timezone'              => 'Formfeltet {field} må være en gyldig tidssone.',
   'valid_base64'          => 'Formfeltet {field} må være en gyldig base64-streng.',
   'valid_email'           => 'Skjemafeltet {field} må inneholde en gyldig e-postadresse.',
   'valid_emails'          => 'Skjemafeltet {field} må inneholde gyldige e-postadresser.',
   'valid_ip'              => 'Formfeltet {field} må inneholde en gyldig IP.',
   'valid_url'             => 'Formfeltet {field} må inneholde en gyldig URL.',
   'valid_date'            => 'Formfeltet {field} må inneholde en gyldig dato.',

	// Credit Cards
   'valid_cc_num'          => 'Formularfeltet {field} ser ikke ut til å inneholde et gyldig kredittkortnummer.',

	// Files
   'uploaded'              => 'Formfeltet {field} inneholder ikke en gyldig opplastet fil.',
   'max_size'              => 'Formfeltet {field} inneholder en for stor fil.',
   'is_image'              => 'Formfeltet {field} inneholder ikke en gyldig, opplastet bildefil.',
   'mime_in'               => 'Formfeltet {field} inneholder ikke en gyldig mimetype.',
   'ext_in'                => 'Formfeltet {field} inneholder ikke en gyldig filtype.',
   'max_dims'              => 'Formfeltet {field} inneholder enten ikke noe bilde eller er for bredt eller for høyt.',
];
