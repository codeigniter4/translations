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

// Router language settings
return [
    'invalidParameter'         => 'ஒரு அளவுரு எதிர்பார்த்த வகையுடன் பொருந்தவில்லை.', // 'A parameter does not match the expected type.',
    'missingDefaultRoute'      => 'எதைக் காட்ட வேண்டும் என்பதைத் தீர்மானிக்க முடியவில்லை. ரூட்டிங் கோப்பில் இயல்புநிலை வழி குறிப்பிடப்படவில்லை.', // 'Unable to determine what should be displayed. A default route has not been specified in the routing file.',
    'invalidDynamicController' => 'பாதுகாப்பு காரணங்களுக்காக டைனமிக் கன்ட்ரோலர் அனுமதிக்கப்படவில்லை. ரூட் ஹேண்லர்: "{0}"', // 'A dynamic controller is not allowed for security reasons. Route handler: "{0}"',
    'invalidControllerName'    => 'நேம்ஸ்பேஸ் டிலிமிட்டர் ஆனது பின்சாய்வு (\) கொண்டது, மாற்றாக ஒரு சாய்வு (/) அல்ல. ரூட் ஹேண்லர்: "{0}"', // 'The namespace delimiter is a backslash (\), not a slash (/). Route handler: "{0}"',
];
