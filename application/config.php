<?php
	
	header('Content-Type: text/html; charset=uft-8');
		
	function __autoload( $class ){
		
		if( file_exists( $class.'.php' ) )  {
			include_once $class.'.php';
		}
	}
	
	date_default_timezone_set('America/Sao_Paulo');
?>