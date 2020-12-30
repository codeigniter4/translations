<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Database language settings
return [
	'invalidEvent'                     => '{0} වලංගු Model Event callback එකක් නොවේ.', // {0} is not a valid Model Event callback.
	'invalidArgument'                  => 'ඔබ වලංගු {0} ලබා දිය යුතුය.', // You must provide a valid {0}.
	'invalidAllowedFields'             => 'Model: {0} සඳහා අවසර ලත් fields specify කළ යුතුය', // Allowed fields must be specified for model: {0}
	'emptyDataset'                     => '{0} ට දත්ත නොමැත.', // There is no data to {0}.
	'emptyPrimaryKey'                  => '{0} සෑදීමට උත්සාහ කිරීමේදී primary key එකක් අර්ථ දක්වා නොමැත.', // There is no primary key defined when trying to make {0}.
	'failGetFieldData'                 => 'Database එකෙන් field data ලබා ගැනීමට අපොහොසත් විය.', // Failed to get field data from database.
	'failGetIndexData'                 => 'Database එකෙන් index data ලබා ගැනීමට අපොහොසත් විය.', // Failed to get index data from database.
	'failGetForeignKeyData'            => 'Database එකෙන් foreign key data ලබා ගැනීමට අපොහොසත් විය.', // Failed to get foreign key data from database.
	'parseStringFail'                  => 'Key string parse කිරීම අසාර්ථක විය.', // Parsing key string failed.
	'featureUnavailable'               => 'ඔබ භාවිතා කරන database එක සඳහා මෙම අංගය නොමැත.', // This feature is not available for the database you are using.
	'tableNotFound'                    => 'වත්මන් database එකේ `{0}` ටේබල් එක හමු නොවීය.', // Table `{0}` was not found in the current database.
	'noPrimaryKey'                     => '`{0}` model class එකේ Primary Key එකක් සඳහන් නොකරයි.', // `{0}` model class does not specify a Primary Key.
	'noDateFormat'                     => '`{0}` model class එකට වලංගු dateFormat එකක් නොමැත.', // `{0}` model class does not have a valid dateFormat.
	'fieldNotExists'                   => 'Field `{0}` හමු නොවීය.', // Field `{0}` not found.
	'forEmptyInputGiven'               => '`{0}` field එක සඳහා හිස් ප්‍රකාශයක් ලබා දී ඇත', // Empty statement is given for the field `{0}`
	'forFindColumnHaveMultipleColumns' => 'Column name එකෙන් අවසර දී ඇත්තේ single column එකකට පමණි.', // Only single column allowed in Column name.
];
