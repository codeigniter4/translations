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

// Migration language settings
return [
    // Migration Runner
    'missingTable'           => 'માઇગ્રેશન્સ કોષ્ટક સેટ કરવું આવશ્યક છે.',
    'disabled'               => 'માઇગ્રેશન્સ લોડ કરવામાં આવ્યા છે પરંતુ તે અક્ષમ છે અથવા ખોટી રીતે સેટ અપ કરવામાં આવ્યા છે.',
    'notFound'               => 'માઇગ્રેશન ફાઇલ મળી નથી: ',
    'batchNotFound'          => 'લક્ષ્ય બેચ મળ્યું નથી: ',
    'empty'                  => 'કોઈ માઇગ્રેશન ફાઇલો મળી નથી',
    'gap'                    => 'સંસ્કરણ નંબરની નજીક માઇગ્રેશન ક્રમમાં એક ગેપ છે: ',
    'classNotFound'          => 'માઇગ્રેશન ક્લાસ "%s" મળી શક્યો નથી.',
    'missingMethod'          => 'માઇગ્રેશન ક્લાસમાં "%s" પદ્ધતિ ખૂટે છે.',

    // Migration Command
    'migHelpLatest'          => "\t\tડેટાબેઝને નવીનતમ ઉપલબ્ધ માઇગ્રેશન પર માઇગ્રેટ કરે છે.",
    'migHelpCurrent'         => "\t\tડેટાબેઝને ગોઠવણીમાં 'વર્તમાન' તરીકે સેટ કરેલા સંસ્કરણ પર માઇગ્રેટ કરે છે.",
    'migHelpVersion'         => "\tડેટાબેઝને સંસ્કરણ {v} પર માઇગ્રેટ કરે છે.",
    'migHelpRollback'        => "\tતમામ માઇગ્રેશન્સને સંસ્કરણ 0 પર 'ડાઉન' કરે છે.",
    'migHelpRefresh'         => "\t\tડેટાબેઝને તાજો કરવા માટે તમામ માઇગ્રેશન્સને અનઇન્સ્ટોલ કરે છે અને ફરીથી ચલાવે છે.",
    'migHelpSeed'            => "\t[નામ] નામના સીડરને ચલાવે છે.",
    'migCreate'              => "\t[નામ] નામનું નવું માઇગ્રેશન બનાવે છે.",
    'nameMigration'          => 'માઇગ્રેશન ફાઇલનું નામ આપો',
    'migNumberError'         => 'માઇગ્રેશન નંબર ત્રણ અંકોનો હોવો જોઈએ, અને ક્રમમાં કોઈ ગેપ ન હોવા જોઈએ.',
    'rollBackConfirm'        => 'શું તમે ખરેખર રોલબેક કરવા માંગો છો?',
    'refreshConfirm'         => 'શું તમે ખરેખર રિફ્રેશ કરવા માંગો છો?',

    'latest'                 => 'બધા નવા માઇગ્રેશન્સ ચલાવી રહ્યા છીએ...',
    'generalFault'           => 'માઇગ્રેશન નિષ્ફળ!',
    'migrated'               => 'માઇગ્રેશન્સ પૂર્ણ.',
    'migInvalidVersion'      => 'અમાન્ય સંસ્કરણ નંબર પ્રદાન કર્યો.',
    'toVersionPH'            => 'સંસ્કરણ %s પર માઇગ્રેટ કરી રહ્યા છીએ...',
    'toVersion'              => 'વર્તમાન સંસ્કરણ પર માઇગ્રેટ કરી રહ્યા છીએ...',
    'rollingBack'            => 'માઇગ્રેશન્સને બેચ પર રોલબેક કરી રહ્યા છીએ: ',
    'noneFound'              => 'કોઈ માઇગ્રેશન્સ મળ્યા નથી.',
    'migSeeder'              => 'સીડરનું નામ',
    'migMissingSeeder'       => 'તમારે સીડરનું નામ પ્રદાન કરવું આવશ્યક છે.',
    'nameSeeder'             => 'સીડર ફાઇલનું નામ આપો',
    'removed'                => 'રોલબેક કરી રહ્યા છીએ: ',
    'added'                  => 'ચલાવી રહ્યા છીએ: ',

    // Migrate Status
    'namespace'              => 'નેમસ્પેસ',
    'filename'               => 'ફાઇલનું નામ',
    'version'                => 'સંસ્કરણ',
    'group'                  => 'જૂથ',
    'on'                     => 'આના પર માઇગ્રેટ થયેલ: ',
    'batch'                  => 'બેચ',
];
