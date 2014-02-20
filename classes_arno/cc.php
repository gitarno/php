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
	
	// comandos SETTERS ...	
	public function setTipo($p){
		$this->tipo = $p;	
	}	

	// comandos GETTERS ...
	public function getTipo($p){
		$this->tipo = $p;	
	}
	
	
	
	
}




?>