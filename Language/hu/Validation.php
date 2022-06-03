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
    'noRuleSets'      => 'Nincs szabálycsoport meghatározva az ellenőrzési beállításokban.',
    'ruleNotFound'    => '{0} nem érvényes szabály.',
    'groupNotFound'   => '{0} nem ellenőrzési szabálycsoport.',
    'groupNotArray'   => '{0} szabálycsoportnak tömbnek kelllennie.',
    'invalidTemplate' => '{0} nem érvényes ellenőrzési sablon.',

    // Rule Messages
    'alpha'                 => 'A(z) {field} mező csak az angol abc karaktereit tartalmazhatja.',
    'alpha_dash'            => 'A(z) {field} mező csak alfanumerikus karaktereket, alsóvonást és kötőjelet tartalmazhat.',
    'alpha_numeric'         => 'A(z) {field} mező csak alfanumerikus karaktereket tartalmazhat.',
    'alpha_numeric_punct'   => 'A(z) {field} mező csak alfanumerikus karaktereket, szóközöket és a  ~ ! # $ % & * - _ + = | : . karaktereket tartalmazhatja.',
    'alpha_numeric_space'   => 'A(z) {field} mező csak alfanumerikus karaktereket és szóközöket tartalmazhat.',
    'alpha_space'           => 'A(z) {field} mező csak az angol abc karaktereit és szóközöket tartalmazhat.',
    'decimal'               => 'A(z) {field} mező csak tizedes számokat tartalmazhat.',
    'differs'               => 'A(z) {field} mezőnek különböznie kell a(z) {param} mezőtől.',
    'equals'                => 'A(z) {field} mező értékének pontosan ennyinek kell lennie: {param}.',
    'exact_length'          => 'A(z) {field} mezőnek pontosan {param} karakter hosszúságúnak kelllennie.',
    'greater_than'          => 'A(z) {field} mező értékének nagyobbnak kell lennie, mint {param}.',
    'greater_than_equal_to' => 'A(z) {field} mező értékének nagyobbnak vagy egyenlőnek kell lennie, mint {param}.',
    'hex'                   => 'A(z) {field} mező csak hexadecimális karaktereket tartalmazhat.',
    'in_list'               => 'A(z) {field} mező értékének a következők egyikének kell lennie: {param}.',
    'integer'               => 'A(z) {field} mező csak egész számokat tartalmazhat.',
    'is_natural'            => 'A(z) {field} mező csak tizedes számokat tartalmazhat.',
    'is_natural_no_zero'    => 'A(z) {field} mező csak tizedes számokat tartalmazhat és nullánál nagyobbnak kell lennie.',
    'is_not_unique'         => 'A(z) {field} mező csak az adatbázisban már létező értéket tartalmazhat.',
    'is_unique'             => 'A(z) {field} mező csak egyedi értéket tartalmazhat.',
    'less_than'             => 'A(z) {field} mező csak kisebb lehet, mint {param}.',
    'less_than_equal_to'    => 'A(z) {field} mező csak kisebb vagy egyenlő lehet, mint {param}.',
    'matches'               => 'A(z) {field} mező nem egyezik a(z) {param} mezővel.',
    'max_length'            => 'A(z) {field} mező nem lehet több karakter mint {param}.',
    'min_length'            => 'A(z) {field} mező legalább {param} karakter hosszúságú kell legyen.',
    'not_equals'            => 'A(z) {field} mező nem lehet: {param}.',
    'not_in_list'           => 'A(z) {field} mező értékének nem a következők egyikének kell lennie: {param}.',
    'numeric'               => 'A(z) {field} csak számjegyeket tartalmazhat.',
    'regex_match'           => 'A(z) {field} mező tartalma nem megfelelő formátumú.',
    'required'              => 'A(z) {field} mező nem lehet üres.',
    'required_with'         => 'A(z) {field} mező szükséges, amennyiben {param} jelen van.',
    'required_without'      => 'A(z) {field} mező szükséges, amennyiben {param} nincs jelen.',
    'string'                => 'A(z) {field} mezőnek érvényes karaktersort kell tartalmaznia.',
    'timezone'              => 'A(z) {field} mezőnek érvényes időzónát kell tartalmaznia.',
    'valid_base64'          => 'A(z) {field} mezőnek érvényes base64 karaktersort kell tartalmaznia.',
    'valid_email'           => 'A(z) {field} mezőnek érvényes email címet kell tartalmaznia.',
    'valid_emails'          => 'A(z) {field} mezőnek érvényes email címeket kell tartalmaznia.',
    'valid_ip'              => 'A(z) {field} mezőnek érvényes IP címet kell tartalmaznia.',
    'valid_url'             => 'A(z) {field} mezőnek érvényes URL címet kell tartalmaznia.',
    'valid_url_strict'      => 'A(z) {field} mezőnek érvényes URL címet kell tartalmaznia.',
    'valid_date'            => 'A(z) {field} mezőnek érvényes dátumot kell tartalmaznia.',

    // Credit Cards
    'valid_cc_num' => '{field} nem tűnik érvényes hitelkártya számnak.',

    // Files
    'uploaded' => '{field} nem egy érvényes feltöltött állomány.',
    'max_size' => '{field} állománymérete túl nagy.',
    'is_image' => '{field} nem egy érvényes feltöltött képfájl.',
    'mime_in'  => '{field} nem tartalmaz érvényes MIME típust.',
    'ext_in'   => '{field} nem tartalmaz érvényes kiterjesztést.',
    'max_dims' => '{field} vagy nem kép vagy túl széles vagy magas.',
];
