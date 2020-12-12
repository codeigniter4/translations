<?php

/**
 * This file is part of the CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Email language settings
return [
	'mustBeArray'          => 'O método de validação de email deve receber uma array.',
	'invalidAddress'       => 'Endereço de e-mail inválido: {0}',
	'attachmentMissing'    => 'Não foi possível localizar o seguinte anexo de e-mail: {0}',
	'attachmentUnreadable' => 'Não foi possível abrir este anexo: {0}',
	'noFrom'               => 'Não é possível enviar email sem o cabeçalho "From".',
	'noRecipients'         => 'Você deve incluir destinatários: To, Cc, ou Bcc',
	'sendFailurePHPMail'   => 'Não foi possível enviar e-mail usando PHP mail(). Seu servidor pode não estar configurado para enviar e-mail usando este método.',
	'sendFailureSendmail'  => 'Não foi possível enviar e-mail usando PHP Sendmail. Seu servidor pode não estar configurado para enviar e-mail usando este método.',
	'sendFailureSmtp'      => 'Não foi possível enviar e-mail usando PHP SMTP. Seu servidor pode não estar configurado para enviar e-mail usando este método.',
	'sent'                 => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0}',
	'noSocket'             => 'Não foi possível abrir um soquete para o Sendmail. Por favor, verifique as configurações.',
	'noHostname'           => 'Você não especificou um hostname SMTP.',
	'SMTPError'            => 'O seguinte erro SMTP foi encontrado: {0}',
	'noSMTPAuth'           => 'Erro: você deve atribuir um nome de usuário e senha SMTP.',
	'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0}',
	'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuário. Erro: {0}',
	'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: {0}',
	'SMTPDataFailure'      => 'Não foi possível enviar dados: {0}',
	'exitStatus'           => 'Código de status de saída: {0}',
];
