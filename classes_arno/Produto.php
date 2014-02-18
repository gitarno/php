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
}
?>