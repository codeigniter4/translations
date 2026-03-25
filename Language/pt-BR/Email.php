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

// Configurações de linguagem de Email
return [
    'mustBeArray'           => 'O método de validação de e-mail deve receber um array.',
    'invalidAddress'        => 'Endereço de e-mail inválido: "{0}"',
    'attachmentMissing'     => 'Não foi possível localizar o seguinte anexo de e-mail: "{0}"',
    'attachmentUnreadable'  => 'Não foi possível abrir este anexo: "{0}"',
    'noFrom'                => 'Não é possível enviar e-mail sem o cabeçalho "From".',
    'noRecipients'          => 'Você deve incluir destinatários: Para (To), Cc ou Cco (Bcc)',
    'sendFailurePHPMail'    => 'Não foi possível enviar e-mail usando PHP mail(). Seu servidor pode não estar configurado para enviar e-mails usando este método.',
    'sendFailureSendmail'   => 'Não foi possível enviar e-mail usando Sendmail. Seu servidor pode não estar configurado para enviar e-mails usando este método.',
    'sendFailureSmtp'       => 'Não foi possível enviar e-mail usando SMTP. Seu servidor pode não estar configurado para enviar e-mails usando este método.',
    'sent'                  => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0}',
    'noSocket'              => 'Não foi possível abrir um socket para o Sendmail. Verifique as configurações.',
    'noHostname'            => 'Você não especificou um hostname SMTP.',
    'SMTPError'             => 'O seguinte erro SMTP foi encontrado: {0}',
    'noSMTPAuth'            => 'Erro: Você deve atribuir um usuário e senha SMTP.',
    'invalidSMTPAuthMethod' => 'Erro: O método de autorização SMTP "{0}" não é suportado pelo CodeIgniter; defina o método como "login" ou "plain".',
    'failureSMTPAuthMethod' => 'Não foi possível iniciar o comando AUTH. Seu servidor pode não estar configurado para usar o método de autenticação AUTH {0}.',
    'SMTPAuthCredentials'   => 'Falha ao autenticar as credenciais do usuário. Erro: {0}',
    'SMTPAuthUsername'      => 'Falha ao autenticar o nome de usuário. Erro: {0}',
    'SMTPAuthPassword'      => 'Falha ao autenticar a senha. Erro: {0}',
    'SMTPDataFailure'       => 'Não foi possível enviar os dados: {0}',
    'exitStatus'            => 'Código de status de saída: {0}',
    // @deprecated
    'failedSMTPLogin' => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0}',
];
