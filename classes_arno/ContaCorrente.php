<?php

class ContaCorrente{
		
		
		var $agencia, $numero, $digito, $tipo, $saldo;
		
		
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



?> 