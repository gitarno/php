<?php
$diretorio = '../../classes_arno/';
require '../../classes_arno/cc.php';
require '../../classes_arno/cp.php';

//require $diretorio.'cc.php';
//require $diretorio.'cp.php';

$o_cc = new cc(000,000,111,01);
var_dump($o_cc);

$o_cp = new cp(111,111,222,03);
var_dump($o_cp);


//Getters & Setters ... 


?>