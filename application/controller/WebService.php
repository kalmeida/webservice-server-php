<?php
namespace application\controller;

use application\model\DAO\DatabaseFactory;

/**
 * class controle de requsição ao WebService
 */
class WebService{

	public function __construct(){
		
		if ( $_SERVER['REQUEST_METHOD'] === 'GET' ){
			
			DatabaseFactory::getInstancia();
			
			
			//md5('getFuncionario') = 94c67c4df41931f1e8ef99b272413160;
			if( isset($_GET['request']) && $_GET['request'] == '94c67c4df41931f1e8ef99b272413160' ){
							
			}
			
		}
	}
	
}

?>