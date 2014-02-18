<?php

//criando a variavel atribuir a função Mysqli
// ela recebe, não obrigadtorio , 4 parametros
// local
// usuario
// senha
// schema
//1 passo - conexão 
require('conexao.php');
//2 passo - sql
// usando aspas dupla.. pois no sql é aspas simples. 
$comandoSql = "INSERT INTO usuario (email,nome) VALUES ('arno@advg.com.br','Arno Roldão Junior'),('galvao@galvao.eti.br','Er Galvão Abbott')";
//3 passo = Executar
// função para executar o codigo usando 2 parametros
// conexao
// comandos SQl 
if(!mysqli_query($conexao,$comandoSql)){
	echo("Erro.. na inserção");
};
// 4 passo - DESCONECTAR
mysqli_close($conexao);
// Verificando erros PHP









?>
