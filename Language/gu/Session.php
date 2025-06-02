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

// Session language settings
return [
    'missingDatabaseTable'   => 'ડેટાબેઝ સત્ર હેન્ડલર કામ કરવા માટે "sessionSavePath" માં કોષ્ટકનું નામ હોવું આવશ્યક છે.', // '"sessionSavePath" must have the table name for the Database Session Handler to work.'
    'invalidSavePath'        => 'સત્ર: ગોઠવેલો સેવ પાથ "{0}" ડિરેક્ટરી નથી, અસ્તિત્વમાં નથી અથવા બનાવી શકાતો નથી.', // 'Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.'
    'writeProtectedSavePath' => 'સત્ર: ગોઠવેલો સેવ પાથ "{0}" PHP પ્રક્રિયા દ્વારા લખી શકાય તેવો નથી.', // 'Session: Configured save path "{0}" is not writable by the PHP process.'
    'emptySavePath'          => 'સત્ર: કોઈ સેવ પાથ ગોઠવેલો નથી.', // 'Session: No save path configured.'
    'invalidSavePathFormat'  => 'સત્ર: અમાન્ય રેડિસ સેવ પાથ ફોર્મેટ: "{0}"', // 'Session: Invalid Redis save path format: "{0}"'

    // @deprecated
    'invalidSameSiteSetting' => 'સત્ર: SameSite સેટિંગ None, Lax, Strict, અથવા ખાલી સ્ટ્રિંગ હોવું જોઈએ. આપેલ: "{0}"', // 'Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: "{0}"'
];
