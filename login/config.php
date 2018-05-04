<?php

$dns = "pgsql:dbname=dbUnirg;host=127.0.0.1";
$dbuser = "leandrohenrique";
$dbpass = "root";

try {

	$pdo = new PDO($dns, $dbuser, $dbpass);

	$sql = "SELECT * FROM usuarios";
	$sql = $pdo->query($sql);

} catch (PDOException $e){
	echo "A conexão Falou: " . $e->getMessage();
}