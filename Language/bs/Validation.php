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
    'noRuleSets'      => 'Nije postavljen set pravila u validacijskoj konfiguraciji.',
    'ruleNotFound'    => '{0} nije validno pravilo.',
    'groupNotFound'   => '{0} nije validacijska grupa.',
    'groupNotArray'   => '{0} grupa pravila mora biti niz.',
    'invalidTemplate' => '{0} nije validan validacijski templejt.',

    // Rule Messages
    'alpha'                 => '{field} polje može sadržavati samo određene alfanumeričke znakove.',
    'alpha_dash'            => '{field} polje može sadržavati samo alfanumeričke, donju crtu, i crticu kao znakove.',
    'alpha_numeric'         => '{field} polje može sadržavati samo alfanumeričke znakove.',
    'alpha_numeric_punct'   => '{field} polje može sadržavati samo alfanumeričke znakove, prazan prostor, i  ~ ! # $ % & * - _ + = | : . znakove.',
    'alpha_numeric_space'   => '{field} polje može sadržavati samo alfanumeričke znakove i prazan prostor.',
    'alpha_space'           => '{field} polje može sadržavati samo slova i prazan prostor.',
    'decimal'               => '{field} polje mora sadržavati decimalan broj.',
    'differs'               => '{field} polje mora se razlikovati od {param} polja.',
    'equals'                => '{field} polje mora biti tačno: {param}.',
    'exact_length'          => '{field} polje mora biti tačno {param} znakova po dužini.',
    'greater_than'          => '{field} polje mora sdržavati broj veći od {param}.',
    'greater_than_equal_to' => '{field} polje mora sdržavati broj veći od ili jednak {param}.',
    'hex'                   => '{field} polje može sadržavati samo heksadecimalne znakove.',
    'in_list'               => '{field} polje mora biti jedno od: {param}.',
    'integer'               => '{field} polje mora sadržavati integer.',
    'is_natural'            => '{field} polje mora sadržavati samo prirodne brojeve.',
    'is_natural_no_zero'    => '{field} polje mora sadržavati samo prirodne brojeve i mora biti veće od nula.',
    'is_not_unique'         => '{field} polje mora sadržavati prethodno navedenu vrijednost u bazi.',
    'is_unique'             => '{field} polje mora sadržavati unikatnu vrijednost.',
    'less_than'             => '{field} polje mora sadržavati brojeve manje od {param}.',
    'less_than_equal_to'    => '{field} polje mora sadržavati brojeve manje od ili jednake {param}.',
    'matches'               => '{field} polje ne poklapa se sa {param} poljem.',
    'max_length'            => '{field} polje ne može preći {param} znakova po dužini.',
    'min_length'            => '{field} polje mora biti najmanje {param} znakova po dužini.',
    'not_equals'            => '{field} polje ne može biti: {param}.',
    'not_in_list'           => '{field} polje ne smije biti niti jedno od: {param}.',
    'numeric'               => '{field} polje mora sadržavati samo brojeve.',
    'regex_match'           => '{field} polje nije u ispravnom formatu.',
    'required'              => '{field} polje je zahtjevano.',
    'required_with'         => '{field} polje se zahtjeva kada {param} je neveden.',
    'required_without'      => '{field} polje se zahtjeva kada {param} nije naveden.',
    'string'                => '{field} polje mora biti validan string.',
    'timezone'              => '{field} polje mora biti validna timezona.',
    'valid_base64'          => '{field} polje mora biti validan base64 string.',
    'valid_email'           => '{field} polje mora sadržavati validnu email adresu.',
    'valid_emails'          => '{field} polje mora sadržavati sve validne email adrese.',
    'valid_ip'              => '{field} polje mora sadržavati validan IP.',
    'valid_url'             => '{field} polje mora sadržavati validan URL.',
    'valid_url_strict'      => '{field} polje mora sadržavati validan URL.',
    'valid_date'            => '{field} polje mora sadržavati validan datum.',

    // Credit Cards
    'valid_cc_num' => '{field} izgleda da nije validan broj kreditne kartice.',

    // Files
    'uploaded' => '{field} nije validna uploadovana datoteka.',
    'max_size' => '{field} je preveliko za datoteku.',
    'is_image' => '{field} nije validno, uploadovana slika.',
    'mime_in'  => '{field} nema validan mime tip.',
    'ext_in'   => '{field} nema validnu ekstenziju datoteke.',
    'max_dims' => '{field} nije slika, ili je preširoko ili preusko.',
];
