<?php

require_once 'conta.php';

class cc extends Conta{
	private $tipo;
	
	public function __construct($pA,$pN,$pS=0,$pT){
		$this->agencia = $pA;
		$this->numero = $pN;
		$this->saldo = $pS;
		$this->tipo = $pT;				
	}	
	public function setAgencia($p){
		$this->agencia = $p;	
	}	
	public function setNumero($p){
		$this->numero = $p;	
	}
	public function setSaldo($p){
		$this->saldo = $p;	
	}	
	public function setTipo($p){
		$this->tipo = $p;	
	}	
	public function setSaldo($p){
		$this->saldo += $p;
	}
	
	
	
	
	
}




?>