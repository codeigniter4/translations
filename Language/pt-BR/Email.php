<?php

return [
	'mustBeArray'          => 'O método de validação de email deve ser passado em uma array.',
	'invalidAddress'       => 'Endereço de email inválido: {0}',
	'attachmentMissing'    => 'Não é possível localizar o seguinte anexo de email: {0, string}',
	'attachmentUnreadable' => 'Não é possível abrir este anexo: {0}',
	'noFrom'               => 'Não é possível enviar email sem o cabeçalho "From".',
	'noRecipients'         => 'Você deve incluir destinatários: To, Cc, ou Bcc',
	'sendFailurePHPMail'   => 'Não é possível enviar e-mail usando o PHP mail(). Seu servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sendFailureSendmail'  => 'Não é possível enviar e-mail usando o PHP Sendmail. Seu servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sendFailureSmtp'      => 'Não é possível enviar e-mail usando o PHP SMTP. Seu servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sent'                 => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0, string}',
	'noSocket'             => 'Não é possível abrir um socket para o Sendmail. Por favor, verifique as configurações',
	'noHostname'           => 'Você não especificou um hostname SMTP.',
	'SMTPError'            => 'O seguinte erro SMTP foi encontrado: {0}',
	'noSMTPAuth'           => 'Erro: você deve atribuir um nome de usuário e senha SMTP.',
	'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0}',
	'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuário. Erro: {0}',
	'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: {0}',
	'SMTPDataFailure'      => 'Não é possível enviar dados: {0}',
	'exitStatus'           => 'Código de status de saída: {0}',
];
