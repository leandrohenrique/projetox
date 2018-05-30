<?php
//require_once 'Pessoa.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Funcionario.php';


$p2 = new Aluno; 
$p3 = new Professor;
$p4 = new Funcionario;

$p2->setNome('Henrique');
$p3->setNome('Gustavo');
$p4->setNome('Madalena');

$p2->setCurso('Sistema de Informação');
$p2->setMatricula(2554);
$p3->setSalario(2900);
$p4->setSetor('Estoque');

$p2->cancelarMatricula();
$p2->setMatricula(2559);

$p3->receberAumento(100);

$p4->mudarTrabalho('RH');


var_dump($p2); 
var_dump($p3); 
var_dump($p4); 
