<?php

class Calc 
{
	private $valor;

	public function __construct($numero)
	{
		$this->valor = $numero;
	}

	public function somar($somar)
	{
		$this->valor += $somar;
		return $this;
	}

	public function subtrair($sub)
	{
		$this->valor -= $sub;
		return $this;
	}

	public function multiplicar($mult)
	{
		$this->valor *= $mult;
		return $this;
	}

	public function dividir($dividir)
	{
		$this->valor /= $dividir;
		return $this;
	}

	public function resultado()
	{
		return $this->valor;
	}
}