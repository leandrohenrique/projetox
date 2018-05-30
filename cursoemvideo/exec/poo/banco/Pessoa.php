<?php

class Pessoa
{
	private $codigo;
	private $nome;
	private $altura;
	private $idade;
	private $nascimento;
	private $escolaridade;
	private $salario; 

	
	public function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario)
	{
		$this->setCodigo($codigo);
		$this->setNome($nome);
		$this->setAltura($altura);
		$this->setIdade($idade);
		$this->setNascimento($nascimento);
		$this->setEscolaridade($escolaridade);
		$this->setSalario($salario);
	}

	public function crescer($centimetros)
	{
		if ($centimetros > 0) {
			$this->setAltura($this->getAltura() + $centimetros);
		} 
	}

	public function formar($titulo)
	{
		$this->setEscolaridade($titulo);
	}

	public function envelhecer($anos)
	{
		if ($anos > 0){
			$this->setIdade($this->getIdade() + $anos);
		}
	}

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getAltura()
	{
		return $this->altura;
	}

	public function setAltura($altura)
	{
		$this->altura = $altura;
	}

	public function getIdade()
	{
		return $this->idade;
	}

	public function setIdade($idade)
	{
		$this->idade = $idade;
	}

	public function getNascimento()
	{
		return $this->nascimento;
	}

	public function setNascimento($nascimento)
	{
		$this->nascimento = $nascimento;
	}

	public function getEscolaridade()
	{
		return $this->escolaridade;
	}

	public function setEscolaridade($escolaridade)
	{
		$this->escolaridade = $escolaridade;
	}

	public function getSalario()
	{
		return $this->salario;
	}

	public function setSalario($salario)
	{
		$this->salario = $salario;
	}

}