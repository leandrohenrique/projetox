<?php

function pares($x, $y) 
{

	$valor = 0;

	while ($valor <= $y) {

		if ($valor % 2 == 0) {
			if ($valor >= $x && $valor <= $y) {
				var_dump($valor);
			}
		}
		$valor ++;
	}
}

pares(31,321);