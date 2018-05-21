<?php

require_once 'ContaBanco.php';

$cc = new ContaBanco();

$cc->abrirConta(123,1500,'CC');

var_dump($cc);