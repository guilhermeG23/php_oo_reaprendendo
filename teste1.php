<?php 

class TesteGeral {

    //Quando instancia a classe, essa é a construção padrão que é executada
    public function __construct() {
        echo "Constructor" . PHP_EOL;
    }
    
    //Pode se alterar só chamando
    public $t1;

    public function t1Print() {
        echo $this->t1 . ": chamado" . PHP_EOL;
    }

    //Só pode se alterar com uma função dentro da classe que cria o obj
    private $t2;

    public function setT2($entrada) {
        $this->t2 = $entrada;
    }

    public function getT2() {
        return $this->t2;
    }

    /*
    Função para limpar email
    $teste = filter_var($entrada, FILTER_SANITIZE_EMAIL)
    */


}

$chamada1 = new TesteGeral();

//Publico
$chamada1->t1="t1.1 teste";
echo $chamada1->t1;

//Privado
$chamada1->setT2("t2.1 teste");
$chamada1->getT2();
