<?php

require_once 'ContaBanco.php';

$cc = new ContaBanco();
$cc->setNumConta(123);
$cc->setTipo('CC');
$cc->setSaldo(0);
//$cc->setStatus(true);
$cc->abrirConta();

var_dump($cc);