<?php
class Teste {

    //Pode ser alterado dentro, fora e pelas herancas
    public $t1;
    //Pode ser alterada pela classe e pelas heranças
    protected $t2;
    //Só pode ser alterada pela classe PAI
    private $t3;

    function setValorT3($entrada) {
        $this->t3 = $entrada;
    }

    function getTValorT3() {
        return $this->t3;
    }

}

class T2 extends Teste {

    function setValorT2($entrada) {
        $this->t2 = $entrada;
    }
    
    function getTValorT2() {
        return $this->t2;
    }
}


class T3 extends Teste {


}



$teste = new Teste();

$teste->t1="t1";
echo $teste->t1 . PHP_EOL;

$teste2 = new T2();
$teste2->setValorT2("t2");
echo $teste2->getTValorT2() . PHP_EOL;

$teste3 = new T3();
$teste3->setValorT3("t3");
echo $teste3->getTValorT3() . PHP_EOL;
