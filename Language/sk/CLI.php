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
    'altCommandPlural'   => 'Mali ste na mysli niektorý z týchto?',
    'altCommandSingular' => 'Mali ste na mysli toto?',
    'commandNotFound'    => 'Príkaz "{0}" nebol nájdený.',
    'generator'          => [
        'cancelOperation' => 'Operácia bola zrušená.',
        'className'       => [
            'cell'        => 'Názov triedy bunky (cell)',
            'command'     => 'Názov triedy príkazu',
            'config'      => 'Názov triedy konfigurácie',
            'controller'  => 'Názov triedy controllera',
            'default'     => 'Názov triedy',
            'entity'      => 'Názov triedy entity',
            'filter'      => 'Názov triedy filtra',
            'migration'   => 'Názov triedy migrácie',
            'model'       => 'Názov triedy modelu',
            'seeder'      => 'Názov triedy seedera',
            'test'        => 'Názov triedy testu',
            'transformer' => 'Názov triedy transformera',
            'validation'  => 'Názov triedy validácie',
        ],
        'commandType'              => 'Typ príkazu',
        'databaseGroup'            => 'Databázová skupina',
        'fileCreate'               => 'Súbor vytvorený: {0}',
        'fileError'                => 'Chyba pri vytváraní súboru: "{0}"',
        'fileExist'                => 'Súbor už existuje: "{0}"',
        'fileOverwrite'            => 'Súbor prepísaný: "{0}"',
        'parentClass'              => 'Nadradená trieda',
        'returnType'               => 'Návratový typ',
        'tableName'                => 'Názov tabuľky',
        'undefinedDatabaseGroup'   => 'Databázová skupina "{0}" nie je definovaná.',
        'unsupportedSessionDriver' => 'Databázové session sú podporované iba pre MySQLi a Postgre. Databázová skupina "{0}" používa ovládač "{1}".',
        'usingCINamespace'         => 'Upozornenie: Použitím namespace "CodeIgniter" sa súbor vygeneruje v systémovom adresári.',
        'viewName'                 => [
            'cell' => 'Názov view bunky (cell)',
        ],
    ],
    'helpArguments'       => 'Argumenty:',
    'helpDescription'     => 'Popis:',
    'helpOptions'         => 'Možnosti:',
    'helpUsage'           => 'Použitie:',
    'invalidColor'        => 'Neplatná "{0}" farba: "{1}".',
    'namespaceNotDefined' => 'Namespace "{0}" nie je definovaný.',
    'signals'             => [
        'noPcntlExtension' => 'Rozšírenie PCNTL nie je dostupné. Spracovanie signálov je vypnuté.',
        'noPosixExtension' => 'Spracovanie SIGTSTP/SIGCONT vyžaduje rozšírenie POSIX. Tieto signály budú odstránené z registrácie.',
        'failedSignal'     => 'Nepodarilo sa zaregistrovať handler pre signál: "{0}".',
    ],
];
