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
		
	public function setGet($p){
		// verifico se o numero de arrays é maior que 2 .... assim to atribuindo. 
		$numargs = func_num_args();
		//condicional caso vor maior..
		return ($numargs>=2)? ($this->$p = func_get_arg(1)) : $this->$p ;
									

	}
	

}


?>