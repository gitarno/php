<?php
// arquivo externo
class Produto{
// definir caracteristicas... 
	
	var $produto, $codigo, $preco;

	function imprimirEtiqueta(){
		echo 'Cód.: '.$this->codigo ;
		echo 'Preço.: R$'.$this->preco;
		
		
	}	
}
?>