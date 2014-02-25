<?php
// CONSTRUINDO ARQUIVOS com classes ABSTRATAS e CONCRETAS
namespace db;

abstract class db{
	// elas nao poderam ser instanciadas... ou seja sou obrigado EXTENDs para usar.
	
	private $host, $usuario, $senha, $base, $conn;
	// função construtoras.. 
	public function __construct($pH,$pU,$pS,$pB){
		$this->sg('host',$pH);
		$this->sg('usuario',$pU);
		$this->sg('senha',$pS);
		$this->sg('base',$pB);	
	}
	
	//como essa função é abtrata ela força a filha a ter uma função com esse nome...
	abstract public function conectar();
	abstract public function desconectar();
	// nesse caso da abstração temos um parametro e por isso a filha tem que declara com parametros esse metodo.
	abstract public function executar($sql);
	
	
	public function sg($p){
		// verifico se o numero de arrays é maior que 2 .... assim to atribuindo. 
		$numargs = func_num_args();
		//condicional caso vor maior..
		return($numargs>=2)?$this->$p = func_get_arg(1):$this->$p; 
	}
	
}



?>