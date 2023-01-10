<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
    'mustBeArray'          => 'メール検証メソッドには配列を渡す必要があります。', // 'The email validation method must be passed an array.'
    'invalidAddress'       => '無効なメールアドレス: "{0}"', // 'Invalid email address: "{0}"'
    'attachmentMissing'    => '次のメールの添付ファイルを見つけることができません: "{0}"', // 'Unable to locate the following email attachment: "{0}"'
    'attachmentUnreadable' => 'この添付ファイルを開くことができません: "{0}"', // 'Unable to open this attachment: "{0}"'
    'noFrom'               => '"From" ヘッダの無いメールは送信できません。', // 'Cannot send mail with no "From" header.'
    'noRecipients'         => 'To、Cc、またはBccを受信者に含める必要があります。', // 'You must include recipients: To, Cc, or Bcc'
    'sendFailurePHPMail'   => 'PHP関数 mail() でメールが送信できません。この方法でメールを送信するようにサーバーが設定されていない可能性があります。', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.'
    'sendFailureSendmail'  => 'Sendmailでメールが送信できません。この方法でメールを送信するようにサーバーが設定されていない可能性があります。', // 'Unable to send email using Sendmail. Your server might not be configured to send mail using this method.'
    'sendFailureSmtp'      => 'SMTPでメールが送信できません。この方法でメールを送信するようにサーバーが設定されていない可能性があります。', // 'Unable to send email using SMTP. Your server might not be configured to send mail using this method.'
    'sent'                 => 'あなたのメッセージは、以下のプロトコルを使用して正常に送信されました: {0}', // 'Your message has been successfully sent using the following protocol: {0}'
    'noSocket'             => 'Sendmailへのソケットが開けません。設定を確認してください。', // 'Unable to open a socket to Sendmail. Please check settings.'
    'noHostname'           => 'SMTPホスト名を指定していません。', // 'You did not specify a SMTP hostname.'
    'SMTPError'            => '以下のSMTPエラーが発生しました: {0}', // 'The following SMTP error was encountered: {0}'
    'noSMTPAuth'           => 'エラー: SMTPのユーザー名とパスワードを設定する必要があります。', // 'Error: You must assign an SMTP username and password.'
    'failedSMTPLogin'      => 'AUTH LOGINコマンドの送信に失敗しました。エラー: {0}', // 'Failed to send AUTH LOGIN command. Error: {0}'
    'SMTPAuthUsername'     => 'ユーザー名の認証に失敗しました。エラー: {0}', // 'Failed to authenticate username. Error: {0}'
    'SMTPAuthPassword'     => 'パスワードの認証に失敗しました。エラー: {0}', // 'Failed to authenticate password. Error: {0}'
    'SMTPDataFailure'      => 'データの送信ができません: {0}', // 'Unable to send data: {0}'
    'exitStatus'           => '終了ステータスコード: {0}', // 'Exit status code: {0}'
];
