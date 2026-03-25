<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Configurações de linguagem de Validação
return [
    // Core Messages
    'noRuleSets'      => 'Nenhum conjunto de regras especificado na configuração de Validação.',
    'ruleNotFound'    => '"{0}" não é uma regra válida.',
    'groupNotFound'   => '"{0}" não é um grupo de regras de validação.',
    'groupNotArray'   => 'O grupo de regras "{0}" deve ser um array.',
    'invalidTemplate' => '"{0}" não é um template de Validação válido.',

    // Rule Messages
    'alpha'                 => 'O campo {field} pode conter apenas caracteres alfabéticos.',
    'alpha_dash'            => 'O campo {field} pode conter apenas caracteres alfanuméricos, sublinhados e hifens.',
    'alpha_numeric'         => 'O campo {field} pode conter apenas caracteres alfanuméricos.',
    'alpha_numeric_punct'   => 'O campo {field} pode conter apenas caracteres alfanuméricos, espaços e os caracteres ~ ! # $ % & * - _ + = | : .',
    'alpha_numeric_space'   => 'O campo {field} pode conter apenas caracteres alfanuméricos e espaços.',
    'alpha_space'           => 'O campo {field} pode conter apenas caracteres alfabéticos e espaços.',
    'decimal'               => 'O campo {field} deve conter um número decimal.',
    'differs'               => 'O campo {field} deve ser diferente do campo {param}.',
    'equals'                => 'O campo {field} deve ser exatamente igual a: {param}.',
    'exact_length'          => 'O campo {field} deve ter exatamente {param} caracteres de comprimento.',
    'field_exists'          => 'O campo {field} deve conter um valor existente.',
    'greater_than'          => 'O campo {field} deve conter um número maior que {param}.',
    'greater_than_equal_to' => 'O campo {field} deve conter um número maior ou igual a {param}.',
    'hex'                   => 'O campo {field} pode conter apenas caracteres hexadecimais.',
    'in_list'               => 'O campo {field} deve ser um dos seguintes: {param}.',
    'integer'               => 'O campo {field} deve conter um número inteiro.',
    'is_natural'            => 'O campo {field} deve conter apenas dígitos.',
    'is_natural_no_zero'    => 'O campo {field} deve conter apenas dígitos e ser maior que zero.',
    'is_not_unique'         => 'O campo {field} deve conter um valor já existente no banco de dados.',
    'is_unique'             => 'O campo {field} deve conter um valor único.',
    'less_than'             => 'O campo {field} deve conter um número menor que {param}.',
    'less_than_equal_to'    => 'O campo {field} deve conter um número menor ou igual a {param}.',
    'matches'               => 'O campo {field} não corresponde ao campo {param}.',
    'max_length'            => 'O campo {field} não pode exceder {param} caracteres de comprimento.',
    'min_length'            => 'O campo {field} deve ter pelo menos {param} caracteres de comprimento.',
    'not_equals'            => 'O campo {field} não pode ser: {param}.',
    'not_in_list'           => 'O campo {field} não deve ser um dos seguintes: {param}.',
    'numeric'               => 'O campo {field} deve conter apenas números.',
    'regex_match'           => 'O campo {field} não está no formato correto.',
    'required'              => 'O campo {field} é obrigatório.',
    'required_with'         => 'O campo {field} é obrigatório quando {param} está presente.',
    'required_without'      => 'O campo {field} é obrigatório quando {param} não está presente.',
    'string'                => 'O campo {field} deve ser uma string válida.',
    'timezone'              => 'O campo {field} deve ser um fuso horário válido.',
    'valid_base64'          => 'O campo {field} deve ser uma string base64 válida.',
    'valid_email'           => 'O campo {field} deve conter um endereço de e-mail válido.',
    'valid_emails'          => 'O campo {field} deve conter todos os endereços de e-mail válidos.',
    'valid_ip'              => 'O campo {field} deve conter um IP válido.',
    'valid_url'             => 'O campo {field} deve conter uma URL válida.',
    'valid_url_strict'      => 'O campo {field} deve conter uma URL válida.',
    'valid_date'            => 'O campo {field} deve conter uma data válida.',
    'valid_json'            => 'O campo {field} deve conter um JSON válido.',

    // Credit Cards
    'valid_cc_number' => '{field} não parece ser um número de cartão de crédito válido.',

    // Files
    'uploaded' => '{field} não é um arquivo de upload válido.',
    'max_size' => '{field} é um arquivo muito grande.',
    'is_image' => '{field} não é um arquivo de imagem válido.',
    'mime_in'  => '{field} não possui um tipo mime válido.',
    'ext_in'   => '{field} não possui uma extensão de arquivo válida.',
    'max_dims' => '{field} não é uma imagem, ou é muito larga ou muito alta.',
    'min_dims' => '{field} não é uma imagem, ou a sua largura ou altura são insuficientes.',
];
