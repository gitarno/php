<?php

require ("Produto.php");


$tenis0 = new Produto();
$tenis1 = new Produto();
$tenis2 = new Produto();
$tenis3 = new Produto();



$tenis0->sg("codigo",10.6563);
$tenis0->sg("produto","arroz");
$tenis0->sg("preco",true);

var_dump(!$tenis0->sg("preco"));
echo($tenis0->sg("codigo")." - ".$tenis0->sg("produto"));

var_dump($tenis0);
var_dump($tenis1);
var_dump($tenis2);
var_dump($tenis3);


$vetores = array(1,252,3,4,5,6,7,8,9,767576,7,0);
echo($r = count($vetores));
for($i=0; $i<count($vetores); $i++){
	echo("vetores[".$i."] = ".$vetores[$i]."<br>");
};


?>