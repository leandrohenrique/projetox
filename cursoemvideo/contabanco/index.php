<?php

require_once 'ContaBanco.php';

$cc = new ContaBanco();
$cc->abrirConta('CC');
//$cc->fecharConta();
//$cc->setDono('Leandro');
// $cc->setNumConta(123);
// //$cc->setTipo('CC');
// $cc->setSaldo(0);
// $cc->abrirConta();
// //$cc->fecharConta();
// $cc->setStatus(true);

 $cc->sacar(25);
// //$cc->pagarMensalidade();
 $cc->depositar(170);
// $cc->sacar(195);
 $cc->pagarMensalidade();
// $cc->depositar(12);
// $cc->fecharConta();
var_dump($cc);