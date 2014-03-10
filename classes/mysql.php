<?php
require_once 'base_de_dados.php';

class mysql extends base_de_dados{

	public function conectar(){

		$this->conn = mysql_connect($this->servidor, $this->usuario, $this->senha) or die('Erro ao conectar');
		mysql_select_db($this->base) or die('Erro ao selecionar database');

	}

	public function desconectar(){

		mysql_close($this->conn);
		
	}

	public function executar($sql){
		
		$resultado = mysql_query($sql);
		return $resultado;

	}

}