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

	public function addComentarios($msg)
	{
		$this->comentarios[] = $msg;
		$this->contarComentarios();
	}

	public function getQuantosComentarios()
	{
		return $this->qtComentarios;
	}

	private function contarComentarios()
	{
		$this->qtComentarios = count($this->comentarios);
	}
}

$post = new Post();
// $post->addComentarios("Teste");
$post->addComentarios("Teste 1");
$post->addComentarios("Teste 2");
$post->addComentarios("Teste 3");

echo "Quantidade de comentarios: " . $post->getQuantosComentarios();