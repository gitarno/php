<?php
require_once 'contaCorrente.php';

class poupanca extends conta_corrente {

	public function operacao($valor){
		$saldo = $this ->getSaldo();
			if ($valor>0){
			$valor = (float)$valor + (float)$valor * 0.05;
			}
		$this ->setSaldo($saldo + $valor);
	}

}
