<?php

header('Content-type: text/html; charset=utf-8');

//CONSTANTE DE COMPILAÇÃO;

CONST DevName = "Marcelo Pereira";
CONST DevAge = 29;

echo "Meu nome é " . DevName . ". Eu tenho " . DevAge . "<hr>";

//CONSTANTE DEFINIDA EM TEMPO DE COMPILAÇÃO
define("DB_NAME", "_wsphp");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");

@$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if($db):
  echo "Conectamos ao banco de dados";
else:
  echo "Não conectamos ao banco de dados";
endif;