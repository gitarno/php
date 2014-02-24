<?php


require '../../classes_arno/db.php';


$conn = new DB("root",'',"localhost","mydb"); //SETTERSss
var_dump($conn); //Verificando se alimentou

try{
	$conn->conectar();
}catch(Exception $ex){
	die($ex->getMessage());	
}

$executar = $conn->executar("SELECT * FROM usuario");

while($dados = mysqli_fetch_assoc($executar)) {
  echo $dados["nome"] . "<br>";    
} 


//$conn->desconectar();




?>