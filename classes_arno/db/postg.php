<?php
namespace db;
use db\db;


class postg extends db{
	
	public function conectar(){
		$this->sg('conn', pg_connect(
			'localhost='.$this->sg('host').'; 
			user='.$this->sg('host').';
			password='.$this->sg('host').';
			name='.$this->sg('host').';')
		);
	}
	public function desconectar(){
		pg_close($this->sg('conn'));
	}
	public function executar($sql){
		return pg_query($this->sg('conn'),$sql);
	}
	
				
}



?>