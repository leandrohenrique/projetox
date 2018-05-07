<?php

//$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dsn = "pgsql:host=localhost;dbname=dbUnirg";
$dbuser = "leandrohenrique";
$dbpass = "root";
// $port = "5432";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

} catch (PDOException $e) {
	echo "Falhou: " . $e->getMessage();
}