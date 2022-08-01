<?php
//interface é um modelo para usar sobre as classes
interface T1 {

    public function getT1();
    public function getT2();
    public function getT3();
    public function getT4();

}

//Todas as classes que forem usar o interface tem que fazer isso
//Ele erá obrigado a ter todas as funções do interfaces
class Tgeral implements T1 {
    
    public function getT1() {
        echo "teste T1";
    }
    public function getT2() {
        echo "teste T2";
    }
    public function getT3() {
        echo "teste T3";
    }
    public function getT4() {
        echo "teste T4";
    }

}

$t1 = new Tgeral();
$t1->getT1();
$t1->getT2();
$t1->getT3();
$t1->getT4();
