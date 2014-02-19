<?php
require 'ContaCorrente.php';

class ContaPoupanca extends ContaCorrente{
		/* 
		 Essa  classe ela e uma subClasse uma extensao 
		 da classe Corrente.. pois tem propriedades iguais a
		 da classe corrente. 
		
		var $agencia, $numero, $saldo, $aniversario;
		*/// PRECISANDO COLOCAR APENAS ...  os atributos especificos..
		
		var $aniversario; 
		 
		function __construct($pN,$pAg,$pAn,$pS = 0){
			$this->numero = $pN;
			$this->agencia = $pAg;
			$this->aniversario = $pAn;
			$this->saldo = $pS;
				
		}	 
		 
		function render(){
			$this->saldo += ($this->saldo*0.002);
		}
		// funções especiais 
	
}



?> 