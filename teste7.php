<?php
//Polimorfismo é sobrescrever funções das classes pais sem afetar as mesmas
class T1 {
    public function T1() {
        echo "T1";
    }
}
class T2 extends T1 {
    public function T1() {
        echo "T2";
    }
}

$t2 = new T2();
$t2->T1();