<?php

header('Content-Type: text/html; charset=utf-8');

//FUNÇÃO VÁLIDA E-MAIL
function EmailValidate($Email){
  if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
    return true;
  else:
    return false;
  endif;
}

$Nome = "Marcelo Pereira dos Santos";
$Email = "marcelo@gmail.com";

if(empty($Nome) || empty($Email)):
  echo "Ops: Informe Seu Nome e E-Mail";
elseif(!EmailValidate($Email)):
  echo "Ops: Informe um E-Mail válido";
else:
  $Users = [
      'cursos@upinside.com.br',
      'maria@upinside.com.br'
  ];
  if(in_array($Email, $Users)):
    echo "Ops!: Você já é cadastrado. Deseja logar? <a href='#'>Sim</a>";
  else:
    echo "Cadastro com sucesso!";
  endif;
endif;