<?php
namespace application\mode\DAO\entity;

/**
 * Classe que representa a entidade Funcionário
 * @package application.mode.DAO.entity.EntityFuncionario
 */
class EntityFuncionario{
	
	/**
	 * @var string
	 */
	protected $nome;

	/**
	 * @var int
	 */	
	protected $idade;
	
	/**
	 * @var string
	 */
	protected $email;
	
	/**
	 * @var int
	 */
	protected $idFuncao;
	
	/**
	 * Resgata o nome do Funcionário
	 * @return string
	 */
	public function getNome(){
		return $this->nome;
	}
	
	/**
	 * Retorna a idade do Funcionário
	 * @return int
	 */
	public function getIdade(){
		return $this->idade;
	}
	
	/**
	 * Retorna o e-mail do funcionário
	 * @return string
	 */
	public function getEmail(){
		return $this->email;
	}
	
	/**
	 * Retorna o Id da Função do Funcionário
	 * @return int
	 */
	public function getIdFuncao(){
		return $this->idFuncao;
	}
	
	/**
	 * Seta o nome do Funcionário
	 * @return void
	 */
	public function setNome( $nome ){
		$this->nome = $nome;
	}

	/**
	 * Seta a idade do Funcionário
	 * @return void
	 */
	public function setIdade( $idade ){
		$this->idade = $idade;
	}
	
	/**
	 * Seta o e-mail do Funcionário
	 * @return void
	 */
	public function setEmail( $email ){
		$this->email = $email;
	}
	
	/**
	 * Seta o ID da Função do Funcionário
	 * @return void
	 */
	public function setIdFuncao( $idFuncao ){
		$this->idFuncao = $idFuncao;
	}
}
?>