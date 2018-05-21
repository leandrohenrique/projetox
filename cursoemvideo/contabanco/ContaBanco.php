<?php

Class ContaBanco
{
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	public function __construct($saldo, $status)
	{
		$this->saldo = 0;
		$this->status = false;
	}

	public function getNumConta()
	{
		return $this->numConta;
	}

	public function setNumConta($numConta)
	{
		$this->numConta = $numConta;
	}

	public function getTipo()
	{
		return $this->tipo;
	}

	public function setTipo($tipo)
	{
		$this->tipo = $tipo;
	}

	public function getDono()
	{
		return $this->dono;
	}

	public function setDono($dono)
	{
		$this->dono = $dono;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function setSaldo($saldo)
	{
		$this->saldo = $saldo;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function setStatus($status)
	{
		$this->status = $status;
	}

	public function abrirConta($numConta, $saldo, $tipo)
	{
		if ($this->status == false){
			$this->numConta = $numConta;
			$this->saldo = $saldo;
			if($this->tipo == 'CC' || $this->tipo == 'CP'){
				$this->tipo = $tipo;
			}
		} else {
			echo "Conta já cadastrada";
		}
	}
}