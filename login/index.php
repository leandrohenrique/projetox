<?php 
session_start();
require_once 'config.php';


if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {

	$id = $_SESSION['id'];

	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$sql = $pdo->query($sql);

	if (count($sql) > 0) {
		foreach ($sql->fetchAll() as $dado) {
			$nome = $dado['nome'];
		}
	}

	echo "Usuario: " .$nome. " conectado na area restrita!";

} else {

	header("Location: login.php");

}
