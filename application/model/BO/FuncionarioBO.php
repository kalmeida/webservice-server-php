<?php
namespace application\model\BO;

use application\model\DAO\entity\EntityFuncionario;
use application\model\DAO\MySQLFuncionario;
use application\model\DAO\MySQLTelefone;

/**
 * Classe de Regra de Negócio do Funcionário
 * @package applicaton.model.BO.Funcionario 
 */
class FuncionarioBO{
	
	/**
	 * @var EntityFuncionario
	 */
	private $entityFuncionario;
	
	/**
	 * @var MySQLFuncionario
	 */
	private $funcionarioDAO;
	
	/**
	 * @var MySQLTelefone
	 */
	private $telefoneDAO;
	
	/**
	 * Constrói os Objetos MySQLFuncionario e EntityFuncionario
	 */
	public function __construct(){
		
		$this->entityFuncionario 	= new EntityFuncionario();
		$this->funcionarioDAO 		= new MySQLFuncionario();
		$this->telefoneDAO	 		= new MySQLTelefone();
		
	}
	
	/**
	 * Recupera os dados do Funcionário com ID específico
	 * @param int $id
	 * @return JSON
	 */
	public function getFuncionario( $id ){
		
		$arrFuncionario = NULL;
		
		$this->entityFuncionario->setId( $id );
		$funcionario =  $this->funcionarioDAO->read( $this->entityFuncionario->getId() );
		
		if( $funcionario ){
			$telefone = $this->telefoneDAO->read( $this->entityFuncionario->getId() ) ;
			 
			$arrFuncionario[] = array(
				'Nome' => $funcionario->Nome,
				'Idade' => $funcionario->Idade,
				'Email' => $funcionario->Email,
				'Cargo' => $funcionario->Cargo,
				'Contato' => ( $telefone ) ? $telefone : NULL
			);
			
			return json_encode($arrFuncionario);
			
		} else{
			return json_encode( array("ERROR" => "Funcionário não Localizado") );
		}
		
	}
	
	/**
	 * Recupara a lista de Funcionários
	 * @return JSON
	 */
	public function getList(){
		
		$arrFuncionario = NULL;
		
		$listFuncionario = $this->funcionarioDAO->getListFuncionario();

		if( $listFuncionario ){
			foreach( $listFuncionario as $index => $funcionario ){

				$telefone = $this->telefoneDAO->read( $funcionario->Id );

				$arrFuncionario[] = array(
					'Nome' => $funcionario->Nome,
					'Idade' => $funcionario->Idade,
					'Email' => $funcionario->Email,
					'Cargo' => $funcionario->Cargo,
					'Contato' => ( $telefone ) ? $telefone : NULL
				);
			}
			
			return json_encode($arrFuncionario);

		} else {
			return json_encode( array("ERROR" => "Não há funcionários cadastrados") );
		}
		
		
	}
}
?>