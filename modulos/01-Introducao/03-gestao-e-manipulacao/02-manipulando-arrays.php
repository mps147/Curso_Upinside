<?php

header('Content-Type: text/html; charset=utf-8');
//ARRAYS RELACIONAIS
$Arr = array("PHP", "HTML", "CSS");
$Arr[] = 'JS';

$ArrB = ['PHP', 'HTML', 'CSS'];
$ArrB[] = 'JS';

foreach ($ArrB as $Lang):
    echo "{$Lang}<br/>";
endforeach;

echo "<hr/>";

//ARRAY ASSOCIATIVO
$arrayC = [
    'cargo' => 'Programador', 
    'salario' => 2200
];

$arrayC['empresa'] = "UpInside";
$arrayC['cargo'] = "webmaster";
$arrayC['salario'] += 5000;
$arrayC['cargo'] .= "/Programador";

$arrayC = array_map('strip_tags', $arrayC);
$arrayC = array_map('trim', $arrayC);

echo "Eu sou {$arrayC['cargo']} na {$arrayC['empresa']}";

echo "<hr/>";
//MULTIDIMENCIONAL
$colaboradores = array();
$colaboradores[] = ['nome' => 'Marcelo Pereira', 'salario' => 7200, 'cargo' => "WebMaster"];
$colaboradores[] = ['nome' => 'Marcelo P', 'salario' => 1800, 'cargo' => "WebMaster"];
$colaboradores[] = ['nome' => 'Marcelo Santos', 'salario' => 1800 , 'cargo' => "WebMaster"];

foreach ($colaboradores as $Cargo):
    extract($Cargo);
    echo "{$nome} e {$cargo} e recebe " . number_format($salario, 2, ',', '.') . " por mes! <br>";
endforeach;
echo "<pre>";
var_dump($colaboradores);
echo "</pre>";

        
