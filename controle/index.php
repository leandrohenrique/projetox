<?php
require_once 'config.php';
?>

<table border="0" width="100%">
	<tr>
		<th>Nome</th>
		<th>Email</th>
		<th>Senha</th>
	</tr>
	<?php 
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql);

		if (count($sql) > 0) {
			echo "Registro encontrado!";
		}
	?>
</table>