<?php

$arquivo = $_FILES['arq'];

if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {

	$nome_arquivo = md5(time().rand(0,99)).'png';
	move_uploaded_file($arquivo['tmp_name'], 'src/' . $nome_arquivo);

	echo "Arquivo enviado com sucesso!" ."<br><br>";
}
?>
<a href="index.php">Voltar</a>