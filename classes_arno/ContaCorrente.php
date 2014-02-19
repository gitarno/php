<?php

class ContaCorrente{
		
		public $agencia, $numero, $digito, $saldo;
		//Impedindo que partes do elemento seja visto. 
		// MODELO DE VISIBILIDADE
		// public - para todos ... DEFAULT
		// protected - PARA PROPRIA e FILHOS
		// PRIVATE - So para ela! 
		private $tipo;
		public $meuFilho; 
		
		// funções especiais 
		function __contrutor($pNumero, $pAgencia, $pTipo, $pSaldo=0){
			$this->numero = $pNumero;
			$this->agencia = $pAgencia;
			$this->tipo = $pTipo;
			$this->saldo = $pSaldo;	
			$this->meuFilho = new filho();
			
		}
		
		public function credito($pValor){
			$this->saldo += $pValor;					
		}
		public function debito($pValor){
			$this->saldo -= $pValor;					
		}
		public function consulta(){
			return $this->saldo;						
		}
		
}

class filho{
	var $legal = 100;
}


?> 