PHP 
===
Instrutor: Er Galvão
Escola: Targettrust

Aulas de Orientação a objeto em PHP 
====

Introduções... aula
Orientação objeto trabalhamos com Objetos, classes, metodos, 

A classe pode ser entendida como uma planta de um objeto; toda a sequencia para produzir um objeto, ela que define as caracteristicas, funções e popriedade que nosso objeto vai desempenhar! 

Quando um alinha é executa processural.. uma abaixo do outro.. fundamental.. quando utilizamos funções e chamamos elas ao longo do codigo…Na OO trabalhamos com conteners…  uma classe é um … Ao desenvolver um sistema com OO… costumamos identificar alguns dos objetos que reutilizaremos , em um cadastro de clientes.. podemos agregar as funções… a um objeto.. chamado USUARIO… podendo ter seus processos: autenticar, acessar, perfil… 

USUARIO 		- classe
cadastrar()		- métodos
autenticacao()	  (funções)
recuperar()

nome		- variaveis 
senha		  propriedades
email


Estrutura recomendada nunca se coloca classe dentro da pasta acessivel pelo Browser...
====
	- wamp  ====>>> pasta HOST, ROOT
 		-  www / ===> para acessos HTTP
			-pastaServer / 	
				Class.php (main.php)
		- classes 
		  	usuario.php // usar php melhor que .class.. pois não tem como ser lido caso for invadido via browser.. ou via GET
	

Passo ideais para construção de estruturas OO..
==== 

1. Construa a classes na pasta de classes... 
	 classes / <b> Class.php </b>
	 
2. Crie o arquivo que irá "USAR".. o script
	 www / pastaServer / script.php

3. Vincule os arquivos usando o INCLUDE ou REQUERE
	require ('../../classes/Class.php');
	 
/****** FECHO .. agora pra sinuca ********/
	 
Dicas:  Boas praticas
==== 

1. Classes com inicial Maisucscula
2. Cada metodo.. um unico algoritimo .. unica função 





