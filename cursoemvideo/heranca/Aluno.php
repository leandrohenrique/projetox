<?php
require_once 'Pessoa.php';

//Herança para diferença	
class Aluno extends Pessoa
{
	private $matricula;
	private $curso;

	public function getMatricula()
	{
		return $this->matricula;
	}

	public function setMatricula($matricula)
	{
		$this->matricula = $matricula;
	}

	public function getCurso()
	{
		return $this->curso;
	}

	public function setCurso($curso)
	{
		$this->curso = $curso;
	}

	public function cancelarMatricula(){
		if (!empty($this->getMatricula())) {
			 $this->setMatricula(null);
			 echo '<p>Matricula cancelada</p>';
		} else {
			echo 'Não tem matricula!';
		}
	}

	public function pagarMensalidade()
	{
		echo "<p>Pagando mensalidade  do aluno: " . $this->getNome() . "</p>";
	}
}