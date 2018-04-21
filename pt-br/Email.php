<?php

return [
	'mustBeArray'          => 'O método de validação de email deve ser passado em uma array.',
	'invalidAddress'       => 'Endereço de email inválido: {0, string}',
	'attachmentMissing'    => 'Não é possível localizar o seguinte anexo de email: {0, string}',
	'attachmentUnreadable' => 'Não é possível abrir este anexo: {0, string}',
	'noFrom'               => 'Não é possível enviar email sem o cabeçalho "From".',
	'noRecipients'         => 'Você deve incluir destinatários: To, Cc, ou Bcc',
	'sendFailurePHPMail'   => 'Não é possível enviar e-mail usando o PHP mail(). Seu servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sendFailureSendmail'  => 'Não é possível enviar e-mail usando o PHP Sendmail. Seu servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sendFailureSmtp'      => 'Não é possível enviar e-mail usando o PHP SMTP. Seu servidor pode não estar configurado para enviar e-mails usando esse método.',
	'sent'                 => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0, string}',
	'noSocket'             => 'Não é possível abrir um socket para o Sendmail. Por favor, verifique as configurações',
	'noHostname'           => 'Você não especificou um hostname SMTP.',
	'SMYPError'            => 'O seguinte erro SMTP foi encontrado: {0, string}',
	'noSMTPAuth'           => 'Erro: você deve atribuir um nome de usuário e senha SMTP.',
	'failedSMTPLogin'      => 'Falha ao enviar o comando AUTH LOGIN. Erro: {0, string}',
	'SMTPAuthUsername'     => 'Falha ao autenticar o nome de usuário. Erro: {0, string}',
	'SMTPAuthPassword'     => 'Falha ao autenticar a senha. Erro: {0, string}',
	'SMTPDataFailure'      => 'Não é possível enviar dados: {0, string}',
	'exitStatus'           => 'Código de status de saída: {0, string}',
];
