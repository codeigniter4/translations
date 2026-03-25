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

// Configurações de linguagem do Banco de Dados
return [
    'invalidEvent'                     => '"{0}" não é um callback de Evento de Model válido.',
    'invalidArgument'                  => 'Você deve fornecer um "{0}" válido.',
    'invalidAllowedFields'             => 'Campos permitidos (allowed fields) devem ser especificados para o model: "{0}"',
    'emptyDataset'                     => 'Não há dados para {0}.',
    'emptyPrimaryKey'                  => 'Não há chave primária definida ao tentar fazer {0}.',
    'failGetFieldData'                 => 'Falha ao obter dados do campo do banco de dados.',
    'failGetIndexData'                 => 'Falha ao obter dados do índice do banco de dados.',
    'failGetForeignKeyData'            => 'Falha ao obter dados da chave estrangeira do banco de dados.',
    'parseStringFail'                  => 'Falha ao analisar a string da chave.',
    'featureUnavailable'               => 'Este recurso não está disponível para o banco de dados que você está usando.',
    'tableNotFound'                    => 'A tabela "{0}" não foi encontrada no banco de dados atual.',
    'noPrimaryKey'                     => 'A classe de model "{0}" não especifica uma Chave Primária.',
    'noDateFormat'                     => 'A classe de model "{0}" não possui um dateFormat válido.',
    'fieldNotExists'                   => 'Campo "{0}" não encontrado.',
    'forEmptyInputGiven'               => 'Declaração vazia fornecida para o campo "{0}"',
    'forFindColumnHaveMultipleColumns' => 'Apenas uma única coluna é permitida no nome da Coluna.',
    'methodNotAvailable'               => 'Você não pode usar "{1}" em "{0}". Este é um método da classe Query Builder.',
];
