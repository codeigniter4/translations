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

// Cookie language settings
return [
    'invalidExpiresTime'    => 'மதிப்பில்லாத "{0}" பண்புக்கூறு வகை "Expires". எதிர்பார்க்கப்படுபவை: string, integer, DateTimeInterface object.',
    'invalidExpiresValue'   => 'சேமிக்கப்பட்ட தகவலின் (cookie) காலாவதி நேரம் சரியானது அல்ல.',
    'invalidCookieName'     => 'சேமிக்கப்பட்ட தகவலின் (cookie) பெயர் "{0}" தவறான எழுத்துக்களைக் கொண்டுள்ளது.',
    'emptyCookieName'       => 'சேமிக்கப்பட்ட தகவலின் (cookie) பெயர் காலியாக இருக்க கூடாது.',
    'invalidSecurePrefix'   => '"__Secure-" முன்னொட்டைப் பயன்படுத்த, "Secure" பண்புக்கூறை அமைக்க வேண்டும்.',
    'invalidHostPrefix'     => '"__Host-" முன்னொட்டைப் பயன்படுத்துவது "Secure" கொடியுடன் அமைக்கப்பட வேண்டும், "Domain" பண்புக்கூறு இருக்கக்கூடாது, மேலும் "Path" "/" ஆக அமைக்கப்படும்.',
    'invalidSameSite'       => 'SameSite மதிப்பானது None, Lax, Strict or a blank string ஆக இருக்க வேண்டும், {0} கொடுக்கப்பட்டது.',
    'invalidSameSiteNone'   => '"SameSite=None" உபயோகப்படுத்தும் போது    "SameSite=None" பண்புக்கூறுக்கு "secure" பண்புக்கூறை அமைக்க வேண்டும்.',
    'invalidCookieInstance' => '"{0}" வகுப்பு சேமிக்கப்பட்ட தகவலின் (cookie) வரிசை "{1}" இன் நிகழ்வுகளாக இருக்கும் என்று எதிர்பார்க்கப்படுகிறது, ஆனால் {3} குறியீட்டில் "{2}" கிடைத்துள்ளது.',
    'unknownCookieInstance' => '"{0}" பெயர் மற்றும் "{1}" முன்னொட்டுடன் கூடிய சேமிக்கப்பட்ட தகவலின் (cookie) பொருள் சேகரிப்பில் காணப்படவில்லை.',
];
