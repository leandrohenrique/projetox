<?php

require_once 'Pessoa.php';
require_once 'Conta.php';


$p[0] = new Pessoa(1, 'Leandro', 1.69, 27, '20-09-1990', 'Superior Completo', 2900);
$c[0] = new Conta(1111, '30-05-2018', 'CC');
//$p[0]->crescer(1);
$p[0]->formar("Sistemas de informação");
$p[0]->envelhecer(5);

$c[0]->depositar(150);
$c[0]->retirar(20);
$c[0]->depositar(150);
$c[0]->obterSaldo();


var_dump($p[0]);
var_dump($c[0]);