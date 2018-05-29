<?php

require_once 'ControleRemoto.php';

$c = new ControleRemoto();

$c->ligar();

//$c->maisVolume();
//$c->menosVolume();
$c->play();
$c->abrirMenu();
var_dump($c);