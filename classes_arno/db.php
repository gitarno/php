<?php

class DB{
	
	private $usuario;
	private $senha;
	private $host;
	private $base;
	
	function __construct($pU,$pS,$pH,$pB){
		$this->setGet('usuario',$pU);		
		$this->setGet('senha',$pS);		
		$this->setGet('host',$pH);						
		$this->setGet('base',$pB);		
	}	
	
	function SOULOCO($p){
			 echo "<br> ********************* ";
			echo func_num_args() . "<br>";
			//echo( func_get_arg(0) + func_get_arg(1));
			//$this->func_get_arg(0) = "legal";
	        echo "<br> ********************* ";
			
	}
		
	public function setGet($p){
		// verifico se o numero de arrays é maior que 2 .... assim to atribuindo. 
		$numargs = func_num_args();
		//condicional caso vor maior..
		if($numargs>=2){
			// comandos SETTERS ...
			// atribui o segunto ARGUMENTO ao primeiro.
			$this->$p = func_get_arg(1);
		}else{
			// comandos GETTERS ...
			// caso tenha apenas 1 ... retorna apenas o valor do elemento
			return $this->$p;
											
		}
	}
	
		/*
	public function setGet($atributo,$p=null){
		if($p==null){
			// comandos GETTERS ...
			return $this->$atributo;			
		}else{
			// comandos SETTERS ...	
			$this->$atributo = $p;		
		}
	}
	/*
	// comandos SETTERS ...	
	public function setUsuario($p){
		$this->usuario = $p;	
	}
	// comandos GETTERS ...
	public function getUsuario(){
		return $this->usuario ;	
	}*/

}


?>