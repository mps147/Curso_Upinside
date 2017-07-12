<?php

header('Content-Type: text/html; charset=utf-8');

$nome = "Marcelo Pereira";

echo "strtolower() - ". strtolower($nome) . "<hr/>";
echo "strtoupper() - ". strtoupper($nome) . "<hr/>";
echo "ucwords() - ". ucwords($nome) . "<hr/>";
echo "ucfirst(strtolower()) - ". ucfirst(strtolower($nome)) . "<hr/>";


//TRATAR UMA IMAGEM
$img = "NOME DA IMAGEM.JPG";
echo "{$img} <br/>";
$imagem = strtolower(str_replace(' ', '-', $img));
echo "strtolower(str_replace(' ', '-', nome_da_imagem)): {$imagem}<hr/>";

//TRANTANDO NÚMEROS
for($i = 1; $i <= 10; $i++):
  echo str_pad($i, 2, 0, STR_PAD_LEFT). "<br/>";
endfor;
echo "<hr/>";

$escreva = "DESCULPA, ";
echo str_repeat($escreva, 100);
echo "<hr/>";

//O PRIMEIRO
$novoNome = "Marcelo Pereira Santos";
echo substr($novoNome, 0, 7). "<br/>";

echo substr($novoNome, 0, strpos($novoNome, ' ')). '<br/>';

//PEGANDO NOME E SOBRE NOME
echo substr($novoNome, strrpos($novoNome, ' '))."<br/>";

//PEGANDO EXTENÇÃO DE UMA IMAGEM
$ext = substr($img, strrpos($img, ".") + 1);
echo "<hr> {$ext}";

