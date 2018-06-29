<?php

class Banco 
{
	private $pdo;
	private $numRows;
	private $array;

	public function __construct ($host, $dbname, $dbuser, $dbpass)
	{
		try {
			$this->pdo = new PDO("pgsql:host=".$host.";dbname=".$dbname, $dbuser, $dbpass);
		} catch(PDOExceptio $e) {
			echo "Falhou : " . $e->getMessage(); 
		}
	}

	public function query($sql)
	{
		$query = $this->pdo->query($sql);
		$this->numRows = $query->rowCount();
		$this->array = $query->fetchAll();
	}

	public function result()
	{
		return $this->array;
	}

	public function numRows()
	{
		return $this->numRows;	
	}
}