<?php
// trabalhando com namespace
namespace Targettrust;

class produto{
	public $codigo;
	public function __construct($p){
		$this->codigo = $p; 	
		// devo colocar uma contra barra na frente de qualquer classe global do programar
		throw new \Exception ('Erro');
	}
}

/* 
Autoload >>>>>>>>>>>>>>>>> COMPOSER
	- PSR-0 : http://www.php-fig.org/psr/psr-0/
	- PSR-4 : http://www.php-fig.org/psr/psr-4/
	composers.... 
		https://getcomposer.org/
		https://packagist.org/
		http://github.com
		
		http://www.noupe.com/php/20-useful-php-components-tutorials-for-everyday-project.html
	http://pear.php.net/
		- JSON
		- - Apache/log4php
		- Packagist
		- Web
*/


?>