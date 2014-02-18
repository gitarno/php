<?php
// arquivo na pasta WWW.. de um server.. ou acessivel via Browser...
	require ('../../classes_arno/Produto.php');
	// chamando class
	$produto = new Produto();
	//atribuindo
	$produto->codigo = 111;
	$produto->produto = 'iPhone 5s';		
	$produto->preco = 2900;
	// usando a metodo
	echo $produto->retornarCodigo();
	echo $produto->retornarPreco();
	
	
		
?>