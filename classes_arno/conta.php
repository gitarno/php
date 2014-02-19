<?php
class Conta{
	
	public $agencia;
	public $numero;
	public $saldo;
	
	public function consulta(){
		return $this->saldo;
	}
	public function credito($valor){
		$this->saldo -= $valor;
	}
	public function debito(){
		$this->saldo += $valor;
	}

}

?>