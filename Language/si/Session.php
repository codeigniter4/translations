<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Session language settings
return [
	'missingDatabaseTable'   => 'ඩේටබේස් සෙෂන් Handler එකට වැඩ කිරීමට `sessionSavePath` හි ටේබල් එකේ නම තිබීම අත්‍යවශ්‍ය වේ.', // `sessionSavePath` must have the table name for the Database Session Handler to work.
	'invalidSavePath'        => 'සෙෂන්: Configured save path "{0}" යන්න ඩිරෙක්ටරියක් නොවේ, නොපවතී හෝ නිර්මාණය කළ නොහැක.', // Session: Configured save path "{0}" is not a directory, does not exist or cannot be created.
	'writeProtectedSavePath' => 'සෙෂන්: Configured save path "{0}" ට PHP process මගින් ලිවිය නොහැක.', // Session: Configured save path "{0}" is not writable by the PHP process.
	'emptySavePath'          => 'සෙෂන්: save path එකක් configure කර නොමැත.', // Session: No save path configured.
	'invalidSavePathFormat'  => 'සෙෂන්: වැරදි Redis save path ආකාරයකි: {0}', // Session: Invalid Redis save path format: {0}
	'invalidSameSiteSetting' => 'සෙෂන්: SameSite setting හි අගය None, Lax, Strict හෝ blank string විය යුතුය. දී තිබෙන්නේ: {0}', // Session: The SameSite setting must be None, Lax, Strict, or a blank string. Given: {0}
];
