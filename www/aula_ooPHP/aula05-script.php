<?php
require '../../classes_arno/autoload.php';	
use db\postg;
use db\mysqli;

$db = new mysqli('localhost','root','','mydb');
$db->conectar();
$select = $db->executar('SELECT * FROM usuario');	
var_dump($select);
while($dado = mysqli_fetch_assoc($select)){
	echo $dado['nome']. ' - ';
	echo $dado['email'].'<br>';
}
$db->desconectar();

?>