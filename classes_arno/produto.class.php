<?php
// trabalhando com namespace
// acabar com conflito
namespace Targettrust;

class produto{
	public $codigo;
	public function __construct($p){
		$this->codigo = $p; 	
		// devo colocar uma contra barra na frente de qualquer classe global do programar
		throw new \Exception ('Erro');
	}
}

?>