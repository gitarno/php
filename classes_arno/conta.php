<?php
class Conta{
	
	protected $agencia;
	protected $numero;
	protected $saldo;
	
	public function consulta(){
		return $this->saldo;
	}
	public function credito($valor){
		$this->saldo += $valor;
	}
	public function debito($valor){
		$this->saldo -= $valor;
	}

}

?>