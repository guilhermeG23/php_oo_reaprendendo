<?php
class T1 {
    public $t1;

    //Toda vez que chamar o clone, esse cara será printado na variavel
    public function __clone() {
        echo "Clone do obj";
    }

}

$tt = new T1();
$tt->t1="t1";

echo $tt->t1 . PHP_EOL;

//Aqui está fazendo referencia ao $tt, alterando dentro do
//objeto base

$tt2 = $tt;
$tt2->t1="t2";

echo $tt2->t1 . PHP_EOL;
echo $tt->t1 . PHP_EOL; //Aqui já absorvei as alterações do tt2

//Fazer um clone do estado atual não modifica o objeto base, Ex:
$tt3 = clone $tt2;
$tt3->t1="t3";

echo $tt3->t1 . PHP_EOL;
echo $tt2->t1 . PHP_EOL;