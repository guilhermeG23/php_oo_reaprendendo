<?php
class T1 {
    public $t1;
    public function __construct($entrada) {
        $this->t1=$entrada;
    }
}

//Agregação
//Faz com que uma classe precise de outra para funcionar
//Pode eliminar a que precisa não limpa totalmente os dados
//precisa destruir tudo para limpar
class T2 {
    public $t2;
    public function t2set(T1 $tgeral) {
        $this->t2 = $tgeral;
    }
}

$t11 = new T1("teste");

$t12 = new T2();
$t12->t2set($t11);
echo var_dump($t12->t2);
