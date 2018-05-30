<?php

$sorteio = array('Leandro', 'Kelly', 'Cassia', 'Aldean');

// Função que traz um valor aleatorio entre o intervalo relacioando
$x = rand(0, 3);

echo "A pessoa sorteada eh: " . $sorteio[$x];