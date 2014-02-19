<?php

class ContaCorrente{
		
		var $agencia, $numero, $digito, $tipo, $saldo;
		var $meuFilho; 
		
		// funções especiais 
		function __contrutor($pNumero, $pAgencia, $pTipo, $pSaldo=0){
			$this->numero = $pNumero;
			$this->agencia = $pAgencia;
			$this->tipo = $pTipo;
			$this->saldo = $pSaldo;	
			$this->meuFilho = new filho();
			
		}
		
		function credito($pValor){
			$this->saldo += $pValor;					
		}
		function debito($pValor){
			$this->saldo -= $pValor;					
		}
		function consulta(){
			return $this->saldo;						
		}
		
}

class filho{
	var $legal = 100;
}


?> 