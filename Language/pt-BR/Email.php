<?php
/**
 * Email language strings.
 *
 * @package    CodeIgniter
 * @author     CodeIgniter Dev Team
 * @copyright  2014-2019 British Columbia Institute of Technology (https://bcit.ca/)
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link       https://codeigniter.com
 * @since      Version 3.0.0
 * @filesource
 *
 * @codeCoverageIgnore
 */

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
   'sent'                 => 'Sua mensagem foi enviada com sucesso usando o seguinte protocolo: {0, string}',
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
