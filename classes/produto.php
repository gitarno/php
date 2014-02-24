<?php
class produto
{
	//var $codigo, $descricao, $preco, $marca; //Sempre que não definimos explicitamente a visibilidade de um atributo, ele fica como público (aí, em vez de "var" à esquerda, dá pra colocar public:
		//Assim: public $codigo, $descricao, $preco, $marca;
	//Se eu quiser deixar preço como protegido, por exemplo, tiro ele da linha acima, escrevo na linha abaixo (tem que ser um tipo por linnha) assim: preco protected. Aí, quando eu tentar manipular esse atributo em aula2.php, irá dar erro, pois não é possível manipular um atributo protegido.

	
	protected $codigo, $preco, $descricao, $marca;

	public function __construct($cod, $desc, $p = 0, $m = '' ) //método construtor de classes.
	{
		$this -> setCodigo($cod);
		$this -> setDescricao($desc);
		$this -> setPreco($p);
		$this -> setMarca($m);
	}

	//Dá pra ter outras funções dentro da classe:
	//function definePreco(float $p) {
	//$this -> preco = $p;
	//}

	//Design patterns. Padrão de projetos: uma forma de escrever o código que irá facilitar o projeto no futuro. Um dos design patterns mais famosos é o "getters and setters". Esse padrão determina que nenhum atributo é acessado diretamente, sempre por getters e setters. Iremos fazer isso com o nosso código, substituindo a função definePreco por duas, uma Get e outra Set. Em seguida, faremos com todos os atributos:
	function setPreco($p) {
	$this -> preco = (float)$p;
	}

	function getPreco($p) {
	return $this -> preco;
	}
	
	//Código:
	function setCodigo($cod) {
	$this -> codigo = $cod;
	}

	function getCodigo($cod) {
	return $this -> codigo;
	}

	//Descrição:
	function setDescricao($desc) {
	$this -> descricao = $desc;
	}

	function getDescricao($desc) {
	return $this -> descricao;
	}

	//Marca:
	function setMarca($m) {
	$this -> marca = $m;
	}

	function getMarca($m) {
	return $this -> marca;
	}

	//método destruidor de classes (podemos usar essa função para fechar uma conexão à força com o banco de dados, caso o programador tenha esquecido). Esse método não precisa ser chamado no arquivo primário, pois se executa sozinho:
	function __destruct(){
	echo "<br> Destruindo o objeto<hr>";
	}

}

