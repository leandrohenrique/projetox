<?php

class Caneta
{
	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;

	public function __construct($modelo, $cor)
	{
		$this->modelo = $modelo;
		$this->cor = $cor;
	}

	public function getModelo()
	{
		return $this->modelo;
	}

	public function setModelo($modelo)
	{
		$this->modelo = $modelo;
	}

	public function getCor()
	{
		return $this->cor;
	}

	public function setCor($cor)
	{
		$this->cor = $cor;
	}

	public function getPonta()
	{
		return $this->ponta;
	}

	public function setPonta($ponta)
	{
		$this->ponta = $ponta;
	}

	public function getCarga()
	{
		return $this->carga;
	}

	public function setCarga($carga)
	{
		$this->carga = $carga;
	}

	public function getTampada()
	{
		return $this->tampada;
	}

	public function setTampada($tampada)
	{
		$this->tampada = $tampada;
	}

	public function rabiscar()
	{
		if ($this->tampada == true) {
			echo "<p>Error! Não posso rabiscar!</p>";
		} else {
			echo "<p>Estou rabiscando...</p>";
		}
	}

	public function tampar()
	{
		return $this->tampada = true;
	}

	public function destampar()
	{
		return $this->tampada = false;
	}
}