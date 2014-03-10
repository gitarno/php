<?php

class DB{
	
	private $usuario;
	private $senha;
	private $host;
	private $base;
	private $conn;
	
	private static $intancia;
	
	public static function singleton($pU,$pS,$pH,$pB){
		if(!isset(self::$intancia)){ // o atributo intancia esta setado.. se SIM .. NAO faz..
			//contante nativa da linguagem,  especial , ela contem a propria classe.. o proprio nome
			$className = __CLASS__;	// pega o nome dessa classe
			self::$intancia = new $className($pU,$pS,$pH,$pB); // agora atribui para a INSTACIA essa classe
		} return self::$intancia;
	}
		
	private function __construct($pU,$pS,$pH,$pB){
		$this->sg('usuario',$pU);		
		$this->sg('senha',$pS);		
		$this->sg('host',$pH);						
		$this->sg('base',$pB);		
	}	
	
	
		
	public function sg($p){ //SETTER & GETTERs
		// verifico se o numero de arrays é maior que 2 .... assim to atribuindo. 
		$numargs = func_num_args();
		//condicional caso vor maior..
		return ($numargs>=2)? ($this->$p = func_get_arg(1)) : $this->$p ;
	}
	
	public function conectar(){
		//mysqli_connect("myhost","myuser","mypassw","mybd") or die("Error " . mysqli_error($link));
		//$this->conn = mysqli_connect($this->s('host'),$this->sg('usuario'),$this->sg('senha'),$this->sg('base'));
		//setters
		try{
			if(!$this->sg('conn',mysqli_connect($this->sg('host'),$this->sg('usuario'),$this->sg('senha'),$this->sg('base')))){
				throw new Exeception("Erro de conexão");	
			};
			// operador de escopo
			self::log("Ocorreu uma conexão");
			//var_dump($this->sg('conn'));		
			
		}catch(Exception $ex){
			die($ex->getMessage());	
		}
		
	}
	
	public function desconectar(){
		// desconectando
		mysqli_close($this->conn);
		//var_dump($this->sg('conn'));

	}
	
	public function executar($pSql){
		return mysqli_query($this->sg('conn'),$pSql);
	}
	
	public function __destruct(){
	// metodo que destroi o objeto antes de finalizar	
		if($this->conn){
			$this->desconectar();
		}
	}
	
	public static function log($mensagem){
		// manipulacao de arquivos
		// a cada dia um log diferente
		// arquivos log armazenados em arquivos são mais eguros em alguns aspectos	
		// -logs
		//	-	2014-02-24.log
		//		- [10:07:15]- $mensagem;		
		$arquivo = date('Y-m-d');
		$linha = date('[ H:i:s ] - ').$mensagem.PHP_EOL;
		// uma facilitadora.. ou seja ela faz toda a funcao de escrever um arquivo.
		// php_fopen...php_fwrite.... USAR DIR para ele saber onde ele está.
		file_put_contents(__DIR__."/../logs_arno/$arquivo.txt",$linha,FILE_APPEND);
		
	}
	
	
	
}


?>