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
			var_dump( func_get_arg(0));
	        echo "<br> ********************* ";
	}
		
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