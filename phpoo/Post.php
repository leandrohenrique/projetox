<?php

class Post
{
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;
	private $qtComentarios;

	public function getTitulo()
	{
		return $this->titulo;
	}

	public function setTitulo($titulo)
	{
		$this->titulo = $titulo;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setData($data)
	{
		$this->data = $data;
	}

	public function getCorpo()
	{
		return $this->corpo;
	}

	public function setCorpo($corpo)
	{
		$this->corpo = $corpo;
	}

	public function getQuantosComentarios()
	{
		return $this->qtComentarios;
	}

	public function setQuantosComentarios($qtComentarios)
	{
		$this->qtComentarios = $qtComentarios;
	}

	public function getComentarios()
	{
		return $this->comentarios;
	}

	public function setComentarios($comentarios)
	{
		$this->comentarios[] = $comentarios;
	}

	public function addComentarios($msg)
	{
		$this->setComentarios($msg);
		$this->contarComentarios();
	}

	private function contarComentarios()
	{
		$this->setQuantosComentarios(count($this->getComentarios()));
	}
}

