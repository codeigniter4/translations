<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cast language settings
return [
    'jsonErrorDepth'         => 'Maksimālais kaudzes dziļums ir pārsniegts.', // 'Maximum stack depth exceeded.'
    'jsonErrorStateMismatch' => 'Nepietiekama plūsma vai režīmi neatbilst.', // 'Underflow or the modes mismatch.'
    'jsonErrorCtrlChar'      => 'Atrasts negaidīts kontroles simbols.', // 'Unexpected control character found.'
    'jsonErrorSyntax'        => 'Sintakses kļūda, nepareizi veidots JSON.', // 'Syntax error, malformed JSON.'
    'jsonErrorUtf8'          => 'Nepareizi veidotas UTF-8 rakstzīmes, iespējams, ka nepareizi kodētas.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.'
    'jsonErrorUnknown'       => 'Nezināma kļūda.', // 'Unknown error.'
    'abstractCastMissing'    => 'Klasei {0} ir jāmanto CodeIgniter\EntityCast\AbstractCast klase.', // 'The {0} class must inherit the CodeIgniter\EntityCast\AbstractCast class.'
    'wrongCastMethod'        => 'Atļautās kāstošanas metodes ir `get` un `set`.', // 'Allowed methods for cast is "get" and "set".'
    'invalidTimestamp'       => 'Kāstošanas tips `timestamp` sagaida pareizu laika zīmogu.', // 'Type casting "timestamp" expects a correct timestamp.'
];
