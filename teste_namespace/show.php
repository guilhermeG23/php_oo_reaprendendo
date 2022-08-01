<?php

require 't1/t1.php';
require 't2/t1.php';

//Para chamar uma função de dois arquivos diferentes
//Basta usar um namespace no arquivo e depois
//Chamar pelo namespace com \namespace\função
$tshow1 = new \t1\Tshow();
$tshow2 = new \t2\Tshow();
$tshow1->getT();
$tshow2->getT();


//Outra forma de usar é renomar a chamada deles em tempo de execução
//Chama pelo caminho do arquivo e a classe e renomei com o as 
use t1\Tshow as TshowT1;
use t2\Tshow as TshowT2;

$tshow1 = new TshowT1();
$tshow2 = new TshowT2();
$tshow1->getT();
$tshow2->getT();