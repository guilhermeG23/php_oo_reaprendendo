<?php 
#Uso de abstração

#Tornar a classe um modelo
#Não se pode mais intanciar a classe diretamente
abstract class TGeral {

    #Isso tornar a função a ser obgratoria a existir a quem instancia a classe
    abstract protected function getT();

}

class T1 extends TGeral {

    public function getT() {
        echo "T1 - Geral";
    }

}

$t1 = new T1();