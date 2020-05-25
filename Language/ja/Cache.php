<?php
/**
 * Cache language strings.
 *
 * @package    CodeIgniter
 * @author     Shoji Ogura
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 4.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

return [
   'unableToWrite'   => '{0} へキャッシュの書き込みができません。', //Cache unable to write to {0}
   'invalidHandlers' => 'キャッシュコンフィグは $validHandlers の配列が必要です。', //Cache config must have an array of $validHandlers.
   'noBackup'        => 'キャッシュコンフィグはハンドラとバックアップ・ハンドラが必要です。', //Cache config must have a handler and backupHandler set.
   'handlerNotFound' => 'キャッシュコンフィグに無効なハンドラまたはバックアップ・ハンドラが指定されています。', //Cache config has an invalid handler or backup handler specified.
];
