<?php

header('Content-Type: text/html; charset=utf-8');


//while: enquanto acontecer;
$i = 1;

while($i <= 10):
  echo "{$i} X 8 = " . $i * 8 ."<br/>";
  $i++;
endwhile;

echo "<hr/>";

//For = EXECUTE X VEZES
for($e = 1; $e <= 10; $e++):
  echo "{$e} X 8 = " . $e * 10 ."<br/>";
endfor;

echo "<hr/>";

//FOREACH: ARRAY
$Arr = ['WS PHP', 'WS HTML 5', 'WS RWD', 'WS PP'];
foreach ($Arr as $Cursos):
  echo "Meu treinamento tem os cursos {$Cursos}<br/>";
endforeach;

echo "<hr/>";
$ArrName = ['nome' => "Marcelo", 'idade' => 21, 'Profissão' => "Programador"];
foreach ($ArrName as $Key => $Values):
  echo "{$Key} = {$Values} <br/>";
endforeach;