<?php
	/**
	*
	*/
	
	//Constantes com as credenciais de acesso ao banco MySQL
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '1234');
	define('DB_NAME', 'ultimatephp_cadastro');
	
	//Habilita todas as exibições de erros
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	
	date_default_timezone_set('America/Sao_Paulo');
	
	//Inclui o arquivo de funções
	require_once 'functions.php';
?>