<?php

class T1 {
    public $t1;
    public $tinfo;
}
class T2 {
    public $t2;
}

//Assosiação entre objs
$t1Class = new T1();
$t1Class->t1 = "teste";

$t2Class = new T2();
$t2Class->t2 = "teste2";

$t1Class->tinfo = $t2Class;

echo var_dump($t1Class);