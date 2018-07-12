<?php

class Conexao 
{
	define('DB_HOST', $dbhost);
	define('DB_NAME', $dbname);
	define('DB_USER', $dbuser);
	define('DB_PASS', $dbpass);

	// try {
	// 	$pdo = new PDO("mysql:host=". DB_HOST . ";dbname=" . DB_NAME,DB_USER,DB_PASS);

	// 	var_dump($pdo);die();
	// } catch(PDOException $e) {
	// 	echo "Falha: " . $e->getMessage();
	// }
}