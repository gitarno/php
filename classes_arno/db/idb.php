<?php
// INTERFACE db
namespace db;
//use db\db;

interface db{
	// ela não pode ter atributos...
	public function conectar();
	public function desconectar();
	public function executar($sql);
}


?>