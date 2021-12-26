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
    'mustBeArray'          => '电子邮件验证方法必须传递一个数组。',
    'invalidAddress'       => '无效的电子邮件地址: {0}',
    'attachmentMissing'    => '无法找到以下电子邮件附件: {0}',
    'attachmentUnreadable' => '无法打开此附件: {0}',
    'noFrom'               => '无法发送没有 "From" 头的邮件。',
    'noRecipients'         => '你必须在以下邮件头中指明收件人: To, Cc, or Bcc',
    'sendFailurePHPMail'   => '无法使用PHP mail()发送邮件。你的服务器可能没有被配置为使用此方法发送邮件。',
    'sendFailureSendmail'  => '无法使用 PHP Sendmail 发送邮件。你的服务器可能没有被配置为使用这种方法发送邮件。',
    'sendFailureSmtp'      => '无法使用 PHP SMTP 发送邮件。你的服务器可能没有被配置为使用这种方法发送邮件。',
    'sent'                 => '您的信息已通过以下协议成功发送: {0}',
    'noSocket'             => '无法打开到Sendmail的套接字，请检查设置。',
    'noHostname'           => '你没有指定SMTP主机名。',
    'SMTPError'            => '遇到了以下SMTP错误: {0}',
    'noSMTPAuth'           => '错误: 你必须指定一个SMTP用户名和密码。',
    'failedSMTPLogin'      => '发送AUTH LOGIN命令失败。错误: {0}',
    'SMTPAuthUsername'     => '验证用户名失败。错误: {0}',
    'SMTPAuthPassword'     => '验证密码失败。错误: {0}',
    'SMTPDataFailure'      => '无法发送数据: {0}',
    'exitStatus'           => '退出状态码: {0}',
];
