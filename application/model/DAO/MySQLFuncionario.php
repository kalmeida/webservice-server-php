<?php
namespace application\model\DAO;

use application\model\DAO\TaskFuncionario;
use application\mode\DAO\entity\EntityFuncionario;

class MySQLFuncionario implements TaskFuncionario{
	
	/**
	 * @return EntityFuncionario
	 * @see TaskFuncionario::read()
	 */
	public function read( $idFuncionario ){}

	/**
	 * @return boolen
	 * @see TaskFuncionario::create()
	 */	
	public function create( EntityFuncionario $funcionario ){}
	
	/**
	 * @return boolen
	 * @see TaskFuncionario::update()
	 */	
	public function update( EntityFuncionario $funcionario ){}
	
	/**
	 * @return boolen
	 * @see TaskFuncionario::delete()
	 */	
	public function delete( EntityFuncionario $funcionario ){}
	
	/**
	 * @return array
	 * @see TaskFuncionario::getListFuncionario()
	 */
	public function getListFuncionario(){}
}

?>