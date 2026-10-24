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

// CLI language settings
return [
    'altCommandPlural'   => 'Měli jste na mysli některý z těchto?',
    'altCommandSingular' => 'Měli jste na mysli toto?',
    'commandNotFound'    => 'Příkaz "{0}" nebyl nalezen.',
    'generator'          => [
        'cancelOperation' => 'Operace byla zrušena.',
        'className'       => [
            'cell'        => 'Název třídy buňky (cell)',
            'command'     => 'Název třídy příkazu',
            'config'      => 'Název třídy konfigurace',
            'controller'  => 'Název třídy controlleru',
            'default'     => 'Název třídy',
            'entity'      => 'Název třídy entity',
            'filter'      => 'Název třídy filtru',
            'migration'   => 'Název třídy migrace',
            'model'       => 'Název třídy modelu',
            'seeder'      => 'Název třídy seederu',
            'test'        => 'Název třídy testu',
            'transformer' => 'Název třídy transformeru',
            'validation'  => 'Název třídy validace',
        ],
        'commandType'              => 'Typ příkazu',
        'databaseGroup'            => 'Databázová skupina',
        'fileCreate'               => 'Soubor vytvořen: {0}',
        'fileError'                => 'Chyba při vytváření souboru: "{0}"',
        'fileExist'                => 'Soubor již existuje: "{0}"',
        'fileOverwrite'            => 'Soubor přepsán: "{0}"',
        'parentClass'              => 'Nadřazená třída',
        'returnType'               => 'Návratový typ',
        'tableName'                => 'Název tabulky',
        'undefinedDatabaseGroup'   => 'Databázová skupina "{0}" není definována.',
        'unsupportedSessionDriver' => 'Databázové session jsou podporovány pouze pro MySQLi a Postgre. Databázová skupina "{0}" používá ovladač "{1}".',
        'usingCINamespace'         => 'Upozornění: Použitím namespace "CodeIgniter" se soubor vygeneruje v systémovém adresáři.',
        'viewName'                 => [
            'cell' => 'Název view buňky (cell)',
        ],
    ],
    'helpArguments'       => 'Argumenty:',
    'helpDescription'     => 'Popis:',
    'helpOptions'         => 'Možnosti:',
    'helpUsage'           => 'Použití:',
    'invalidColor'        => 'Neplatná "{0}" barva: "{1}".',
    'namespaceNotDefined' => 'Namespace "{0}" není definován.',
    'signals'             => [
        'noPcntlExtension' => 'Rozšíření PCNTL není dostupné. Zpracování signálů je vypnuto.',
        'noPosixExtension' => 'Zpracování SIGTSTP/SIGCONT vyžaduje rozšíření POSIX. Tyto signály budou odebrány z registrace.',
        'failedSignal'     => 'Nepodařilo se zaregistrovat handler pro signál: "{0}".',
    ],
];
