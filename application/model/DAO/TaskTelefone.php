<?php
namespace application\model\DAO;

use application\model\DAO\entity\EntityFuncionario;

/**
 * Interface representando taferas realizadas na entidade Telefone do Banco de dados
 */
interface TaskTelefone {
	
	/**
	 * Recupera um ou mais Telefones com ID específico do Funcionário
	 * @param int $idFuncionario
	 * @return array
	 */
	public function read( $idFuncionario );
	
	/**
	 * Cria um novo Telefone para o Funcionário
	 * @param EntityFuncionario $funcionario
	 * @return boolean TRUE se o Telefone foi cadastrado com sucesso
	 */
	public function create( EntityFuncionario $funcionario );
	
	/**
	 * Atualiza informações do Telefone do Funcionário
	 * @param EntityFuncionario $funcionario
	 * @return boolen TRUE se a atualização do Telefone foi feita com sucesso 
	 */
	public function update( EntityFuncionario $funcionario );
	
	/**
	 * Deleta um Telefone da lista do Funcionário
	 * @param EntityFuncionario $funcionario
	 * @return boolen TRUE se o Telefone foi deletado com sucesso
	 */
	public function delete( EntityFuncionario $funcionario );

}
?>