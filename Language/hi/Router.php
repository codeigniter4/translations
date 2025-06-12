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
    'invalidParameter'         => 'एक पैरामीटर अपेक्षित प्रकार से मेल नहीं खाता।', // 'A parameter does not match the expected type.'
    'missingDefaultRoute'      => 'यह निर्धारित करने में असमर्थ कि क्या प्रदर्शित किया जाना चाहिए। रूटिंग फ़ाइल में एक डिफ़ॉल्ट रूट निर्दिष्ट नहीं किया गया है।', // 'Unable to determine what should be displayed. A default route has not been specified in the routing file.'
    'invalidDynamicController' => 'सुरक्षा कारणों से एक गतिशील कंट्रोलर की अनुमति नहीं है। रूट हैंडलर: "{0}"', // 'A dynamic controller is not allowed for security reasons. Route handler: "{0}"'
    'invalidControllerName'    => 'नेमस्पेस डीलिमिटर एक बैकस्लैश (\) है, न कि एक स्लैश (/)। रूट हैंडलर: "{0}"', // 'The namespace delimiter is a backslash (\), not a slash (/). Route handler: "{0}"'
];
