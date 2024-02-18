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
    'mustBeArray'          => 'O método de validación do email débese pasar nun array.',
    'invalidAddress'       => 'Dirección de email non válida: {0}',
    'attachmentMissing'    => 'Non se puido localizar o adxunto: {0}',
    'attachmentUnreadable' => 'Non se puido abrir o adxunto: {0}',
    'noFrom'               => 'Non se pode enviar un email sen cabeceira "Para".',
    'noRecipients'         => 'Débense incluír destinatarios: Para, Cc, or Bcc',
    'sendFailurePHPMail'   => 'Incapaz de enviar email usando PHP mail(). O servidor pode non estar configurado para enviar correos usando este método.',
    'sendFailureSendmail'  => 'Incapaz de enviar email usando PHP Sendmail. O servidor pode non estar configurado para enviar correos usando este método.',
    'sendFailureSmtp'      => 'Incapaz de enviar email usando PHP SMTP. O servidor pode non estar configurado para enviar correos usando este método.',
    'sent'                 => 'A mensaxe envióuse correctamente utilizando o seguinte protocolo: {0}',
    'noSocket'             => 'Incapaz de abrir un socket a Sendmail. Comproba a configuración.',
    'noHostname'           => 'Non se especificou un nome de host SMTP.',
    'SMTPError'            => 'Atopáronse os seguintes erros SMTP: {0}',
    'noSMTPAuth'           => 'Erro: Debe especificar un usuario e un contrasinal SMTP.',
    'failedSMTPLogin'      => 'Fallou o envío do comando AUTH LOGIN. Erro: {0}',
    'SMTPAuthUsername'     => 'Fallou a autentificación do usuario. Erro: {0}',
    'SMTPAuthPassword'     => 'Fallou a autentificación do contrasinal. Erro: {0}',
    'SMTPDataFailure'      => 'Incapaz de enviar datos: {0}',
    'exitStatus'           => 'Código de estado de saída: {0}',
];
