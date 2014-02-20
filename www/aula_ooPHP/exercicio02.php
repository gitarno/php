<?php
$diretorio = '../../classes_arno/';
require '../../classes_arno/cc.php';
require '../../classes_arno/cp.php';

//require $diretorio.'cc.php';
//require $diretorio.'cp.php';

$o_cc = new cc(000,000,111,"F");
var_dump($o_cc);

$o_cc->setAgencia(123);
$o_cc->setNumero(4567);
$o_cc->setSaldo(0);
//$o_cc->setTipo(123);
try{
	$o_cc->setTipo("z");	
}catch(Exception $e){
	echo $e->getMessage();
}


echo $o_cc->getAgencia()."<br>";
echo $o_cc->getNumero()."<br>";
echo $o_cc->getSaldo()."<br>";
echo $o_cc->getTipo()."<br>";



$o_cp = new cp(111,111,222,03);
var_dump($o_cp);



?>