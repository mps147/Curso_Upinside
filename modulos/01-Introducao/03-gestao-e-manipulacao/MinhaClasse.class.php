<?php

class MinhaClasse {
    public $nome;
    public $empresa;
    public $ramo;
    
    function getNome() {
        return $this->nome;
    }

    function getEmpresa() {
        return $this->empresa;
    }

    function getRamo() {
        return $this->ramo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmpresa($empresa) {
        $this->empresa = $empresa;
    }

    function setRamo($ramo) {
        $this->ramo = $ramo;
    }
}
