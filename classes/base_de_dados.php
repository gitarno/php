<?php

abstract class base_de_dados{

	public $conn;
	
	protected $servidor, $usuario, $senha, $porta, $base;

	public function __construct($s, $u, $pw, $p, $b){

		$this->servidor = $s;
		$this->usuario = $u;
		$this->senha = $pw;
		$this->porta = $p;
		$this->base = $b;
	}

	abstract public function conectar();
	abstract public function desconectar();
	abstract public function executar($sql);

}