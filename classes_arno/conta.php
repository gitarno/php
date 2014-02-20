<?php
class Conta{
	
	protected $agencia;
	protected $numero;
	protected $saldo;
	
	public function consulta(){
		return $this->getSaldo();
	}
	public function credito($valor){
		//$this->saldo += $valor;
		// PARA NAO VIOLAR as regras de SETTER e GETTER
		$this->setSaldo($this->getSaldo()+ (float)$valor);
	}
	public function debito($valor){
		$this->setSaldo($this->getSaldo()- (float)$valor);
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
	
	// comandos GETTERS ...
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