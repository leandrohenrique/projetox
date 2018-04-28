<?php
require_once 'config.php';
?>

<a href="adicionar.php">Adicionar novo Usuário</a>
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
			foreach ($sql->fetchAll() as $usuarios) {
				echo '<tr>';
					echo '<td>'.$usuarios['nome'].'</td>';
					echo '<td>'.$usuarios['email'].'</td>';
					echo '<td><a href="editar.php?id='.$usuarios['id'].'>Editar</a> - <a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';
				echo '</tr>';
			}
		}
	?>
</table>