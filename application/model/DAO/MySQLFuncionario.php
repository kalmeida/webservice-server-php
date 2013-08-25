<?php
namespace application\model\DAO;

use application\model\DAO\TaskFuncionario;
use application\mode\DAO\entity\EntityFuncionario;
use application\model\DAO\DatabaseFactory;

/**
 * Classe responsável por executa as Tarefas relacionadas ao Funcionário
 */
class MySQLFuncionario implements TaskFuncionario{
	
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
	 * @param int
	 * @return EntityFuncionario
	 * @see TaskFuncionario::read()
	 */
	public function read( $idFuncionario ){
		try{
			$stmt = $this->pdo->prepare("
				SELECT 
					A.Id, A.Nome, A.Idade, A.Email, B.Cargo 
				FROM Funcionario A
				INNER JOIN Funcao B ON B.Id = A.IdFuncao
				WHERE A.Id = :idFuncionario
				ORDER BY A.Nome
			");
			$stmt->bindValue( ':idFuncionario', $idFuncionario, \PDO::PARAM_INT );
			$stmt->setFetchMode( \PDO::FETCH_OBJ );
			
			$stmt->execute();
			return $stmt->fetchObject();
			
		}catch( \PDOException $e ){
			echo $e->getCode();
		}
	}

	/**
	 * @param EntityFuncionario
	 * @return boolen
	 * @see TaskFuncionario::create()
	 */	
	public function create( EntityFuncionario $funcionario ){}
	
	/**
	 * @param EntityFuncionario
	 * @return boolen
	 * @see TaskFuncionario::update()
	 */	
	public function update( EntityFuncionario $funcionario ){}
	
	/**
	 * @param EntityFuncionario
	 * @return boolen
	 * @see TaskFuncionario::delete()
	 */	
	public function delete( EntityFuncionario $funcionario ){}
	
	/**
	 * @return array
	 * @see TaskFuncionario::getListFuncionario()
	 */
	public function getListFuncionario(){
		try{
			$stmt = $this->pdo->prepare("
				SELECT 
					A.Id, A.Nome, A.Idade, A.Email, B.Cargo 
				FROM Funcionario A
				INNER JOIN Funcao B ON B.Id = A.IdFuncao
				ORDER BY A.Nome
			");
			
			$stmt->setFetchMode( \PDO::FETCH_OBJ );
			$stmt->execute();
			
			return $stmt->fetchAll();
			
		}catch( \PDOException $e ){
			echo 'Erro: '. $e->getCode();
		}
	}
}

?>