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
    'invalidEvent'                     => '"{0}" என்பது செல்லுபடியாகும் model நிகழ்வு callback அல்ல.', // '"{0}" is not a valid Model Event callback.',
    'invalidArgument'                  => 'நீங்கள் சரியான "{0}" ஐ வழங்க வேண்டும்.', // 'You must provide a valid "{0}".',
    'invalidAllowedFields'             => '"{0}" மாதிரிக்கு அனுமதிக்கப்பட்ட புலங்கள் குறிப்பிடப்பட வேண்டும்', // 'Allowed fields must be specified for model: "{0}"',
    'emptyDataset'                     => '{0}க்கான தரவு எதுவும் இல்லை.', // 'There is no data to {0}.',
    'emptyPrimaryKey'                  => '{0} ஐ உருவாக்க முயற்சிக்கும்போது முதன்மை விசை (primary key) எதுவும் வரையறுக்கப்படவில்லை.', // 'There is no primary key defined when trying to make {0}.',
    'failGetFieldData'                 => 'தரவுத்தளத்திலிருந்து புலத் தரவைப் பெறுவதில் தோல்வி.', // 'Failed to get field data from database.',
    'failGetIndexData'                 => 'தரவுத்தளத்திலிருந்து குறியீட்டுத் தரவைப் பெறுவதில் தோல்வி.', // 'Failed to get index data from database.',
    'failGetForeignKeyData'            => 'தரவுத்தளத்திலிருந்து வெளிநாட்டு முக்கிய தரவைப் பெறுவதில் (foreign key data) தோல்வி.', // 'Failed to get foreign key data from database.',
    'parseStringFail'                  => 'முக்கிய சரத்தை பாகுபடுத்த முடியவில்லை.', // 'Parsing key string failed.',
    'featureUnavailable'               => 'நீங்கள் பயன்படுத்தும் தரவுத்தளத்தில் இந்த அம்சம் இல்லை.', // 'This feature is not available for the database you are using.',
    'tableNotFound'                    => 'தற்போதைய தரவுத்தளத்தில் "{0}" அட்டவணை காணப்படவில்லை.', // 'Table "{0}" was not found in the current database.',
    'noPrimaryKey'                     => '"{0}" மாதிரி வகுப்பு (model class) முதன்மை விசையைக் (primary key) குறிப்பிடவில்லை.', // '"{0}" model class does not specify a Primary Key.',
    'noDateFormat'                     => '"{0}" மாதிரி வகுப்பில் சரியான தேதி வடிவம் இல்லை.', // '"{0}" model class does not have a valid dateFormat.',
    'fieldNotExists'                   => 'புலம் "{0}" கிடைக்கவில்லை.', // 'Field "{0}" not found.',
    'forEmptyInputGiven'               => '"{0}" புலத்திற்கு வெற்று அறிக்கை கொடுக்கப்பட்டுள்ளது.', // 'Empty statement is given for the field "{0}"',
    'forFindColumnHaveMultipleColumns' => 'நெடுவரிசையின் பெயரில் ஒற்றை நெடுவரிசை மட்டுமே அனுமதிக்கப்படுகிறது.', // 'Only single column allowed in Column name.',
    'methodNotAvailable'               => 'நீங்கள் "{0}" இல் "{1}" ஐப் பயன்படுத்த முடியாது. இது Query Builder Class இன் ஒரு முறை (method).', // 'You cannot use "{1}" in "{0}". This is a method of the Query Builder Class.',
];
