<?php

class T1 {
    public static $t1;

    public static function t1get() {
        echo "Retorno T1";
    }

    //Em métodos staticos, se usa self em vez de this
    public static function t1getVariable() {
        echo self::$t1;
    }

    //Mas ainda pode usar os outros normais
    public function teste() {
        echo "Teste";
    }
}

T1::$t1="Teste T1";
T1::t1get();
T1::t1getVariable();

$T2 = new T1();
$T2->teste();
 