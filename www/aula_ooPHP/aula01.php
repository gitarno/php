<?php
// arquivo na pasta WWW.. de um server.. ou acessivel via Browser...
	require '../../classes_arno/Produto.php';
	// chamando class
	$produto = new Produto();
	//atribuindo
	$produto->nome = "legal"; //<<<<<< Isso seria uma falha.. 
		////
	$produto->codigo = 111;
	$produto->produto = 'iPhone 5s';		
	$produto->preco = 2900;
	
	// usando a metodo
	echo 'Cód.: '.$produto->retornarCodigo();
	echo ' R$'.$produto->retornarPreco();
	
	var_dump($produto);
	
	
	$p2 = new Produto();
	var_dump($p2);
		
?>