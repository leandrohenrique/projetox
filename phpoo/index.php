<?php
class Pessoa 
{
	private $nome;
	private $idade;

	public function __construct($nome, $idade)
	{
		$this->$nome = $nome;
		$this->$idade = $idade;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		if(is_string($nome)){
			$this->nome = $nome;	
		}
	}

	public function getIdade()
	{
		return $this->idade;
	}

	public function setIdade($idade)
	{
		$this->idade = $idade;
	}
}

$l = new Pessoa("Leandro", "27");
// $l->setNome("Leandro");
// $l->setIdade(27);

echo $l->getNome();die();
echo "Nome: ".$l->getNome()."<br>";
echo "Idade: ".$l->getIdade()."<br>";
echo "<hr>";
	
// $f = new Pessoa();
// $f->setNome("Fulano");
// $f->setIdade(99);

// echo "Nome: ".$f->getNome()."<br>";
// echo "Idade: ".$f->getIdade()."<br>";
// echo "<hr>";