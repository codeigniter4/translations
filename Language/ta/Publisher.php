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

// Publisher language settings
return [
    'collision'             => '"{1}" to "{2}"க்கு நகலெடுக்கும் போது வெளியீட்டாளர் எதிர்பாராத "{0}" ஐ எதிர்கொண்டார்.', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".',
    'destinationNotAllowed' => 'வெளியீட்டாளர் கோப்பகங்களின் அனுமதிக்கப்பட்ட பட்டியலில் சேருமிடம் இல்லை: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"',
    'fileNotAllowed'        => '"{1}" கான கட்டுபாட்டால் "{0}" தோல்வியடைகிறது: {2}', // '"{0}" fails the following restriction for "{1}": {2}',

    // Publish Command
    'publishMissing' => 'எல்லா பெயர்வெளிகளிலும் {0} இல் வெளியீட்டாளர் வகுப்புகள் எதுவும் கண்டறியப்படவில்லை.', // 'No Publisher classes detected in {0} across all namespaces.',
    'publishSuccess' => '"{0}" {1} கோப்பு(களை) "{2}"க்கு வெளியிட்டது.', // '"{0}" published {1} file(s) to "{2}".',
    'publishFailure' => '"{0}" ஆனது "{1}" இல் வெளியிட முடியாமல் தோல்வி அடைந்தது.', // '"{0}" failed to publish to "{1}".',
];
