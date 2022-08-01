<?php
class T1 {
    public function tset($entrada) {
        return $entrada;
    }
}

//Composição
//Tudo dependente da classe MAIN
//Essa classa ta responsavel por chamar as demais e atribuir os dados
//Se ela morrer, tudo vai com ela e esse é um dos objs delas 
class T2 {
    
    public $tsetInternal;
    public $tinfo;

    public function __construct($entrada) {
        $this->tsetInternal = new T1();
        $this->tinfo = $entrada;
    }

    public function tget() {
        echo $this->tsetInternal->tset($this->tinfo);
    }

}

$t2show  = new T2("teste");
$t2show->tget();