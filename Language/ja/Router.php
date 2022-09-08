<?php

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
    'invalidParameter'         => 'パラメータが予想される型と一致しません。', // 'A parameter does not match the expected type.'
    'missingDefaultRoute'      => '何を表示するか決定できません。デフォルトルートがルーティングファイルで指定されていません。', // 'Unable to determine what should be displayed. A default route has not been specified in the routing file.'
    'invalidDynamicController' => 'セキュリティ上の理由から、動的なコントローラは許可されていません。ルートハンドラ: "{0}"', // 'A dynamic controller is not allowed for security reasons. Route handler: "{0}"'
    'invalidControllerName'    => '名前空間の区切り文字はバックスラッシュ「\」であり、スラッシュ「/」ではありません。ルートハンドラ: "{0}"', // 'The namespace delimiter is a backslash (\), not a slash (/). Route handler: "{0}"'
];
