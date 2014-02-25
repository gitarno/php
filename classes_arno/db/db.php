<?php
// CONSTRUINDO ARQUIVOS com classes ABSTRATAS e CONCRETAS

namespace db;

abstract class db{
	// elas nao poderam ser instanciadas... ou seja sou obrigado EXTENDs para usar.
	
	private $host, $usuario, $senha, $base;
	
	public function __construct($pH,$pU,$pS,$pB){
		$this->setGet('host',$pH);
		$this->setGet('usuario',$pU);
		$this->setGet('senha',$pS);
		$this->setGet('base',$pB);	
	}

	public function setGet($p){
		// verifico se o numero de arrays é maior que 2 .... assim to atribuindo. 
		$numargs = func_num_args();
		//condicional caso vor maior..
		if($numargs>=2){
			$this->$p = func_get_arg(1);
		}else {
			return  $this->$p; 
		}
	}
	
}



?>