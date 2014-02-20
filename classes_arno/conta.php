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

	// comandos SETTERS ...	
	public function setAgencia($p){
		$this->agencia = $p;	
	}	
	public function setNumero($p){
		$this->numero = $p;	
	}
	public function setSaldo($p){
		$this->saldo = $p;	
	}	
	
	// comandos SETTERS ...
	public function getAgencia(){
		return $this->agencia;	
	}	
	public function getNumero(){
		return $this->numero;	
	}
	public function getSaldo(){
		return $this->saldo;	
	}	

}

?>