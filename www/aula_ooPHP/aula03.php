<?php


require '../../classes_arno/db.php';


$conn = new DB("arno",123456,"localhost","db");
var_dump($conn);
echo $conn->setGet('usuario');



?>