<?php
class T1 {
    public function show() {
        if (!filter_var("teste@", FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalido", 1);
        } else {
            echo "Email valido";
        }
    }
}

$t1 = new T1();

try {
    $t1->show();
} catch(Exception $e) {
    echo $e->getMessage(); //Mensagem de erro de retorno
    echo $e->getCode(); //Codigo de erro, esse é o valor do lado da msg
    echo $e->getLine(); //Erro em qual linha
    echo $e->getFile(); //Arquivo que deu erro

}