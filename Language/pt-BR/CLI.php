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

// Configurações de linguagem da CLI
return [
    'altCommandPlural'   => 'Você quis dizer um destes?',
    'altCommandSingular' => 'Você quis dizer este?',
    'commandNotFound'    => 'Comando "{0}" não encontrado.',
    'generator'          => [
        'cancelOperation' => 'A operação foi cancelada.',
        'className'       => [
            'cell'        => 'Nome da classe Cell',
            'command'     => 'Nome da classe Command',
            'config'      => 'Nome da classe Config',
            'controller'  => 'Nome da classe Controller',
            'default'     => 'Nome da classe',
            'entity'      => 'Nome da classe Entity',
            'filter'      => 'Nome da classe Filter',
            'migration'   => 'Nome da classe Migration',
            'model'       => 'Nome da classe Model',
            'seeder'      => 'Nome da classe Seeder',
            'test'        => 'Nome da classe Test',
            'transformer' => 'Nome da classe Transformer',
            'validation'  => 'Nome da classe Validation',
        ],
        'commandType'      => 'Tipo de comando',
        'databaseGroup'    => 'Grupo do banco de dados',
        'fileCreate'       => 'Arquivo criado: {0}',
        'fileError'        => 'Erro ao criar o arquivo: "{0}"',
        'fileExist'        => 'O arquivo já existe: "{0}"',
        'fileOverwrite'    => 'Arquivo sobrescrito: "{0}"',
        'parentClass'      => 'Classe pai',
        'returnType'       => 'Tipo de retorno',
        'tableName'        => 'Nome da tabela',
        'usingCINamespace' => 'Aviso: Usar o namespace "CodeIgniter" gerará o arquivo no diretório do sistema.',
        'viewName'         => [
            'cell' => 'Nome da view cell',
        ],
    ],
    'helpArguments'       => 'Argumentos:',
    'helpDescription'     => 'Descrição:',
    'helpOptions'         => 'Opções:',
    'helpUsage'           => 'Uso:',
    'invalidColor'        => 'Cor "{0}" inválida: "{1}".',
    'namespaceNotDefined' => 'O namespace "{0}" não está definido.',
    'signals'             => [
        'noPcntlExtension' => 'Extensão PCNTL não disponível. Manipulação de sinais desativada.',
        'noPosixExtension' => 'A manipulação de SIGTSTP/SIGCONT requer a extensão POSIX. Estes sinais serão removidos do registro.',
        'failedSignal'     => 'Falha ao registrar o manipulador para o sinal: "{0}".',
    ],
];
