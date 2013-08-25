<?php
namespace application\controller;

use application\model\BO\FuncionarioBO;

/**
 * classe controle de requsição ao WebService
 */
class WebService{
	
	/**
	 * @var FuncionarioBO
	 */
	private $funcionarioBO;
	
	public function __construct(){
		
		if ( $_SERVER['REQUEST_METHOD'] === 'GET' ){
			
			$this->funcionarioBO = new FuncionarioBO;
			
			//md5('getFuncionario') = 94c67c4df41931f1e8ef99b272413160;
			if( isset($_GET['request']) && $_GET['request'] == '94c67c4df41931f1e8ef99b272413160' ){
					
				if( !isset($_GET['id']) ){
					echo json_encode(array('ERROR' => 'Funcionário não informado'));
				}else{
					$funcionario = $this->funcionarioBO->getFuncionario( $_GET['id'] );
					echo $funcionario;
				}
			//echo md5('getListFuncionario') = 7122204b6e842ce8c55f68ebf132af5c
			}else if(isset($_GET['request']) && $_GET['request'] == '7122204b6e842ce8c55f68ebf132af5c'){
				
				$listFuncionario = $this->funcionarioBO->getList();
				echo $listFuncionario;
				
			}
		}
	}
	
}

?>