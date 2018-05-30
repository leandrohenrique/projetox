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

	public function __construct($titulo, $autor, $totalPag, $leitor)
	{
		$this->setTitulo($titulo);
		$this->setAutor($autor);
		$this->setTotalPag($totalPag);
		$this->setLeitor($leitor);
		$this->setPagAtual(0);
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
		
		echo "<p>Título: " . $this->getTitulo() . "</p>";
		echo "<p>Autor: " . $this->getAutor() ."</p>";
		echo "<p>Total de páginas: " . $this->getTotalPag() . "</p>";
		echo "<p>Pagina atual: " . $this->getPagAtual() . "</p>";
		echo "<p>Sendo lido por: " . $this->getLeitor()->getNome() . "</p>";

	}

	public function abrir()
	{
		$this->setAberto(true);
	}

	public function fechar()
	{
		$this->setAberto(false);
	}

	public function folhear($pag)
	{
		if ($pag > $this->getTotalPag()) {
			$this->setPagAtual(0);
		} else {
			$this->setPagAtual($pag);
		}
	}

	public function avancarPag()
	{
		if ($this->getPagAtual() < $this->getTotalPag()){
			$this->setPagAtual($this->getPagAtual() + 1);
		} else {
			echo "Chegou ao final do livro";
		}
	}

	public function voltarPag()
	{
		if ($this->getPagAtual() <= $this->getTotalPag()) {
			$this->setPagAtual($this->getPagAtual() - 1);
		} else {
			echo "Chegou ao final do livro";
		}
	}
}