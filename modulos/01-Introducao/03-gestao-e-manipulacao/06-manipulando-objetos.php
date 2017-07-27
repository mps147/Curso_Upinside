<?php

header('Content-Type: text/html; charset=utf-8');

require './MinhaSegundaClasse.class.php';

$Marcelo = new MinhaSegundaClasse();
$Marcelo->setEmpresa("Binary Code");
$Marcelo->setIdade(21);
$Marcelo->setNome("Marcelo P. Santos");
$Marcelo->setRamo("Programador");

echo "<pre>";
var_dump($Marcelo);

//verificar os metodos disponiveis numa classe
var_dump(get_class_methods("MinhaSegundaClasse"));
//verificar os atributos disponiveis numa classe
var_dump(get_class_vars("MinhaSegundaClasse"));
//saber de qual class pertence o objeto
var_dump(get_class($Marcelo));
//saber de qual classe herda a classe atual
var_dump(get_parent_class("MinhaSegundaClasse"));
//verficar se o objeto e da classe
var_dump(is_subclass_of($Marcelo, 'MinhaClasse'));
//verificar se o metodo existe na classe
var_dump(method_exists($Marcelo, "getNome"));
//chamar um metodo direto passando um parametro
var_dump(call_user_func("strtoupper", $Marcelo->getNome()));
//chamar um metodo direto usando array indice = ao metodo e valor = valor, atributo, variavel, etc;
var_dump(call_user_func(array($Marcelo, "getIdade")));
echo "</pre>";