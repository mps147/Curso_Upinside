<?php

header('Content-type: text/html; charset=utf-8');

//Comentário de uma linha

/*
 * Comentário recursivo
 */

/*
  Comentário de varias linhas
 */

$ola = "Olá mundo";
$nome = "Marcelo Pereira";

echo $ola;
echo "<hr>";

echo '$ola';
echo "<br/>";
echo "$ola";
echo "<br/>";
echo $ola;
echo "<br/>";
echo "{$ola}s";
echo "<br/>";
echo "{$ola}, meu nome é {$nome}.";
echo "<hr>";

print("{$ola}<br/>");

$Arr = array(
  "ola" => "Olá Mundo",
  "nome" => "Marcelo Pereira"
);

print_r($Arr);

$idade = 21;
echo $idade;

var_dump($Arr);
?>

<article>
  <h3><?= $ola;?></h3>
  <p><?php echo "$ola meu nome é $nome";?></p>
</article>

