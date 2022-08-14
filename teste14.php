<?php
//Métodos mágicos

class Pessoa {
    private $name;
    
    //Isso abre o valor a ser modificado mesmo como privado
    public function __set($name, $value) {
        $this->name = $value;
    }

    public function __get($name) {
        return $this->name;
    }

    public function __tostring() {
        return "Método mágico de retorno de uma string caso chame a classe";
    }

    public function __invoke() {
        return "Retorna uma msg caso tentar usar o obj como funcão";
    }
}

$teste = new Pessoa();

//Set magico
$teste->name="Pastel";
//Get magico
echo $teste->name;