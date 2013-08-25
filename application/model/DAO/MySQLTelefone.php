<?php
namespace application\model\DAO;

use application\model\DAO\TaskTelefone;
use application\model\DAO\entity\EntityFuncionario;
use application\model\DAO\DatabaseFactory;

/**
 * Classe responsável por executa as Tarefas relacionadas ao Telefone do Funcionário
 */
class MySQLTelefone implements TaskTelefone{
	
	/**
	 * @var PDO
	 */
	private $pdo;
	
	/**
	 * Constrói o Objeto PDO
	 */
	public function __construct(){
		$this->pdo = DatabaseFactory::getInstancia();
	}
	
	/**
	 * @param int $idFuncionario
	 * @return array
	 * @see TaskTelefone::read()
	 */
	public function read( $idFuncionario ){
		try{
			$stmt = $this->pdo->prepare("
				SELECT 
					A.Id, CONCAT('(', A.DDD, ')', A.Numero) AS Telefone FROM Telefone A
				WHERE IdFuncionario = :idFuncionario
			");
			$stmt->bindValue( ':idFuncionario', $idFuncionario, \PDO::PARAM_INT );
			$stmt->setFetchMode( \PDO::FETCH_OBJ );
			
			$stmt->execute();
			return $stmt->fetchAll();
			
		}catch( \PDOException $e){
			echo $e->getCode();
		}
	}
	
	/**
	 * @param EntityFuncionario $funcionario
	 * @return boolean TRUE se o Telefone foi cadastrado com sucesso
	 * @see TaskTelefone::create()
	 */
	public function create( EntityFuncionario $funcionario ){
		
	}
	
	/**
	 * @param EntityFuncionario $funcionario
	 * @return boolen TRUE se a atualização do Telefone foi feita com sucesso
	 * @see TaskTelefone::update() 
	 */
	public function update( EntityFuncionario $funcionario ){}
	
	/**
	 * @param EntityFuncionario $funcionario
	 * @return boolen TRUE se o Telefone foi deletado com sucesso
	 * @see TaskTelefone::delete()
	 */
	public function delete( EntityFuncionario $funcionario ){}
	
}
?>