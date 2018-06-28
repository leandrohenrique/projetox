<?php
require_once "AcoesVideos.php";

class Video implements AcoesVideos
{
	private $titulo;
	private $avaliacao;
	private $views;
	private $curtidas;
	private $reproduzido;

	public function __construct($titulo)
	{
		$this->titulo = $titulo;
		$this->avaliacao = 1;
		$this->views = 0;
		$this->curtidas = 0;
		$this->reproduzido = false;
	}

	public function play()
	{
		$this->reproduzido = true;
	}

	public function pausar()
	{
		$this->reproduzido = false;
	}

	public function like()
	{
		$this->curtidas += 1;
	}

	public function getTitulos()
	{
		return $this->titulos;
	}

	public function setTitulos($titulos)
	{
		$this->titulos = $titulos;
	}

	public function getAvaliacao()
	{
		return $this->avaliacao;
	}

	public function setAvaliacao($avaliacao)
	{
		$media = ($this->avaliacao + $avaliacao) / $this->views;
		$this->avaliacao = $media;
	}

	public function getViews()
	{
		return $this->views;
	}

	public function setViews($views)
	{
		$this->views = $views;
	}

	public function getCurtidas()
	{
		return $this->curtidas;
	}

	public function setCurtidas($curtidas)
	{
		$this->curtidas = $curtidas;
	}

	public function getReproduzido()
	{
		return $this->reproduzido;
	}

	public function setReproduzido($reproduzido)
	{
		$this->reproduzido = $reproduzido;
	}
}
