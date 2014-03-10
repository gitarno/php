<?php


require '../../classes_arno/db.php';


$conn = DB::singleton("root",'',"localhost","mydb"); //SETTERSss
var_dump($conn); //Verificando se alimentou

$conn->conectar();

$executar = $conn->executar("SELECT * FROM usuario");

while($dados = mysqli_fetch_assoc($executar)) {
  echo $dados["nome"] . " - ";   
  echo $dados["email"] . "<br>";    
} 




//$conn->desconectar();




?>