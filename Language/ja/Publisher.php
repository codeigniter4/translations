<?php

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
    'collision'             => '"{1}" を "{2}" にコピーする際に、Publisherが予期しない "{0}" が発生しました。', // 'Publisher encountered an unexpected "{0}" while copying "{1}" to "{2}".'
    'destinationNotAllowed' => '送信先がPublisherのディレクトリ許可リストにありません: "{0}"', // 'Destination is not on the allowed list of Publisher directories: "{0}"'
    'fileNotAllowed'        => '"{0}" は "{1}" に対する次の制限で失敗しました: {2}', // '"{0}" fails the following restriction for "{1}": {2}'

    // Publish Command
    'publishMissing' => 'すべての名前空間において、{0} の中にPublisherクラスは検出されませんでした。', // 'No Publisher classes detected in {0} across all namespaces.'
    'publishSuccess' => '"{0}" は "{2}" に {1} ファイルを公開しました。', // '"{0}" published {1} file(s) to "{2}".'
    'publishFailure' => '"{0}" が "{1}" への公開に失敗しました。', // '"{0}" failed to publish to "{1}".'
];
