<?php
require_once 'Pessoa.php';
require_once 'Livro.php';

$pessoa = array();
$livro = array();

$pessoa[0] = new Pessoa('Leandro', 27, 'M');
$livro[0] = new Livro();


var_dump($pessoa[0]);
var_dump($livro[0]);