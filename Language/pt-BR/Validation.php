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
    'noRuleSets'      => 'Nenhum conjunto de regras especificado na configuração de Validação.',
    'ruleNotFound'    => '{0} não é uma regra válida.',
    'groupNotFound'   => '{0} não é um grupo de regras de validação.',
    'groupNotArray'   => 'O grupo de regras {0} deve ser um array.',
    'invalidTemplate' => '{0} não é um template de Validation válido.',

    // Rule Messages
    'alpha'                 => 'O campo {field} pode conter apenas caracteres alfabéticos.',
    'alpha_dash'            => 'O campo {field} pode conter apenas caracteres alfa-numéricos, sublinhados, e traços.',
    'alpha_numeric'         => 'O campo {field} pode conter apenas caracteres alfa-numéricos.',
    'alpha_numeric_punct'   => 'O campo {field} pode conter apenas caracteres alfa-numéricos, espaços, e  ~ ! # $ % & * - _ + = | : . caracteres.',
    'alpha_numeric_space'   => 'O campo {field} pode conter apenas caracteres alfa-numéricos e espaços.',
    'alpha_space'           => 'O campo {field} pode conter apenas caracteres alfabéticos e espaços.',
    'decimal'               => 'O campo {field} deve conter um número decimal.',
    'differs'               => 'O campo {field} deve ser diferente do campo {param}.',
    'equals'                => 'O campo {field} deve ser exatamente: {param}.',
    'exact_length'          => 'O campo {field} deve conter exatamente {param} caracteres no tamanho.',
    'greater_than'          => 'O campo {field} deve conter um número maior que {param}.',
    'greater_than_equal_to' => 'O campo {field} deve conter um número maior ou igual a {param}.',
    'hex'                   => 'O campo {field} pode conter apenas caracteres hexadecimais.',
    'in_list'               => 'O campo {field} deve ser um desses: {param}.',
    'integer'               => 'O campo {field} deve conter um número inteiro.',
    'is_natural'            => 'O campo {field} deve conter apenas dígitos.',
    'is_natural_no_zero'    => 'O campo {field} deve conter apenas dígitos e deve ser maior que zero.',
    'is_not_unique'         => 'O campo {field} deve conter um valor já existente no banco de dados.',
    'is_unique'             => 'O campo {field} deve conter um valor único.',
    'less_than'             => 'O campo {field} deve conter um número menor que {param}.',
    'less_than_equal_to'    => 'O campo {field} deve conter um número menor ou igual a {param}.',
    'matches'               => 'O campo {field} não é igual ao campo {param}.',
    'max_length'            => 'O campo {field} não pode exceder {param} caracteres no tamanho.',
    'min_length'            => 'O campo {field} deve conter pelo menos {param} caracteres no tamanho.',
    'not_equals'            => 'O campo {field} não pode ser: {param}.',
    'not_in_list'           => 'O campo {field} não deve ser um desses: {param}.',
    'numeric'               => 'O campo {field} deve conter apenas números.',
    'regex_match'           => 'O campo {field} não está no formato correto.',
    'required'              => 'O campo {field} é requerido.',
    'required_with'         => 'O campo {field} é requerido quando {param} está presente.',
    'required_without'      => 'O campo {field} é requerido quando {param} não está presente.',
    'string'                => 'O campo {field} deve ser uma string válida.',
    'timezone'              => 'O campo {field} deve ser uma timezone válida.',
    'valid_base64'          => 'O campo {field} deve ser uma string base64 válida.',
    'valid_email'           => 'O campo {field} deve conter um endereço de e-mail válido.',
    'valid_emails'          => 'O campo {field} deve conter todos os endereços de e-mails válidos.',
    'valid_ip'              => 'O campo {field} deve conter um IP válido.',
    'valid_url'             => 'O campo {field} deve conter uma URL válida.',
    'valid_date'            => 'O campo {field} deve conter uma data válida.',

    // Credit Cards
    'valid_cc_num' => '{field} não parece ser um número de cartão de crédito válido.',

    // Files
    'uploaded' => '{field} não é um arquivo de upload válido.',
    'max_size' => '{field} é um arquivo muito grande.',
    'is_image' => '{field} não é um arquivo de imagem válida do upload.',
    'mime_in'  => '{field} não tem um tipo mime válido.',
    'ext_in'   => '{field} não tem uma extensão de arquivo válida.',
    'max_dims' => '{field} não é uma imagem, ou ela é muito larga ou muito grande.',
];
