<?php
namespace db;
use db\idb;


class iMysqli implements idb{
	
	public function conectar(){
		$this->sg('conn', mysqli_connect(
			$this->sg('host'),
			$this->sg('usuario'),
			$this->sg('senha'),
			$this->sg('base')
			)
		);
	}
	public function desconectar(){
		mysqli_close($this->sg('conn'));
		$this->sg('conn',null);
	}
	public function executar($sql){
		//return $this->sg('conn');
		return mysqli_query($this->sg('conn'),$sql);
	}
	
				
}



?>