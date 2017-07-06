<?php

header('Content-type: text/html; charset=utf-8');

//STR = string
$string = "Olá mundo";
var_dump($string);

//ARR = array
$Arr = array();
$Arr['nome'] = "Marcelo";
$Arr['idade'] = 21;
var_dump($Arr);

//BOOL = Boolean
$bool = FALSE;
$bool = TRUE;
$idade = 26;
$velho = ($idade > 40);

//INT = inteiro
$idade = 29;
var_dump($idade);

//Float = flutuante;
$flt = 0.8;
var_dump($flt);

//NUMÉRICAS
$numFlt = 0.8;
var_dump($numFlt);

echo "<hr>";

//OBJ = Objeto
$obj = new stdClass();
$obj->Nome = "Marcelo";
$obj->Idade = "21";
var_dump($obj);