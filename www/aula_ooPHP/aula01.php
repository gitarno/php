﻿<?php
// arquivo na pasta WWW.. de um server.. ou acessivel via Browser...
	require ('../../classes_arno/Produto.php');
	// chamando class
	$produto = new Produto();
	//atribuindo
	$produto->codigo = 111;
	$produto->produto = 'iPhone 5s';		
	$produto->preco = 2900;
	// usando a metodo
	$produto->imprimirEtiqueta();
	echo'<hr>';
	//outro produto com a mesma classe
	$p2 = new Produto();
	$p2->codigo = 222;
	$p2->produto = 'Smatphone Samsung GAlaxy S4';
	$p2->preco = 1000;
	$p2->imprimirEtiqueta();	
	/*
	var_dump($produto);
	var_dump($p2);
	*/
		
		
?>