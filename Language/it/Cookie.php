<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
    'invalidExpiresTime'    => 'Tipo "{0}" non valido per l\'attributo "Expires". Previsti: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'La data di scadenza dei cookie non è valida.',
    'invalidCookieName'     => 'Il nome del cookie "{0}" contiene caratteri non validi.',
    'emptyCookieName'       => 'Il nome del cookie non può essere vuoto.',
    'invalidSecurePrefix'   => 'L\'uso del prefisso "__Secure-" richiede di impostare l\'attributo "Secure".',
    'invalidHostPrefix'     => 'L\'uso del prefisso "__Host-" deve essere impostato con il flag "Secure", non deve avere l\'attributo "Domain", e il "Path" impostato a "/".',
    'invalidSameSite'       => 'Il valore SameSite non deve essere: None, Lax, Strict oppure una stringa vuota. Valore impostato {0}',
    'invalidSameSiteNone'   => 'L\'uso dell\'attributo "SameSite=None" richiede l\'impostazione dell\'attributo "Secure".',
    'invalidCookieInstance' => 'La classe "{0}" prevede un array di cookies che sia istanza di "{1}" ma ha ottenuto "{2}" all\'indice {3}.',
    'unknownCookieInstance' => 'L\'oggetto cookie con nome "{0}" e prefisso "{1}" non è stato trovato nella raccolta.',
];
