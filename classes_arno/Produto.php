<?php
// arquivo externo
class Produto{
// definir caracteristicas... 
	var $produto, $codigo, $preco;
	
	function retornarCodigo(){
		return $this->codigo;	
	}	
	
	function retornarPreco(){
		return $this->preco;	
	}	
	
	public function sg($p){ //SETTER & GETTERs
		// verifico se o numero de arrays é maior que 2 .... assim to atribuindo. 
		$numargs = func_num_args();
		//condicional caso vor maior..
		return ($numargs>=2)? ($this->$p = func_get_arg(1)) : $this->$p ;
	}
	
	
}
?>