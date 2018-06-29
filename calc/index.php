<?php

require_once "calc.php";


$c = new Calc(12);
$c->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);

$result = $c->resultado();
 var_dump($result);