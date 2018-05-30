<?php
require_once 'Pessoa.php';
require_once 'Livro.php';

$pessoa[0] = new Pessoa('Leandro', 27, 'M');

$livro[0] = new Livro('PHP OO', 'Leandro Henrique', 500, $pessoa[0]);


$livro[0]->abrir();
$livro[0]->folhear(52);
$livro[0]->avancarPag();


$livro[0]->detalhes();


var_dump($livro[0]);