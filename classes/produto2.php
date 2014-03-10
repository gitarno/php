<?php
//Para criar uma classe que tenha atributos diferenciados. Essa classe irá herdar todas as propriedades e os métodos da classe mãe produto.php:
require_once 'produto.php';// se o arquivo já foi requerido, ele não chama de novo.
//Geladeira tem tudo o que tem um produto, mas produto não tem tudo o que tem uma geladeira, por isso criamos uma subclasse geladeira:
class geladeira extends produto {
	private $voltagem, $capacidade;

	public function __construct($c, $p, $d, $v, $m='', $ca=0){ //Esse método já tinha na classe mãe, mas não serve para geladeira. Essa linha sobrescreve o construtor:
		$this->setCodigo($c);
		$this->setPreco($p);
		$this->setDescricao($d);
		$this->setVoltagem($v);
		$this->setMarca($m);
		$this->setCapacidade($ca);
	}

	/*	Esse bloco acima pode ser escrito assim, para podermos aproveitar o construtor da classe mãe (para os atributos dela: código, preço, descrição, marca), já que nós o sobrescrevemos acima:
		public function __construct($c, $p, $d, $v, $m='', $ca=0){
		$this->setCodigo($c);
		
		parent::__construct($c, $d, $p, $m;) //chamamos o construtor da classe mãe aqui.

		$this->setVoltagem($v);
		$this->setCapacidade($ca);
	}*/

	public function setCodigo($p){
		if (substr((string)$p, 0, 3) == '900'){
			$this->codigo = (int)$p;
		} else {
			throw new Exception('Código inválido');
		}

	}
	
	public function getVoltagem(){
		return (int)$this->voltagem;
	}

	public function setVoltagem(){
		$this->voltagem = (int)$p;
	}

	public function getCapacidade(){
		return (int)$this->capacidade;
	}

	public function setCapacidade(){
		$this->capacidade = (int)$p;
	}
}

//OBS: em PHP não existe herança múltipla. Para contornar essa situção, há uma solução chamada de trait. Só do PHP 5.4 pra cima.