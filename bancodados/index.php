<?php

require_once "banco.php";

$con = new Banco("localhost", "dbUnirg", "leandrohenrique", "root");

$con->query("SELECT * FROM usuarios");
$result = $con->result();

if ($result > 0 ) {
	foreach ($result as $value) {
		echo "Nome: " . $value['nome']."<br>";
		echo "Email: " . $value['email']."<br>";
	}
}

var_dump($result);