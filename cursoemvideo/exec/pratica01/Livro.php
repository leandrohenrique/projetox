<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';

class Livro implements Publicacao
{
	private $titulo;
	private $autor;
	private $totalPag;
	private $pagAtual;
	private $aberto;
	private $leitor;

	public function __construct()
	{
		$this->setAberto(false);
	}
	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}

	public function getTitulo()
	{
		return $this->titulo;
	}

	public function setAutor($autor)
	{
		$this->autor = $autor;
	}

	public function getAutor()
	{
		return $this->autor;
	}

	public function setTotalPag($totalPag)
	{
		$this->totalPag = $totalPag;
	}

	public function getTotalPag()
	{
		return $this->totalPag;
	}

	public function setPagAtual($pagAtual)
	{
		$this->pagAtual = $pagAtual;
	}

	public function getPagAtual()
	{
		return $this->pagAtual;
	}

	public function setAberto($aberto)
	{
		$this->aberto = $aberto;
	}

	public function getAberto()
	{
		return $this->aberto;
	}

	public function setLeitor($leitor)
	{
		$this->leitor = $leitor;
	}

	public function getLeitor()
	{
		return $this->leitor;
	}

	public function detalhes()
	{
		echo "Título: " . $this->getTitulo();
		echo "Autor: " . $this->getAutor();
		echo "Total de páginas: " . $this->getTotalPag();
	}

	public function abrir()
	{
		if ($this->getAberto()) {
			echo "<p>Abriu na página:" . $this->getPagAtual() . "</p>";
			$this->setAberto(true);
		} else {
			echo "Livro está aberto";
		}
	}

	public function fechar()
	{
		if ($this->getAberto()) {
			echo "<p>Fechou na página:" . $this->getPagAtual() . "</p>";
			$this->setFechar(false);
		} else {
			echo "livro está fechado";
		}
	}

	public function folhear()
	{
		if ($this->getAberto()) {
			$this->avancarPag();
		} else {
			echo "Livro fechado";
		}
	}

	public function avancarPag()
	{
		if ($this->getAberto() && ($this->getPagAtual() < $this->getTotalPag())) {
			$this->setPagAtual($this->getPagAtual() + 1);
		} else {
			echo "<p>Livro fecha ou leitura encerrada pelo leitor</p>";
		}
	}

	public function voltarPag()
	{
		if ($this->getAberto() && ($this->getPagAtual() <= $this->getTotalPag())) {
			$this->setPagAtual($this->getPagAtual() - 1);
		} else {
			echo "<p>Livro fecha ou leitura encerrada pelo leitor</p>";
		}
	}
}