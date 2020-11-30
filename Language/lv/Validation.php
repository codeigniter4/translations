<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Validation language settings
return [
	// Core Messages
	'noRuleSets'      => 'Validācijas iestatījumos nav norādīts noteikumu kopums.',
	'ruleNotFound'    => '{0} nav derīgs noteikums.',
	'groupNotFound'   => '{0} nav validācijas noteikumu grupa.',
	'groupNotArray'   => '{0} noteikumu grupai ir jābūt masīvam.',
	'invalidTemplate' => '{0} nav derīga validācijas veidne.',

	// Rule Messages
	'alpha'                 => 'Lauka {field} vērtība drīkst saturēt tikai alfabētiskas rakstzīmes.',
	'alpha_dash'            => 'Lauka {field} vērtība drīkst saturēt tikai burtu, ciparu, apakšsvītras un domuzīmes rakstzīmes.',
	'alpha_numeric'         => 'Lauka {field} vērtība drīkst saturēt tikai burtu un ciparu rakstzīmes.',
	'alpha_numeric_punct'   => 'Lauka {field} vērtība drīkst saturēt tikai burtu un ciparu rakstzīmes, atstarpes un ~ ! # $ % & * - _ + = | : . rakstzīmes.',
	'alpha_numeric_space'   => 'Lauka {field} vērtība drīkst saturēt tikai burtu, ciparu un atstarpes rakstzīmes.',
	'alpha_space'           => 'Lauka {field} vērtība drīkst saturēt tikai alfabētiskas rakstzīmes un atstarpes.',
	'decimal'               => 'Lauka {field} vērtība drīkst saturēt tikai decimālskaitli.',
	'differs'               => 'Lauka {field} vērtībai ir jābūt savādākaai nekā {param} lauka vērtībai.',
	'equals'                => 'Lauka {field} vērtībai ir jābūt precīzi: {param}.',
	'exact_length'          => 'Lauka {field} vērtībai ir jābūt precīzi {param} rakstzīmju garumā.',
	'greater_than'          => 'Lauka {field} vērtībai ir jābūt ciparam lielākam par {param}.',
	'greater_than_equal_to' => 'Lauka {field} vērtībai ir jābūt ciparam vienādam vai lielākam par {param}.',
	'hex'                   => 'Lauka {field} vērtībai drīkst saturēt tikai heksadecimālas rakstzīmes.',
	'in_list'               => 'Lauka {field} vērtībai ir jābūt vienai no: {param}.',
	'integer'               => 'Lauka {field} vērtība drīkst saturēt tikai veselu skaitli.',
	'is_natural'            => 'Lauka {field} vērtība drīkst saturēt tikai ciparus.',
	'is_natural_no_zero'    => 'Lauka {field} vērtība drīkst saturēt tikai ciparus un ir jābūt lielākai par nulli.',
	'is_not_unique'         => 'Lauka {field} vērtība drīkst saturēt tikai iepriekšējo vērtību no datu bāzes.',
	'is_unique'             => 'Lauka {field} vērtība drīkst saturēt tikai unikālu vērtību.',
	'less_than'             => 'Lauka {field} vērtībai ir jābūt ciparam mazākam par {param}.',
	'less_than_equal_to'    => 'Lauka {field} vērtībai ir jābūt ciparam vienādam vai mazākam par {param}.',
	'matches'               => 'Lauka {field} vērtība nesakrīt ar {param} lauka vērtību.',
	'max_length'            => 'Lauka {field} vērtība nedrīkst būt garāka par {param} rakstzīmēm.',
	'min_length'            => 'Lauka {field} vērtībai ir jābūt vismaz {param} rakstzīmju garumā.',
	'not_equals'            => 'Lauka {field} vērtība nedrīkst būt: {param}.',
	'not_in_list'           => 'Lauka {field} vērtība nedrīkst būt viena no: {param}.',
	'numeric'               => 'Lauka {field} vērtībai ir jāsatur tikai cipari.',
	'regex_match'           => 'Lauka {field} vērtība nav pareizā formātā.',
	'required'              => 'Lauka {field} vērtība ir obligāta.',
	'required_with'         => 'Lauka {field} vērtība ir obligāta, ja {param} lauka vērtība ir norādīta.',
	'required_without'      => 'Lauka {field} vērtība ir obligāta, ja {param} lauka vērtība nav norādīta.',
	'string'                => 'Lauka {field} vērtībai ir jābūt virknei.',
	'timezone'              => 'Lauka {field} vērtībai ir jābūt laika zonai.',
	'valid_base64'          => 'Lauka {field} vērtībai ir jābūt `base64` virknei.',
	'valid_email'           => 'Lauka {field} vērtībai ir jābūt e-pasta adresei.',
	'valid_emails'          => 'Lauka {field} vērtībai ir jābūt visām e-pasta adresēm.',
	'valid_ip'              => 'Lauka {field} vērtībai ir jābūt IP adresei.',
	'valid_url'             => 'Lauka {field} vērtībai ir jābūt URL adresei.',
	'valid_date'            => 'Lauka {field} vērtībai ir jābūt datumam.',

	// Credit Cards
	'valid_cc_num' => 'Lauka {field} vērtība nav derīgs bankas kartes numurs.',

	// Files
	'uploaded' => 'Lauka {field} vērtība nav augšupielādēts fails.',
	'max_size' => 'Lauka {field} vērtība ir pārāk liels faila izmērs.',
	'is_image' => 'Lauka {field} vērtība nav augšupielādēts attēls.',
	'mime_in'  => 'Lauka {field} vērtība nav derīgs `mime` tips.',
	'ext_in'   => 'Lauka {field} vērtība nesatur derīgu faila paplašinājumu.',
	'max_dims' => 'Lauka {field} vērtība vai nu nav attēls vai tā izmērs ir pārāks plats vai garš.',
];
