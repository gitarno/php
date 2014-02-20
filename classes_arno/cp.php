<?php

require_once 'conta.php';

class cp extends Conta{

	private $aniversario;
	
	public function __construct($pA,$pN,$pS=0,$pAn){
		parent:: __construct($pA, $pN, $pS);
		/*
		$this->agencia = $pA;
		$this->numero = $pN;
		$this->saldo = $pS;
		*/
		$this->aniversario = $pAn;						 	
	}
	
	public function render(){
		$this->saldo += $this->saldo * 0.002;	
		
	}
		
	// comandos SETTERS ...	
	public function setAniversario($p){
		$this->aniversario = (string)$p;	
	}	

	// comandos GETTERS ...
	public function getAniversario(){
		return (string)$this->aniversario ;	
	}
	
		
	
}




?>