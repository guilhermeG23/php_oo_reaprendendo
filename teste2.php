<?php
class TGeral {
	public $tnome;
	public $tvalor;

	function setTnome($entrada) {
		$this->tnome = $entrada;
	}

	function setTvalor($entrada) {
		$this->tvalor = $entrada;
	}

	function getTnome() {
		return $this->tnome;
	}

	function getTvalor() {
		return $this->tvalor;
	}
}

class T1 extends TGeral {

	function __construct($t1nome, $t1valor) {
		$this->setTnome($t1nome);
		$this->setTvalor($t1valor);
		echo $this->getTnome() . PHP_EOL;
		echo $this->getTvalor() . PHP_EOL;
	}
}

$t0 = new T1("t1", "t2");
