<?php

header('Content-type: text/html; charset=utf-8');

//ATRIBUIÇÃO
$var = 10;
$var += 5;
$var -= 10;
$var *= 10;
$var /= 5;

//ARITIMÉTICOS
$a = 10;
$b = 5;
$c = $a + $b;
$c = $a + $b * $b;
$c = ($a + $b) * $b;

//RELACIONAIS
$a = 5;
$b = "5";

/*
 *  ==
 *  !==
 *  <
 *  <=
 *  >
 *  >=
 *  === compara se as variaveis sao identicas, até mesmo o tipo delas
 *  !== não identicos
 */
if($a == $b):
  echo "A igual a B";
endif;

//LÓGICOS
/* && | AND
 * || | OR * 
 */