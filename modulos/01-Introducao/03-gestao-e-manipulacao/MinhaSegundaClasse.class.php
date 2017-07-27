<?php
require_once "./MinhaClasse.class.php";
class MinhaSegundaClasse extends MinhaClasse{
    public $idade;
    
    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }
}
