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
    'mustBeArray'          => 'O método de validação de e-mail deve receber uma array.', // 'The email validation method must be passed an array.',
    'invalidAddress'       => 'Endereço de e-mail inválido: "{0}"', // Invalid email address: "{0}"',
    'attachmentMissing'    => 'Não foi possível localizar o seguinte anexo de e-mail: "{0}"', // 'Unable to locate the following email attachment: "{0}"'
    'attachmentUnreadable' => 'Não foi possível abrir este anexo: "{0}"', // 'Unable to open this attachment: "{0}"',
    'noFrom'               => 'Não é possível enviar e-mail sem o cabeçalho "From".', // 'Cannot send mail with no "From" header.',
    'noRecipients'         => 'Você deve incluir destinatários: To, Cc, ou Bcc', // 'You must include recipients: To, Cc, or Bcc',
    'sendFailurePHPMail'   => 'Não foi possível enviar e-mail usando PHP mail(). Seu servidor pode não estar configurado para enviar e-mail usando este método.', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.',
    'sendFailureSendmail'  => 'Não foi possível enviar e-mail usando PHP Sendmail. Seu servidor pode não estar configurado para enviar e-mail usando este método.', // 'Unable to send email using Sendmail. Your server might not be configured to send mail using this method.',
    'sendFailureSmtp'      => 'Não foi possível enviar e-mail usando PHP SMTP. Seu servidor pode não estar configurado para enviar e-mail usando este método.', // 'Unable to send email using SMTP. Your server might not be configured to send mail using this method.',
    'sent'                 => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: "{0}"', // 'Your message has been successfully sent using the following protocol: {0}',
    'noSocket'             => 'Não foi possível abrir um soquete para o Sendmail. Por favor, verifique as configurações.', // 'Unable to open a socket to Sendmail. Please check settings.',
    'noHostname'           => 'Você não especificou um hostname SMTP.', // 'You did not specify a SMTP hostname.',
    'SMTPError'            => 'O seguinte erro SMTP foi encontrado: "{0}"', // 'The following SMTP error was encountered: {0}',
    'noSMTPAuth'           => 'Erro: você deve atribuir um nome de usuário e senha SMTP.', // 'Error: You must assign an SMTP username and password.',
    'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: "{0}"', // 'Failed to send AUTH LOGIN command. Error: {0}',
    'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuário. Erro: "{0}"', // 'Failed to authenticate username. Error: {0}',
    'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: "{0}"', // Failed to authenticate password. Error: {0}',
    'SMTPDataFailure'      => 'Não foi possível enviar dados: "{0}"', // 'Unable to send data: {0}',
    'exitStatus'           => 'Código de status de saída: "{0}"', // 'Exit status code: {0}',
];
