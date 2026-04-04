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
    'invalidEvent'                     => '"{0}" हा वैध Model Event callback नाही.', // '"{0}" is not a valid Model Event callback.'
    'invalidArgument'                  => 'तुम्ही वैध "{0}" द्यायला हवा.', // 'You must provide a valid "{0}".'
    'invalidAllowedFields'             => 'मॉडेल "{0}" साठी allowed fields निर्दिष्ट करणे आवश्यक आहे.', // 'Allowed fields must be specified for model: "{0}"'
    'emptyDataset'                     => '{0} करण्यासाठी कोणताही data नाही.', // 'There is no data to {0}.'
    'emptyPrimaryKey'                  => '{0} तयार करताना कोणतीही primary key defined नाही.', // 'There is no primary key defined when trying to make {0}.'
    'failGetFieldData'                 => 'डेटाबेसमधून field data मिळवण्यात अयशस्वी.', // 'Failed to get field data from database.'
    'failGetIndexData'                 => 'डेटाबेसमधून index data मिळवण्यात अयशस्वी.', // 'Failed to get index data from database.'
    'failGetForeignKeyData'            => 'डेटाबेसमधून foreign key data मिळवण्यात अयशस्वी.', // 'Failed to get foreign key data from database.'
    'parseStringFail'                  => 'Key string parse करण्यात अयशस्वी.', // 'Parsing key string failed.'
    'featureUnavailable'               => 'तुम्ही वापरत असलेल्या डेटाबेससाठी ही सुविधा उपलब्ध नाही.', // 'This feature is not available for the database you are using.'
    'tableNotFound'                    => 'सध्याच्या डेटाबेसमध्ये "{0}" टेबल सापडले नाही.', // 'Table "{0}" was not found in the current database.'
    'noPrimaryKey'                     => '"{0}" model class मध्ये Primary Key दिलेली नाही.', // '"{0}" model class does not specify a Primary Key.'
    'noDateFormat'                     => '"{0}" model class मध्ये वैध dateFormat नाही.', // '"{0}" model class does not have a valid dateFormat.'
    'fieldNotExists'                   => 'Field "{0}" सापडले नाही.', // 'Field "{0}" not found.'
    'forEmptyInputGiven'               => 'Field "{0}" साठी रिकामी statement दिली आहे.', // 'Empty statement is given for the field "{0}"'
    'forFindColumnHaveMultipleColumns' => 'Column name मध्ये फक्त एकच column परवानगी आहे.', // 'Only single column allowed in Column name.'
    'methodNotAvailable'               => 'तुम्ही "{0}" मध्ये "{1}" वापरू शकत नाही. ही Query Builder Class ची method आहे.', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.'
];
