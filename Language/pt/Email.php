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
    'mustBeArray'          => 'O método de validação de email deve ser passado em array.',
    'invalidAddress'       => 'Endereço de E-mail inválido: {0}',
    'attachmentMissing'    => 'Não é possível encontrar o seguinte anexo de email: {0}',
    'attachmentUnreadable' => 'Não é possível abrir este anexo: {0}',
    'noFrom'               => 'Não é possível enviar email sem o cabeçalho "De".',
    'noRecipients'         => 'Deve incluir destinatários: Para, Cc ou Cco',
    'sendFailurePHPMail'   => 'Não é possível enviar e-mail usando o PHP mail(). O servidor pode não estar configurado para enviar e-mails usando esse método.',
    'sendFailureSendmail'  => 'Não é possível enviar e-mail usando o PHP Sendmail. O servidor pode não estar configurado para enviar e-mails usando esse método.',
    'sendFailureSmtp'      => 'Não é possível enviar e-mail usando o PHP SMTP. O servidor pode não estar configurado para enviar e-mails usando esse método.',
    'sent'                 => 'A sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0}',
    'noSocket'             => 'Não foi possível abrir um socket para o Sendmail. Por favor, verifique as configurações.',
    'noHostname'           => 'Não especificou um nome de host SMTP.',
    'SMTPError'            => 'O seguinte erro SMTP foi encontrado: {0}',
    'noSMTPAuth'           => 'Erro: deve atribuir um nome de utilizador e senha SMTP.',
    'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0}',
    'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuário. Erro: {0}',
    'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: {0}',
    'SMTPDataFailure'      => 'Não é possível enviar dados: {0}',
    'exitStatus'           => 'Saída do código de status: {0}',
];
