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
		$this->agencia = (string)$p;	
	}	
	public function setNumero($p){
		$this->numero = (integer)$p;	
	}
	public function setSaldo($p){
		$this->saldo = (float)$p;	
	}	
	
	// comandos SETTERS ...
	public function getAgencia(){
		return (string)$this->agencia;	
	}	
	public function getNumero(){
		return (integer)$this->numero;	
	}
	public function getSaldo(){
		return (float)$this->saldo;	
	}	

}

?>