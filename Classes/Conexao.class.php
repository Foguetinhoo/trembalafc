<?php 
class Conexao
{
	private $SERVER;
	private $DBNAME;
	private $USER;
	private $PASSWORD;
	private $OPTIONS;
	private $DRIVER;
	private static $pdocon;
	public function __construct()
	{
		$this->DRIVER = "mysql";
		$this->SERVER = "localhost";
		$this->DBNAME = "db_inscricao";
		$this->USER = "root";
		$this->PASSWORD = "rocket2019";
		$this->OPTIONS = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
			PDO::ATTR_PERSISTENT => true
		);
	}
	public  function conectar()
	{
		try {
		
			if (is_null(self::$pdocon)) 
			{
				self::$pdocon =  new PDO("$this->DRIVER:host=$this->SERVER;dbname=$this->DBNAME",$this->USER,$this->PASSWORD,$this->OPTIONS);
			}
		} catch (PDOException $erro) {
			echo "Erro: " . $erro->getMessage() . "</br>";
			echo "Arquivo: " . $erro->getFile() . "</br>";
			echo "Linha: " . $erro->getLine() . "</br>";
		}
		return self::$pdocon;
	}
}