<?php
require_once 'form.php';

class form2 extends form {
	
	public function gerar(){

		$a = $this->getAction();
		$m = $this->getMethod();
		$n = $this->getName();

		return "<form action=\"$a\" method=\"$m\" name=\"$n\"></form>";

	}

	public function validar(){
		
	}

	public function processar(){
		
	}

}
?>