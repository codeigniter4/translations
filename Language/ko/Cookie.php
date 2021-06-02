<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Cookie language settings
return [
	'invalidExpiresTime'    => '"만료" 속성에 대한 "{0}" 유형이 잘못되었습니다. 예상 : 문자열, 정수, DateTimeInterface object.', // Invalid "{0}" type for "Expires" attribute. Expected: string, integer, DateTimeInterface object.
	'invalidExpiresValue'   => '쿠키 만료 시간이 유효하지 않습니다.', // The cookie expiration time is not valid.
	'invalidCookieName'     => '쿠키 이름 "{0}"에 잘못된 문자가 있습니다.', // The cookie name "{0}" contains invalid characters.
	'emptyCookieName'       => '쿠키 이름은 비워 둘 수 없습니다.', // The cookie name cannot be empty.
	'invalidSecurePrefix'   => '"__Secure-" 접두사를 사용하려면 "Secure" 속성을 설정해야합니다.', // Using the "__Secure-" prefix requires setting the "Secure" attribute.
	'invalidHostPrefix'     => '"__Host-" 접두사를 사용하는 경우 "Secure" 플래그로 설정해야하며 "Domain" 속성이 없어야하며 "Path"가 "/"로 설정되어 있어야합니다.', // Using the "__Host-" prefix must be set with the "Secure" flag, must not have a "Domain" attribute, and the "Path" is set to "/".
	'invalidSameSite'       => 'SameSite 값은 None, Lax, Strict 또는 빈 문자열 ({0}이 주어짐)이어야합니다.', // The SameSite value must be None, Lax, Strict or a blank string, {0} given.
	'invalidSameSiteNone'   => '"SameSite = None" 속성을 사용하려면 "Secure" 속성을 설정해야합니다.', // Using the "SameSite=None" attribute requires setting the "Secure" attribute.
	'invalidCookieInstance' => '"{0}"클래스는 쿠키 배열이 "{1}"의 인스턴스 일 것으로 예상했지만 색인 {3}에 "{2}"이 (가) 있습니다.', // "{0}" class expected cookies array to be instances of "{1}" but got "{2}" at index {3}.
	'unknownCookieInstance' => '컬렉션에서 이름이 "{0}"이고 접두사가 "{1}"인 쿠키 개체를 찾을 수 없습니다.', // Cookie object with name "{0}" and prefix "{1}" was not found in the collection.
];
