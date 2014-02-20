<?php

require_once 'conta.php';

class cc extends Conta{
	private $tipo;
	
	public function __construct($pA,$pN,$pS=0,$pT){
		parent::__construct($pA, $pN, $pS);
		/*
		$this->setAgencia($pA);
		$this->setNumero($pN);
		$this->setSaldo($pS);
		*/
		$this->setTipo($pT);				
	}
	
	// comandos SETTERS ...	
	public function setTipo($p){
		// converte o valor inserido em maiusculo...
		$p = strtoupper((string)$p);
		// condicional para F e J
		//(($p=="F")||($p=="J"))?$this->tipo = $p:$this->tipo = $p;	
		// estou testando se não tem os dois valores..ou mais..
		if(!in_array($p,array("F","J"))){
			// metodo de inserção para o desenvolvedor.
			throw new Exception("Valor invalido: $p");
		}			//throw new Exception("Valor Valido: $p");
			$this->tipo = $p;
		
		//Nao funfa
		//(!in_array($p,array("F","J")))? Exception("Valor invalido: $p"):$this->tipo = $p;
		
		

	}	

	// comandos GETTERS ...
	public function getTipo(){
		return (string)$this->tipo;	
	}
	
	
	
	
}




?>