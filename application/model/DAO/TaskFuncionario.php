<?php
namespace application\model\DAO;

use application\mode\DAO\entity\EntityFuncionario;

/**
 * Interface representando taferas realizadas para um funcionário no banco de dados
 */
interface TaskFuncionario {
	
	/**
	 * Recupera um Funcionários com ID específico
	 * @param int $idFuncionario
	 * @return EntityFuncionario
	 */
	public function read( $idFuncionario );
	
	/**
	 * Cria um novo Funcionários
	 * @param EntityFuncionario $funcionario
	 * @return boolean TRUE se o funcionário foi cadastrado com sucesso
	 */
	public function create( EntityFuncionario $funcionario );
	
	/**
	 * Atualiza informações do Funcionário
	 * @param EntityFuncionario $funcionario
	 * @return boolen TRUE se a atualização foi feita com sucesso 
	 */
	public function update( EntityFuncionario $funcionario );
	
	/**
	 * Deleta um funcionário da lista
	 * @param EntityFuncionario $funcionario
	 * @return boolen TRUE se o funcionário foi deletado com sucesso
	 */
	public function delete( EntityFuncionario $funcionario );
	
	/**
	 * Recupera uma lista de Funcionários 
	 * @return array
	 */
	public function getListFuncionario();
}
?>