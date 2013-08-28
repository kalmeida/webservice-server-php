<?php
	
	header('Content-Type: text/html; charset=uft-8');
		
	function __autoload( $filename ){
		
		$filename = strtr( $filename, '\\', DIRECTORY_SEPARATOR );
		
		if( file_exists( $filename.'.php' ) )  {
			include_once $filename.'.php';
		}
	}
	
	date_default_timezone_set('America/Sao_Paulo');
?>