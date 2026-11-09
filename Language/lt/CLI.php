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
    'altCommandPlural'   => 'Ar turėjai omenyje vieną iš šių?',
    'altCommandSingular' => 'Ar turėjai omenyje šį?',
    'commandNotFound'    => 'Komandos „{0}“ rasti nepavyko.',
    'generator'          => [
        'cancelOperation' => 'Operacija atšaukta.',
        'className'       => [
            'cell'        => 'Lastelės klasės pavadinimas',
            'command'     => 'Komandos klasės pavadinimas',
            'config'      => 'Konfigūracijos klasės pavadinimas',
            'controller'  => 'Kontrolerio klasės pavadinimas',
            'default'     => 'Klasės pavadinimas',
            'entity'      => 'Entity klasės pavadinimas',
            'filter'      => 'Filtro klasės pavadinimas',
            'migration'   => 'Migracijos klasės pavadinimas',
            'model'       => 'Modelio klasės pavadinimas',
            'seeder'      => 'Sėjiklio klasės pavadinimas',
            'test'        => 'Testo klasės pavadinimas',
            'transformer' => 'Transformerio klasės pavadinimas',
            'validation'  => 'Validavimo klasės pavadinimas',
        ],
        'commandType'              => 'Komandos tipas',
        'databaseGroup'            => 'Duomenų bazės grupė',
        'fileCreate'               => 'Failas sukurtas: {0}',
        'fileError'                => 'Klaida kuriant failą: {0}',
        'fileExist'                => 'Failas jau yra: {0}',
        'fileOverwrite'            => 'Failas perrašytas: {0}',
        'parentClass'              => 'Motininė klasė',
        'returnType'               => 'Grąžinamų duomenų tipas',
        'tableName'                => 'Lentelės pavadinimas',
        'undefinedDatabaseGroup'   => 'Duomenų bazės grupė „{0}“ neapibrėžta.',
        'unsupportedSessionDriver' => 'Sesijų saugojimas duomenų bazėje palaikomas tik su MySQLi ir Postgre. Duomenų bazės grupė „{0}“ naudoja „{1}“ variklį.',
        'usingCINamespace'         => 'Perspėjimas: naudojant „CodeIgniter“ vardų sritį failas bus sukurtas sistemos direktorijoje.',
        'viewName'                 => [
            'cell' => 'Lastelės atvaizdavimo failo pavadinimas',
        ],
    ],
    'helpArguments'       => 'Argumentai:',
    'helpDescription'     => 'Aprašymas:',
    'helpOptions'         => 'Parinktys:',
    'helpUsage'           => 'Naudojimas:',
    'invalidColor'        => 'Neteisinga {0} spalva: {1}.',
    'namespaceNotDefined' => 'Vardų sritis „{0}“ neapibrėžta.',
    'signals'             => [
        'noPcntlExtension' => 'PCNTL plėtinys nepasiekiamas. Signalų apdorojimas išjungtas.',
        'noPosixExtension' => 'SIGTSTP/SIGCONT apdorojimui reikalingas POSIX plėtinys. Šie signalai bus pašalinti iš registracijos.',
        'failedSignal'     => 'Nepavyko užregistruoti signalų apdoroklio: „{0}“.',
    ],
];
