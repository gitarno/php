<?php


require '../../classes_arno/db.php';


$conn = new DB("arno",123456,"localhost","db"); //SETTERSss
var_dump($conn); //Verificando se alimentou
echo $conn->setGet('usuario');	//GET
//$conn->SOULOCO("TESTEA");



?>