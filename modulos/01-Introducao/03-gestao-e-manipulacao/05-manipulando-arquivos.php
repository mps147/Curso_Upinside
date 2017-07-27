<?php

header('Content-Type: text/html; charset=utf-8');

$local = getcwd();//pegar local atual
$localDir = $local . "/05";

if(!file_exists($localDir)){
    mkdir($localDir, 777);
}

$baseDir = getcwd() . "/05";
echo $baseDir . '<hr/>';

//r = read
//w = write
//a = anexar


$file = fopen("{$baseDir}/05.txt", 'w');//CRIANDO UM ARQUIVO
$txt = "Marcelo Pereira dos Santos\r\nBinaryCode\r\nwww.binarycode.com.br";

fwrite($file, $txt);//ESCREVENDO NO ARQUIVO .TXT
fclose($file); //FECHANDO ARQUIVO .TXT

$add = "\r\nCurso de Desenvolvimento Web!";
$fileTrue = fopen("{$baseDir}/05.txt", 'a');
fwrite($fileTrue, $add);
fclose($fileTrue);

$fileRead = fopen("{$baseDir}/05.txt", 'r');
while(!feof($fileRead)){
    $dado = fgets($fileRead);
    echo "{$dado} <br/>";
}
fclose($fileRead);

echo "<hr/><pre>";
$file = "{$baseDir}/05.txt";
//$contet = file_get_contents($file);
//file_put_contents($file, $contet . $add);

//$file = file($file);//FAZENDO UM ARRAY COM O CONTEUDO DO ARQUIVO
//var_dump($file);

copy($file, getcwd() . "/05/teste.txt"); //COPIANDO ARQUIVO
unlink($file); //DELETA UM ARQUIVO

