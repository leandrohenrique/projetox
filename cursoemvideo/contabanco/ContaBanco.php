<?php

Class ContaBanco
{
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	public function __construct()
	{
		$this->setSaldo(0);
		$this->setStatus(false);
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

	public function abrirConta($tipo)
	{
		$this->setTipo($tipo);
		$this->setStatus(true);
		if ($tipo == 'CC' || $tipo == 'CP') {
			if ($tipo == 'CC') {
				$this->setSaldo(50);
			}
			if ($tipo == 'CP') {
				$this->setSaldo(150);
			}
		} else {
			echo "Tipo de conta inválida";
			exit();
		}
	}

	public function fecharConta()
	{
		if ($this->getSaldo() > 0) {
			echo "Conta contém dinheiro!";
		} else if ($this->getSaldo() < 0) {
			echo "Conta contém debito!";
		} else {
			$this->setStatus(false);
		}
	}

	public function sacar($valor)
	{
		if ($this->getStatus()) {
			if ($this->getSaldo() > 0) {
				$this->setSaldo($this->getSaldo() - $valor);	
			} else {
				echo "Saldo insuficiente!";
			}		  
		} else {
			echo "Conta inexistente!";
		}
	}

	public function depositar($valor)
	{
		if ($this->getStatus()) {
			$this->setSaldo($this->getSaldo() + $valor);
		}
	}

	public function pagarMensalidade()
	{
		if($this->getStatus()){
			if($this->getTipo() == 'CC'){
				$this->setSaldo($this->getSaldo() - 12);
			}
			if($this->getTipo() == 'CP'){
				$this->setSaldo($this->getSaldo() - 20);
			}
		}
	}
}