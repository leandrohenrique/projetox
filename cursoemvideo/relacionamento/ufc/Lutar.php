<?php
require_once 'Lutador.php';
class Lutar
{
	private $desafiado;
	private $desafiante;
	private $rounds;
	private $aprovado;

	public function setDesafiado($desafiado)
	{
		$this->desafiado = $desafiado;
	}

	public function getDesafiado()
	{
		return $this->desafiado;
	}

	public function setDesafiante($desafiante)
	{
		$this->desafiante = $desafiante;
	}

	public function getDesafiante()
	{
		return $this->desafiante;
	}

	public function setRounds($rounds)
	{
		$this->rounds = $rounds;
	}

	public function getRounds()
	{
		return $this->rounds;
	}

	public function setAprovado($aprovado)
	{
		$this->aprovado = $aprovado;
	}

	public function getAprovado()
	{
		return $this->aprovado;
	}

	public function marcarLuta($desafiado, $desafiante)
	{
		if ($desafiado->getCategoria() ==  $desafiante->getCategoria() && $desafiado != $desafiante) {
			$this->setAprovado(true);
			$this->setDesafiado($desafiado);
			$this->setDesafiante($desafiante);
		} else {
			$this->setAprovado(false);
			$this->setDesafiado(null);
			$this->setDesafiante(null);
		}
	}

	public function lutar()
	{
		if ($this->getAprovado()) {
			$this->getDesafiado()->apresentar();
			$this->getDesafiante()->apresentar();
			$vencedor = rand(0,2);

			switch ($vencedor) {
				case 0: 
					echo "<p>Empatou</p>";
					$this->getDesafiado()->empatarLuta();
					$this->getDesafiante()->empatarLuta();
					break;

				case 1:
					echo "<p>". $this->getDesafiado()->getNome() . "  venceu</p>";
					$this->getDesafiado()->ganharLuta();
					$this->getDesafiante()->perderLuta();
					break;

				case 2:
					echo "<p>" . $this->getDesafiante()->getNome() . " venceu</p>";
					$this->getDesafiado()->perderLuta();
					$this->getDesafiante()->ganharLuta();
					break;
			}
		} else {
			echo " Luta não pode acontecer";
		}
	}
}