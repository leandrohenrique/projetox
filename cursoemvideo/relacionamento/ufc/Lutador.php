<?php

class Lutador
{
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
	private $peso;
	private $categoria;
	private $vitoria;
	private $derrota;
	private $empate;

	public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrota, $empate)
	{
		$this->setNome($nome);
		$this->setNacionalidade($nacionalidade);
		$this->setIdade($idade);
		$this->setAltuta($altura);
		$this->setPeso($peso);
		$this->setVitoria($vitoria);
		$this->setDerrota($derrota);
		$this->setEmpate($empate);
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNacionalidade()
	{
		return $this->nacionalidade;
	}

	public function setNacionalidade($nacionalidade)
	{
		$this->nacionalidade = $nacionalidade;
	}

	public function getIdade()
	{
		return $this->idade;
	}

	public function setIdade($idade)
	{
		$this->idade = $idade;
	}

	public function getAltura()
	{
		return $this->altura;
	}

	public function setAltuta($altura)
	{
		$this->altura = $altura;
	}

	public function getPeso()
	{
		return $this->peso;
	}

	public function setPeso($peso)
	{
		$this->peso = $peso;
		$this->setCategoria();
	}

	public function getCategoria()
	{
		return $this->categoria;
	}

	private function setCategoria()
	{
		if ($this->peso < 52.2) {
			$this->categoria = 'Invalido';
		} else if ($this->peso <= 70.3) {
			$this->categoria = 'Leve';
		} else if ($this->peso <= 83.9) {
			$this->categoria = 'Médio';
		}else if ($this->peso <= 120.2) {
			$this->categoria = 'Pesado';
		} else {
			$this->categoria = 'Invalido';
		}
	}

	public function getVitoria()
	{
		return $this->vitoria;
	}

	public function setVitoria($vitoria)
	{
		$this->vitoria = $vitoria;
	}

	public function getDerrota()
	{
		return $this->derrota;
	}

	public function setDerrota($derrota)
	{
		$this->derrota = $derrota;
	}

	public function getEmpate()
	{
		return $this->empate;
	}

	public function setEmpate($empate)
	{
		$this->empate = $empate;
	}

	public function apresentar()
	{
		echo "<p>-------------------------------</p>";
		echo "<br>Lutador: " . $this->getNome();
		echo "<br>Origem: " . $this->getNacionalidade();
		echo "<br>Idade: " . $this->getIdade();
		echo "<br>Altura: " . $this->getAltura();
		echo "<br>Peso: " . $this->getPeso();
		//echo "<br>Categoria: " $this->getCategoria();
		echo "<br>Vitoria: " . $this->getVitoria();
		echo "<br>Derrota: " . $this->getDerrota();
		echo "<br>Empate: " . $this->getEmpate();
 	}

 	public function status()
 	{
 		echo "<p>--------------------------------</p>";
 		echo "Lutador : " . $this->getNome() . " ";
 		echo "Peso: " . $this->getPeso() . " ";
 		echo "Vitorias: " . $this->getVitoria() . " ";
 		echo "Derrotas: " . $this->getDerrota() . " ";
 		echo "Empates: " .$this->getEmpate() . " ";
 	}

 	public function ganharLuta()
 	{
 		$this->setVitoria($this->getVitoria() + 1);
 	}

 	public function perderLuta()
 	{
 		$this->setDerrota($this->getDerrota() + 1);
 	}

 	public function empatarLuta()
 	{
 		$this->setEmpate($this->getEmpate() + 1);
 	}
}