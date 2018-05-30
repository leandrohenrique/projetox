<?php
require_once 'Post.php';

$post = new Post();
// $post->addComentarios("Teste");
$post->addComentarios("Teste 1");
$post->addComentarios("Teste 2");
$post->addComentarios("Teste 3");
$post->addComentarios("Teste 4");
$post->addComentarios("Teste 5");
$post->addComentarios("Teste 6");

echo "Quantidade de comentarios: " . $post->getQuantosComentarios();

var_dump($post);