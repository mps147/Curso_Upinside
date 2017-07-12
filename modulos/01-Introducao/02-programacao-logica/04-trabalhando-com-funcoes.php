<?php

header('Content-Type: text/html; charset=utf-8');

function Tabuada() {
  echo "<b>Tabuado do 5: </b><br>";
  for ($x = 1; $x <= 10; $x++):
    echo "{$x} x 5 = " . $x * 5 . "<br/>";
  endfor;
  echo "<hr>";
}

echo Tabuada();

function minhaTabuada($Numero) {
  echo "<b>Tabuado do $Numero: </b><br>";
  for ($x = 1; $x <= 10; $x++):
    echo "{$x} x {$Numero} = " . $x * $Numero . "<br/>";
  endfor;
  echo "<hr>";
}

echo minhaTabuada(4);