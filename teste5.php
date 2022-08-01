<?php
class T1 {
    const t1 = "T1";
    #Self é referente ao escopo de onde está sendo chamada
    public function getT() {
        echo self::t1;
    }
}

class T2 extends T1 {
    const t1 = "T2";
    #Se tirar a constante daqui, ele vai para a classe PAI que oferece a constante 
    public function getT() {
        //Mostra a constante do 
        echo self::t1;

    }
}

$tgeral = new T1();
$tgeral->getT();