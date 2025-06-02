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

// Cast language settings
return [
    'baseCastMissing'        => '"{0}" ક્લાસે "CodeIgniter\Entity\Cast\BaseCast" ક્લાસને ઇનહેરિટ (inherit) કરવો આવશ્યક છે.', // 'The "{0}" class must inherit the "CodeIgniter\Entity\Cast\BaseCast" class.'
    'invalidCastMethod'      => '"{0}" એ અમાન્ય કાસ્ટ મેથડ (cast method) છે, માન્ય મેથડ્સ છે: ["get", "set"].', // 'The "{0}" is invalid cast method, valid methods are: ["get", "set"].'
    'invalidTimestamp'       => 'ટાઇપ કાસ્ટિંગ "timestamp" માટે સાચા ટાઇમસ્ટેમ્પની અપેક્ષા છે.', // 'Type casting "timestamp" expects a correct timestamp.'
    'jsonErrorCtrlChar'      => 'અણધાર્યો કંટ્રોલ કેરેક્ટર (control character) મળ્યો.', // 'Unexpected control character found.'
    'jsonErrorDepth'         => 'મહત્તમ સ્ટેક ડેપ્થ (stack depth) ઓળંગાઈ ગઈ છે.', // 'Maximum stack depth exceeded.'
    'jsonErrorStateMismatch' => 'અંડરફ્લો (underflow) અથવા મોડ્સમાં અસંગતતા (modes mismatch).', // 'Underflow or the modes mismatch.'
    'jsonErrorSyntax'        => 'સિન્ટેક્ષ એરર (syntax error), અયોગ્ય રીતે ફોર્મેટ કરેલ JSON.', // 'Syntax error, malformed JSON.'
    'jsonErrorUnknown'       => 'અજ્ઞાત એરર (unknown error).', // 'Unknown error.'
    'jsonErrorUtf8'          => 'અયોગ્ય રીતે ફોર્મેટ કરેલ UTF-8 કેરેક્ટર્સ, શક્ય છે કે ખોટી રીતે એન્કોડ (encode) થયેલ હોય.', // 'Malformed UTF-8 characters, possibly incorrectly encoded.'
];
