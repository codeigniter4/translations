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
    'noRuleSets'      => 'Non se estabeleceron regras na configuración de validación.',
    'ruleNotFound'    => '{0} non é unha regra de validación válida.',
    'groupNotFound'   => '{0} non é un grupo de regras de validación.',
    'groupNotArray'   => '{0} o grupo de validación debe ser un array.',
    'invalidTemplate' => '{0} non é un modelo de validación válido.',

    // Rule Messages
    'alpha'                 => 'O campo {field} só pode conter caracteres alfabéticos.',
    'alpha_dash'            => 'O campo {field} só pode conter caracteres alfanuméricos, subliñados, e guións.',
    'alpha_numeric'         => 'O campo {field} só pode conter caracteres alfanuméricos.',
    'alpha_numeric_punct'   => 'O campo {field} só pode conter caracteres alfanuméricos, espazos, e os caracteres ~ ! # $ % & * - _ + = | : . .',
    'alpha_numeric_space'   => 'O campo {field} só pode conter caracteres alfanuméricos e espazos.',
    'alpha_space'           => 'O campo {field} só pode conter caracteres alfabéticos e espazos.',
    'decimal'               => 'O campo {field} debe conter un número decimal.',
    'differs'               => 'O campo {field} debe diferir do campo {param}.',
    'equals'                => 'O campo {field} debe ser exactamente: {param}.',
    'exact_length'          => 'O campo {field} debe ter exactamente {param} caractéres de lonxitude.',
    'greater_than'          => 'O campo {field} debe conter un número maior que {param}.',
    'greater_than_equal_to' => 'O campo {field} debe conter un número maior ou igual a {param}.',
    'hex'                   => 'O campo {field} só pode conter caracteres hexadecimais.',
    'in_list'               => 'O campo {field} debe ser un de: {param}.',
    'integer'               => 'O campo {field} debe conter un enteiro.',
    'is_natural'            => 'O campo {field} debe conter só díxitos.',
    'is_natural_no_zero'    => 'O campo {field} debe só conter díxitos e ser maior ca cero.',
    'is_not_unique'         => 'O campo {field} debe conter un valor previamente existente na base de datos.',
    'is_unique'             => 'O campo {field} debe conter un valor único.',
    'less_than'             => 'O campo {field} debe conter un número menor que {param}.',
    'less_than_equal_to'    => 'O campo {field} debe conter un número menor ou igual a {param}.',
    'matches'               => 'O campo {field} non coincide co campo {param}.',
    'max_length'            => 'O campo {field} non pode exceder os {param} caracteres de lonxitude.',
    'min_length'            => 'O campo {field} debe ter alo menos {param} caracteres de lonxitude.',
    'not_equals'            => 'O campo {field} non pode ser: {param}.',
    'not_in_list'           => 'O campo {field} non debe ser un de: {param}.',
    'numeric'               => 'O campo {field} debe conter só números.',
    'regex_match'           => 'O campo {field} non está no formato correcto.',
    'required'              => 'O campo {field} é obrigatorio.',
    'required_with'         => 'O campo {field} é obrigatorio cando {param} está presente.',
    'required_without'      => 'O campo {field} é obrigatorio cando {param} non está presente.',
    'string'                => 'O campo {field} debe ser unha cadea válida.',
    'timezone'              => 'O campo {field} debe ser unha zoa horaria válida.',
    'valid_base64'          => 'O campo {field} debe ser unha cadea base64 válida.',
    'valid_email'           => 'O campo {field} debe conter unha dirección de email válida.',
    'valid_emails'          => 'O campo {field} debe conter tódalas direccións de email válidas.',
    'valid_ip'              => 'O campo {field} debe conter unha IP válida.',
    'valid_url'             => 'O campo {field} debe conter unha URL válida.',
    'valid_url_strict'      => 'O campo {field} debe conter unha URL válida.',
    'valid_date'            => 'O campo {field} debe conter unha data válida.',
    'valid_json'            => 'O campo {field} debe conter un json válido.', // 'The {field} field must contain a valid json.',

    // Credit Cards
    'valid_cc_num' => '{field} non parece ser un número de tarxeta de crédito válida.',

    // Files
    'uploaded' => '{field} non é un campo de subida de arquivo válido.',
    'max_size' => '{field} é demasiado grande para un arquivo.',
    'is_image' => '{field} non é válido, subido arquivo de imaxe.',
    'mime_in'  => '{field} non ten un tipo válido de mime.',
    'ext_in'   => '{field} non ten unha extensión de arquivo válida.',
    'max_dims' => '{field} non é unha imaxe o ten demasiado alto ou ancho.',
];
