<?php

namespace Lib\TableGateway;

use PDO;
use Lib\Db\Conexao;

abstract class TableGateway
{

	private $con;

	public function __construct()
	{
		$this->con = Conexao::getInstance();
	}

	public function inserir(array $dados)
	{

		foreach ($dados as $campo => $valor) {
			$campos[] = $campo;
			$valores[] = "'$valor'";
		}

		$campos = implode(',', $campos);
		$valores= implode(',', $valores);

		$sql = "INSERT INTO {$this->tabela}({$campos}) VALUES({$valores})";
		echo $sql;

		$this->con->exec($sql);
	}

	public function atualizar(array $dados, string $onde)
	{
	
		foreach ($dados as $campo => $valor) {
			$sets[] = "{$campo} = '{$valor}'";
		}
		
		$sets = implode(',', $sets);
		
		$sql = "UPDATE {$this->tabela} SET {$sets} WHERE {$onde}";

		echo $sql;

		$this->con->exec($sql);
	}

	public function deletar(string $onde)
	{
		$sql = "DELETE FROM {$this->tabela} WHERE {$onde}";
		echo $sql;
		$this->con->exec($sql);
	}

	public function buscar(string $onde)
	{
		$sql = "SELECT * FROM {$this->tabela} WHERE {$onde}";

		echo $sql;

		$resultado = $this->con->query($sql);
		$registro = $resultado->fetch(PDO::FETCH_ASSOC);

		return $registro;
	}

	public function buscarTodos(string $onde = null)
	{
		$sql = "SELECT * FROM {$this->tabela}";

		if ($onde) {
			$sql .= " WHERE {$onde}";
		}

		echo $sql;

		$resultado = $this->con->query($sql);
		$registro = $resultado->fetchAll(PDO::FETCH_ASSOC);

		return $registro;
	}	

}