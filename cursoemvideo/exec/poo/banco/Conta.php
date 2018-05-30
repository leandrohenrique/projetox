<?php

class Conta
{
	private $agencia;
	private $codigo;
	private $dataCriacao;
	private $titulo;
	private $senha;
	private $saldo;
	private $cancelada;

	public function __construct($agencia, $dataCriacao, $titulo)
	{
		$this->setAgencia($agencia);
		$this->setDataCriacao($dataCriacao);
		$this->setTitulo($titulo);
		$this->setSaldo(0);
		$this->setCancelada(false);
	}

	public function retirar($valor)
	{
		if ($valor > 0) {
			$this->setSaldo($this->getSaldo() - $valor);
		} else {
			echo "<p>Saldo insuficiente</p>";
		}
	}

	public function depositar($valor)
	{
		if ($valor){
			$this->setSaldo($this->getSaldo() + $valor);
		}
	}

	public function obterSaldo()
	{
		return $this->getSaldo();
	}

	public function getAgencia()
	{
		return $this->agencia;
	}

	public function setAgencia($agencia)
	{
		$this->agencia = $agencia;
	}

	public function getCodigo()
	{
		return $this->codigo;
	}

	public function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}

	public function getDataCriacao()
	{
		return $this->dataCriacao;
	}

	public function setDataCriacao($dataCriacao)
	{
		$this->dataCriacao = $dataCriacao;
	}

	public function getTitulo()
	{
		return $this->titulo;
	}

	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setSaldo($saldo)
	{
		$this->saldo = $saldo;
	}

	public function getCancelada()
	{
		return $this->cancelada;
	}

	public function setCancelada($cancelada)
	{
		$this->cancelada = $cancelada;
	}
}