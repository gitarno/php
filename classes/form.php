<?php
abstract class form
{
	public $name, $action, $method;

	public final function __construct($n, $a, $m='get')
	{
		$this->setName($n);

		try {
			$this->setAction($a);
		} catch (Exception $e) {
			die($e->getMessage());
		}

		try {
			$this->setMethod($m);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	abstract public function gerar();
	abstract public function validar();
	abstract public function processar();

	public final function setName($valor)
	{
		$this->name = $valor;
	}

	public final function setAction($valor)
	{
		if (preg_match('/\.php$/', $valor)) {
			$this->action = $valor;
		} else {
			throw new Exception('Ação inválida.');
		}
	}

	public final function setMethod($valor)
	{
		if (in_array($valor, array('get', 'post'))) {
			$this->method = $valor;
		} else {
			throw new Exception('Método inválido.');
		}
		
	}

	public final function getName()
	{
		return $this->name;
	}

	public final function getMethod()
	{
		return $this->method;
	}

	public final function getAction()
	{
		return $this->action;
	}
}