<!-- <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<titulo>Aula PHP OO</titulo>
	</head>
	<body>

		<?php

/*			require_once 'Caneta.php';
			$caneta = new Caneta("BIC", "Azul");

			//$caneta->setModelo("BIC");
			//$caneta->setCor("Preta");
			$caneta->rabiscar();
			$caneta->destampar();

			echo "Modelo da caneta " . $caneta->getModelo()."<br>";
			echo "Cor da caneta " .$caneta->getCor();

			var_dump($caneta);*/
		?>
	</body>
</html> -->
<?php
echo "Data";
// Descobrir Mês Anterior
  echo date('d/m/Y', strtotime('-1 months', strtotime(date('Y-m-d'))));
  // Resultado: 26/01/2014

 // Descobrir Próximo Mês
  echo date('d/m/Y', strtotime('+1 months', strtotime(date('Y-m-d'))));
  // Resultado: 26/03/2014