<?php
// EXERCICIO 
	require ('../../classes_arno/ContaCorrente.php');

	$contaArno = new ContaCorrente();
	$contaArno->__contrutor(4321,0432,013,200);
	/*
	$contaArno->agencia = 0432;
	$contaArno->numero = 4321;
	$contaArno->digito = 1;
	$contaArno->tipo = 013;
	*/	
	//var_dump($contaArno);
	// 
	
	$contaArno->credito(100);
	$contaArno->debito(50);
	echo $contaArno->consulta();
	
	$contaArno->meuFilho;
	echo $contaArno->meuFilho->legal ;
	
?>