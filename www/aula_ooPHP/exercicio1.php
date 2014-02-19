<?php
// EXERCICIO 
	require ('../../classes_arno/ContaCorrente.php');

	$contaArno = new ContaCorrente();
	$contaArno->agencia = 0432;
	$contaArno->numero = 4321;
	$contaArno->digito = 1;
	$contaArno->tipo = 013;
	$contaArno->saldo = 6000.00;
	
	var_dump($contaArno);
	
	
?>