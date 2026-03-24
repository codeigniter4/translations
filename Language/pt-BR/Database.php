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

// Database language settings
return [
    'invalidEvent'                     => '"{0}" não é um callback de Model Event válido.', // '"{0}" is not a valid Model Event callback.',
    'invalidArgument'                  => 'Você deve fornecer um "{0}" válido.', // 'You must provide a valid "{0}".',
    'invalidAllowedFields'             => 'Os campos permitidos devem ser especificados para o model: "{0}"', // 'Allowed fields must be specified for model: "{0}"',
    'emptyDataset'                     => 'Não há dados para "{0}".', // 'There is no data to {0}.',
    'emptyPrimaryKey'                  => 'Não existe chave primária definida ao tentar criar {0}.', // 'There is no primary key defined when trying to make {0}.',
    'failGetFieldData'                 => 'Falha ao obter dados de campo do banco de dados.', // 'Failed to get field data from database.',
    'failGetIndexData'                 => 'Falha ao obter dados de índice do banco de dados.', // 'Failed to get index data from database.',
    'failGetForeignKeyData'            => 'Falha ao obter dados de chave estrangeira do banco de dados.', // 'Failed to get foreign key data from database.',
    'parseStringFail'                  => 'Falha ao analisar a sequência de chaves', // 'Parsing key string failed.',
    'featureUnavailable'               => 'Este recurso não está disponível para o banco de dados que você está usando.', // 'This feature is not available for the database you are using.',
    'tableNotFound'                    => 'A tabela "{0}" não foi encontrada no banco de dados atual.', // 'Table "{0}" was not found in the current database.',
    'noPrimaryKey'                     => 'A classe model "{0}" não especifica uma chave primária.', // '"{0}" model class does not specify a Primary Key.',
    'noDateFormat'                     => 'A classe model "{0}" não tem um formato de data válido.', // '"{0}" model class does not have a valid dateFormat.'
    'fieldNotExists'                   => 'Campo "{0}" não encontrado.', // 'Field "{0}" not found.',
    'forEmptyInputGiven'               => 'Uma declaração vazia foi fornecida para o campo "{0}"', // 'Empty statement is given for the field "{0}"'
    'forFindColumnHaveMultipleColumns' => 'Apenas uma coluna é permitida no nome da coluna.', // 'Only single column allowed in Column name.',
    'methodNotAvailable'               => 'Não é possível usar "{1}" em "{0}". Este é um método da classe Query Builder.', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.',
];
