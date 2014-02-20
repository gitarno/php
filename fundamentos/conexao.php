<?php
// estou fazendo uma 
// ela retorna um resource , um SUCESS,  mas se ela falhar.. ela retornará falso..... 
// buscando a condição... de dentro para fora.. na ordem... 
// função  mysqli..
// atribui o resultado na variavel
// ele interpola a variavel..
// trazendo um resultado TRUE.. caso $conexao for FALSE 
// passando reto.! 
// caso contrario.... FALSE.. ele executará o DIE.. 


if(! $conexao = mysqli_connect('localhost','root','','mydb')){
	die("Erro de conexão !");
}
; 

?>
