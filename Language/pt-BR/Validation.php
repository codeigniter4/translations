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
    'noRuleSets'      => 'Nenhum conjunto de regras especificado na configuração de Validação.', // 'No rule sets specified in Validation configuration.',
    'ruleNotFound'    => '"{0}" não é uma regra válida.', // '"{0}" is not a valid rule.',
    'groupNotFound'   => '"{0}" não é um grupo de regras de validação.', // '"{0}" is not a validation rules group.',
    'groupNotArray'   => 'O grupo de regras "{0}" deve ser um array.', // '"{0}" rule group must be an array.',
    'invalidTemplate' => '"{0}" não é um template de Validation válido.', // '"{0}" is not a valid Validation template.',

    // Rule Messages
    'alpha'                 => 'O campo {field} pode conter apenas caracteres alfabéticos.', // 'The {field} field may only contain alphabetical characters.',
    'alpha_dash'            => 'O campo {field} pode conter apenas caracteres alfa-numéricos, sublinhados, e traços.', // 'The {field} field may only contain alphanumeric, underscore, and dash characters.',
    'alpha_numeric'         => 'O campo {field} pode conter apenas caracteres alfa-numéricos.', // 'The {field} field may only contain alphanumeric characters.',
    'alpha_numeric_punct'   => 'O campo {field} pode conter apenas caracteres alfa-numéricos, espaços, e os caracteres ~ ! # $ % & * - _ + = | : . .', // 'The {field} field may contain only alphanumeric characters, spaces, and  ~ ! # $ % & * - _ + = | : . characters.',
    'alpha_numeric_space'   => 'O campo {field} pode conter apenas caracteres alfa-numéricos e espaços.', // 'The {field} field may only contain alphanumeric and space characters.',
    'alpha_space'           => 'O campo {field} pode conter apenas caracteres alfabéticos e espaços.', // 'The {field} field may only contain alphabetical characters and spaces.',
    'decimal'               => 'O campo {field} deve conter um número decimal.', // 'The {field} field must contain a decimal number.',
    'differs'               => 'O campo {field} deve ser diferente do campo {param}.', // 'The {field} field must differ from the {param} field.',
    'equals'                => 'O campo {field} deve ser exatamente: {param}.', // 'The {field} field must be exactly: {param}.',
    'exact_length'          => 'O campo {field} deve conter exatamente {param} caracteres no tamanho.', // 'The {field} field must be exactly {param} characters in length.',
    'field_exists'          => 'O campo {field} já existe.', // 'The {field} field must exist.',
    'greater_than'          => 'O campo {field} deve conter um número maior que {param}.', // 'The {field} field must contain a number greater than {param}.',
    'greater_than_equal_to' => 'O campo {field} deve conter um número maior ou igual a {param}.', // 'The {field} field must contain a number greater than or equal to {param}.',
    'hex'                   => 'O campo {field} pode conter apenas caracteres hexadecimais.', // 'The {field} field may only contain hexadecimal characters.',
    'in_list'               => 'O campo {field} deve ser um desses: {param}.', // 'The {field} field must be one of: {param}.',
    'integer'               => 'O campo {field} deve conter um número inteiro.', // 'The {field} field must contain an integer.',
    'is_natural'            => 'O campo {field} deve conter apenas dígitos.', // 'The {field} field must only contain digits.',
    'is_natural_no_zero'    => 'O campo {field} deve conter apenas dígitos e deve ser maior que zero.', // 'The {field} field must only contain digits and must be greater than zero.',
    'is_not_unique'         => 'O campo {field} deve conter um valor já existente no banco de dados.', // 'The {field} field must contain a previously existing value in the database.',
    'is_unique'             => 'O campo {field} deve conter um valor único.', // 'The {field} field must contain a unique value.',
    'less_than'             => 'O campo {field} deve conter um número menor que {param}.', // 'The {field} field must contain a number less than {param}.',
    'less_than_equal_to'    => 'O campo {field} deve conter um número menor ou igual a {param}.', // 'The {field} field must contain a number less than or equal to {param}.',
    'matches'               => 'O campo {field} não é igual ao campo {param}.', // 'The {field} field does not match the {param} field.',
    'max_length'            => 'O campo {field} não pode exceder {param} caracteres no tamanho.', // 'The {field} field cannot exceed {param} characters in length.',
    'min_length'            => 'O campo {field} deve conter pelo menos {param} caracteres no tamanho.', // 'The {field} field must be at least {param} characters in length.',
    'not_equals'            => 'O campo {field} não pode ser: {param}.', // 'The {field} field cannot be: {param}.',
    'not_in_list'           => 'O campo {field} não deve ser um desses: {param}.', // 'The {field} field must not be one of: {param}.',
    'numeric'               => 'O campo {field} deve conter apenas números.', // 'The {field} field must contain only numbers.',
    'regex_match'           => 'O campo {field} não está no formato correto.', // 'The {field} field is not in the correct format.',
    'required'              => 'O campo {field} é requerido.', // 'The {field} field is required.',
    'required_with'         => 'O campo {field} é requerido quando {param} está presente.', // 'The {field} field is required when {param} is present.',
    'required_without'      => 'O campo {field} é requerido quando {param} não está presente.', // 'The {field} field is required when {param} is not present.',
    'string'                => 'O campo {field} deve ser uma string válida.', // 'The {field} field must be a valid string.',
    'timezone'              => 'O campo {field} deve ser uma timezone válida.', // 'The {field} field must be a valid timezone.',
    'valid_base64'          => 'O campo {field} deve ser uma string base64 válida.', // 'The {field} field must be a valid base64 string.',
    'valid_email'           => 'O campo {field} deve conter um endereço de e-mail válido.', // 'The {field} field must contain a valid email address.',
    'valid_emails'          => 'O campo {field} deve conter todos os endereços de e-mails válidos.', // 'The {field} field must contain all valid email addresses.',
    'valid_ip'              => 'O campo {field} deve conter um IP válido.', // 'The {field} field must contain a valid IP.',
    'valid_url'             => 'O campo {field} deve conter uma URL válida.', // 'The {field} field must contain a valid URL.',
    'valid_url_strict'      => 'O campo {field} deve conter uma URL válida.', // 'The {field} field must contain a valid URL.',
    'valid_date'            => 'O campo {field} deve conter uma data válida.', // 'The {field} field must contain a valid date.',
    'valid_json'            => 'O campo {field} deve conter um json válido.', // 'The {field} field must contain a valid json.',

    // Credit Cards
    'valid_cc_num' => '{field} não parece ser um número de cartão de crédito válido.', // '{field} does not appear to be a valid credit card number.',

    // Files
    'uploaded' => '{field} não é um arquivo de upload válido.', // '{field} is not a valid uploaded file.',
    'max_size' => '{field} é um arquivo muito grande.', // '{field} is too large of a file.',
    'is_image' => '{field} não é um arquivo de imagem válida do upload.', // '{field} is not a valid, uploaded image file.'
    'mime_in'  => '{field} não tem um tipo mime válido.', // '{field} does not have a valid mime type.',
    'ext_in'   => '{field} não tem uma extensão de arquivo válida.', // '{field} does not have a valid file extension.',
    'max_dims' => '{field} não é uma imagem, ou ela é muito larga ou muito grande.', // '{field} is either not an image, or it is too wide or tall.',
];
