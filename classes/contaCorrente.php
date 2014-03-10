<?php
class conta_corrente{
	protected $numero, $titular, $saldo, $data;

	public function __construct($n, $t, $s = 0, $d = NULL){ //método construtor de classes.
		$this -> setNumero($n);
		$this -> setTitular($t);
		$this -> setSaldo($s);
		$this -> setData($d);

		if ($d != NULL) {
			$this->setData($data);
		} else {
			$data = date('d/m/Y');
			$this->setData($data);
		}

		}
	}

	/*public function __get($nome){
		$nome = 'get' . ucfirst($nome);
		return $this->$nome();
	}

	public function __set($nome, $valor){
		$nome = 'set' . ucfirst($nome);
		$this->$nome($valor);
	}*/

	public function operacao($valor){ //A conta tb pode ter crédito e débito. Crédito: número positivo soma. Débito: colocar um número negativo.
		$this->saldo = $this->saldo + (float)$valor; //Essa linha é melhor ser escrita como está abaixo, por set e get:
		//$this->setSaldo($this->getSaldo() + (float)$valor);
	}

	public function transferencia(conta_corrente $conta, $valor){
		$this->operacao(-($valor));
		$conta->operacao($valor);

	}

	public function setNumero($n) {
		$this->numero = (string)$n;
	}

	public function getNumero() {
		return (string)$this->numero;
	}

	public function setTitular($t) {
		$this ->titular = (string)$t;
	}

	public function getTitular() {
		return (string)$this ->titular;
	}

	public function setSaldo($s) {
		$this ->saldo = (float)$s;
	}

	public function getSaldo() {
		return (float)$this ->saldo;
	}

	public function setData($d) {
		$this ->data = (string)$d;
	}

	public function getData() {
		return (string)$this->data;
	}

}