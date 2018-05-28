<?php

require_once 'ContaBanco.php';

$p1 = new ContaBanco();
$p2 = new ContaBanco();

$p1->abrirConta('CC');
$p1->setNumConta('1111');
$p1->setDono("Leandro");

$p2->abrirConta('CP');
$p2->setNumConta('2222');
$p2->setDono('Kelly');

$p1->depositar(300);
$p2->depositar(500);

$p2->sacar(150);

$p1->pagarMensalidade();
$p2->pagarMensalidade();

$p1->sacar(338);
$p2->sacar(480);

$p1->fecharConta();
$p2->fecharConta();


var_dump($p1);
var_dump($p2);