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
    'mustBeArray'          => '이메일 유효성 검사 방법은 배열로 전달되어야합니다.', // 'The email validation method must be passed an array.'
    'invalidAddress'       => '유효하지 않은 이메일 주소: "{0}"', // 'Invalid email address: "{0}"'
    'attachmentMissing'    => '다음 이메일 첨부 파일을 찾을 수 없습니다. "{0}"', // 'Unable to locate the following email attachment: "{0}"'
    'attachmentUnreadable' => '이 첨부 파일을 열 수 없습니다: "{0}"', // 'Unable to open this attachment: "{0}"'
    'noFrom'               => '"From" 헤더가 없는 메일은 보낼 수 없습니다.', // 'Cannot send mail with no "From" header.'
    'noRecipients'         => '받는 사람을 포함해야합니다(To, Cc, or Bcc)', // 'You must include recipients: To, Cc, or Bcc'
    'sendFailurePHPMail'   => 'PHP mail()을 사용하여 이메일을 보낼 수 없습니다. 이 방법을 사용하여 메일을 보내도록 서버가 구성되지 않았을 수 있습니다.', // 'Unable to send email using PHP mail(). Your server might not be configured to send mail using this method.'
    'sendFailureSendmail'  => 'Sendmail을 사용하여 이메일을 보낼 수 없습니다. 이 방법을 사용하여 메일을 보내도록 서버가 구성되지 않았을 수 있습니다.', // 'Unable to send email using Sendmail. Your server might not be configured to send mail using this method.'
    'sendFailureSmtp'      => 'SMTP를 사용하여 이메일을 보낼 수 없습니다. 이 방법을 사용하여 메일을 보내도록 서버가 구성되지 않았을 수 있습니다.', // 'Unable to send email using SMTP. Your server might not be configured to send mail using this method.'
    'sent'                 => '{0} 프로토콜을 사용하여 메시지가 성공적으로 전송되었습니다.', // 'Your message has been successfully sent using the following protocol: {0}'
    'noSocket'             => 'Sendmail 소켓을 열 수 없습니다. 설정을 확인하십시오.', // 'Unable to open a socket to Sendmail. Please check settings.'
    'noHostname'           => 'SMTP 호스트 이름을 지정하지 않았습니다.', // 'You did not specify a SMTP hostname.'
    'SMTPError'            => '다음 SMTP 오류가 발생했습니다: {0}', // 'The following SMTP error was encountered: {0}'
    'noSMTPAuth'           => '오류: SMTP 사용자 이름과 비밀번호를 지정해야합니다.', // 'Error: You must assign an SMTP username and password.'
    'failedSMTPLogin'      => 'AUTH LOGIN 명령을 보내지 못했습니다. 오류: {0}', // 'Failed to send AUTH LOGIN command. Error: {0}'
    'SMTPAuthUsername'     => '사용자 이름을 인증하지 못했습니다. 오류: {0}', // 'Failed to authenticate username. Error: {0}'
    'SMTPAuthPassword'     => '비밀번호 인증에 실패했습니다. 오류: {0}', // 'Failed to authenticate password. Error: {0}'
    'SMTPDataFailure'      => '데이터를 보낼 수 없습니다: {0}', // 'Unable to send data: {0}'
    'exitStatus'           => '종료 상태 코드 : {0}', // 'Exit status code: {0}'
];
