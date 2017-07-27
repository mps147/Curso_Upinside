<?php

header('Content-Type: text/html; charset=utf-8');

$Pessoa = array();
$Pessoa['nome'] = "Marcelo Pereira"; 
$Pessoa = array_pad($Pessoa, 5, NULL);

$Pessoa = array_filter($Pessoa);
$Pessoa = array_map('strip_tags', $Pessoa);
$Pessoa = array_map('trim', $Pessoa);

//ARRAY_PUSSH ADICIONA UM INDICE AO ARRAY
array_push($Pessoa, 21);

//ARRAY_POP DELETA O ULTIMO INDICE DO ARRAY
array_pop($Pessoa);

//ARRAY_UNSHIFT ADICIONA O ITEM AO PRIMEIRO INDICE
array_unshift($Pessoa, 21);

//ARRAY_SHIFT APAGA O INDICE
array_shift($Pessoa);

$Pessoa['idade'] = 21;

$Pessoa['job'] = "WebMaster";

$Pessoa = array_reverse($Pessoa);

$Empresa['empresa'] = "Binary Code";
$Empresa['atuacao'] = "Treinamento web";

$Casa['Cidade'] = "Campos do Jordao";

$Pessoa = array_merge($Pessoa, $Empresa, $Casa);

echo "<pre>";
var_dump($Pessoa);

//PEGAR SOMENTE OS INDICES DO ARRAY
var_dump(array_keys($Pessoa));
//PEGAR SOMENTE OS VALORES DO ARRAY
var_dump(array_values($Pessoa));
//PEGAR CERTO INDICE
var_dump(array_slice($Pessoa, 2, 2));
//CONTAR INDICES
var_dump('O array tem ' . count($Pessoa) . 'indices!');

//ORDERNAR ARRAY PELO VALOR
var_dump(asort($Pessoa));
var_dump(arsort($Pessoa));

//ORDERNAR ARRAY PELO INDICE
var_dump(ksort($Pessoa));
var_dump(krsort($Pessoa));

//TRANSFORMAR UM ARRAY DE ASSOCIACAO PARA UM INDICE RELACIONAL
sort($Pessoa);
rsort($Pessoa);

//TRANSFORMANDO UMA STRING EM UM ARRAY
$Nome = "Marcelo, Lucas, Andressa";
$Nome = explode(", ", $Nome);

var_dump($Nome);

//TRANSFORMANDO UM ARRAY EM UMA STRING 
$Nome = implode($Nome, ", ");
var_dump($Nome);