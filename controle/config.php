<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "root";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);

} catch (PDOException $e) {
	echo "Falhou: " . $e->getMessage();
}