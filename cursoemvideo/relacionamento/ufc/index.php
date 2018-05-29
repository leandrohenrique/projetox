<?php
require_once 'Lutador.php';
$vetor = array();

$vetor[0] = new Lutador('Leandro', 'BR', 27, 1.69, 64.4, 12, 2, 3);
$vetor[1] = new Lutador('HJJLJO', 'JF', 27, 1.69, 81.4, 12, 0, 0);
$vetor[2] = new Lutador('UIYIUY', 'FD', 27, 1.69, 90.4, 12, 5, 3);
$vetor[3] = new Lutador('kjhkhi', 'JK', 27, 1.69, 124.4, 12, 5, 3);
$vetor[4] = new Lutador('TUT', 'UD', 27, 1.69, 50.4, 12, 5, 3);

$vetor[0]->ganharLuta();
$vetor[0]->apresentar();
$vetor[0]->status();

$vetor[1]->perderLuta();
$vetor[1]->apresentar();
$vetor[1]->status();

var_dump($vetor[0]);
var_dump($vetor[1]);
var_dump($vetor[2]);
var_dump($vetor[3]);
var_dump($vetor[4]);