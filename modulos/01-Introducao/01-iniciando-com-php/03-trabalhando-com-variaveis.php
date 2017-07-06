<?php

header('Content-type: text/html; charset=utf-8');

$meuNome = "Marcelo P. Santos";
$minha_empresa = "BinaryCode Web";

$idadeDoCliente = 29;
$idade_do_Cliente = 29;

echo "Meu nome é {$meuNome}. Eu trabalho na {$minha_empresa} e tenho {$idadeDoCliente} anos! <hr>";

//Variais de Referência!
$var = "empresa";
$$var = "BinaryCode Web";
echo "Minha {$var} é a {$empresa} <hr>";

$teste = "compania";
$$teste = "INC OS";
echo "{$compania} <br/>";

$nome = "Marcos";
echo "{$nome}<br>";

$nome = "Marcelo";
echo "{$nome}<br>";

$nome .= " Pereira";
echo "{$nome}<br>";

$nome = $meuNome;
echo "{$nome}<br>";