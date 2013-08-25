<?php
namespace application\model\DAO;

use \PDO;
use \PDOException;

/**
 * Classe responsável por estabelecer a conexão com o banco de dados 
 * @package application.mode.DAO.DatabaseFactory
 */
class DatabaseFactory{
	
	private $srv		= 'mysql';
	private $host		= 'localhost';
	private $userName	= 'user';
	private $passwod	= '';
	private $dbName		= 'WebService';
	
	private static $pdo	= FALSE;
	
	public function __construct(){
		try{		
			self::$pdo = new PDO(
				sprintf('%s:host=%s;dbname=%s;charset=utf8', $this->srv, $this->host, $this->dbName),
				$this->userName,
				$this->passwod,
				array( PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION )
			);
			
		}catch( PDOException $e ){
			echo "Erro ao esbatelecer conexao: ".$e->getCode();
		}
	}
	
	/**
	 * Recupera a instância do banco de dados
	 */
	public static function getInstancia(){
		if( self::$pdo === FALSE ){
			new self();
			return self::$pdo;
		} else {
			return self::$pdo;
		}
	}
	
}
?>