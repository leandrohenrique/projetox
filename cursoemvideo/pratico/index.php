<?php

require_once "Video.php";
require_once "Gafanhoto.php";
require_once "Visualizacao.php";

$v = array();
$g = array();
$vis = array();

$v[0] = new Video("PHP");
$v[1] = new Video("JavaScript");
$v[2] = new Video("HTML5 e CSS3");

$g[0] = new Gafanhoto("Leandro", 27, "M", "leandrohenrique");

$vis[0] = new Visualizacao($g[0], $v[0]);

// var_dump($v);
// var_dump($g);

var_dump($vis);