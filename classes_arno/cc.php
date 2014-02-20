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
		// converte o valor inserido em maiusculo...
		$p = strtoupper((string)$p);
		// condicional para F e J
		//(($p=="F")||($p=="J"))?$this->tipo = $p:$this->tipo = $p;	

		// estou testando se não tem os dois valores..ou mais..
		if(!in_array($p,array("F","J"))){
			$this->tipo = $p;
			
		}
		
		

	}	

	// comandos GETTERS ...
	public function getTipo(){
		return (string)$this->tipo;	
	}
	
	
	
	
}




?>