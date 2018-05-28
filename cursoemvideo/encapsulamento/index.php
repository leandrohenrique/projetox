<?php

require_once 'ControleRemoto.php';

$c = new ControleRemoto();

$c->ligar();

$c->abrirMenu();

var_dump($c);