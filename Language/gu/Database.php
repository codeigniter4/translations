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

// Database language settings
return [
    'invalidEvent'                     => '"{0}" એક માન્ય મોડેલ ઇવેન્ટ કોલબેક નથી.', // '"{0}" is not a valid Model Event callback.'
    'invalidArgument'                  => 'તમારે માન્ય "{0}" પ્રદાન કરવું આવશ્યક છે.', // 'You must provide a valid "{0}".'
    'invalidAllowedFields'             => 'મોડેલ "{0}" માટે માન્ય ફીલ્ડ્સ સ્પષ્ટ હોવા જોઈએ.', // 'Allowed fields must be specified for model: "{0}"'
    'emptyDataset'                     => '{0} કરવા માટે કોઈ ડેટા નથી.', // 'There is no data to {0}.'
    'emptyPrimaryKey'                  => '{0} બનાવવાનો પ્રયાસ કરતી વખતે કોઈ પ્રાથમિક કી વ્યાખ્યાયિત નથી.', // 'There is no primary key defined when trying to make {0}.'
    'failGetFieldData'                 => 'ડેટાબેઝમાંથી ફીલ્ડ ડેટા મેળવવામાં નિષ્ફળ.', // 'Failed to get field data from database.'
    'failGetIndexData'                 => 'ડેટાબેઝમાંથી ઇન્ડેક્સ ડેટા મેળવવામાં નિષ્ફળ.', // 'Failed to get index data from database.'
    'failGetForeignKeyData'            => 'ડેટાબેઝમાંથી ફોરેન કી ડેટા મેળવવામાં નિષ્ફળ.', // 'Failed to get foreign key data from database.'
    'parseStringFail'                  => 'કી સ્ટ્રિંગનું પાર્સિંગ નિષ્ફળ.', // 'Parsing key string failed.'
    'featureUnavailable'               => 'તમે જે ડેટાબેઝનો ઉપયોગ કરી રહ્યાં છો તેના માટે આ સુવિધા ઉપલબ્ધ નથી.', // 'This feature is not available for the database you are using.'
    'tableNotFound'                    => 'કોષ્ટક "{0}" વર્તમાન ડેટાબેઝમાં મળ્યું નથી.', // 'Table "{0}" was not found in the current database.'
    'noPrimaryKey'                     => '"{0}" મોડેલ ક્લાસ પ્રાથમિક કી સ્પષ્ટ કરતું નથી.', // '"{0}" model class does not specify a Primary Key.'
    'noDateFormat'                     => '"{0}" મોડેલ ક્લાસમાં માન્ય તારીખ ફોર્મેટ નથી.', // '"{0}" model class does not have a valid dateFormat.'
    'fieldNotExists'                   => 'ફીલ્ડ "{0}" મળ્યું નથી.', // 'Field "{0}" not found.'
    'forEmptyInputGiven'               => 'ફીલ્ડ "{0}" માટે ખાલી સ્ટેટમેન્ટ આપવામાં આવ્યું છે.', // 'Empty statement is given for the field "{0}"'
    'forFindColumnHaveMultipleColumns' => 'કોલમ નામમાં ફક્ત એક જ કોલમની મંજૂરી છે.', // 'Only single column allowed in Column name.'
    'methodNotAvailable'               => 'તમે "{0}" માં "{1}" નો ઉપયોગ કરી શકતા નથી. આ ક્વેરી બિલ્ડર ક્લાસની એક મેથડ છે.', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.'
];
