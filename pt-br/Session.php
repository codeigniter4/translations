<?php

return [
	'missingDatabaseTable'   => '`sessionSavePath` deve ter o nome da tabela para o Database Session Handler funcionar.',
	'invalidSavePath'        => "Sessão: O save path '{0}' configurado não é um diretório, não existe ou não pode ser criado.",
	'writeProtectedSavePath' => "Sessão: O save path '{0}' configurado não é gravável pelo processo do PHP.",
	'emptySavePath'          => 'Sessão: Nenhum save path configurado.',
	'invalidSavePathFormat'  => 'Sessão: Formato do Redis save path é inválido: {0}',
];
