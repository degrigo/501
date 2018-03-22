<?php

namespace Model;

use PDO;
use Model\Db\Conexao;

class Model
{
	private $con;

	public function __construct()
	{
		$this->con = Conexao::getInstance();
	}

	public function getUsuarios()
	{
		$sql = "SELECT * FROM usuarios";

		$stmt = $this->con->query($sql);

		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}
}