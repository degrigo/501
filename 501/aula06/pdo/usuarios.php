<?php

require 'conexao.php';

// não adiciona novos emails por ser único

class Usuario
{
	private $id;
	private $nome;
	private $email;
	private $senha;

	public function __construct(string $nome, string $email, string $senha)
	{
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = md5($senha);
	}

	public function salvar()
	{
		$con = Conexao::getInstance();

		$con->beginTransaction();

		$sql = "INSERT INTO usuarios (nome, email, senha) VALUES(:nome, :email, :senha)";

		// statement protege sql injection

		$stmt = $con->prepare($sql);

		// bindvalue é uma outra maneira de se trabalhar com Statement
		// $stmt->bindValue(":nome", $this->nome);

		$dados = [
			':nome' => $this->nome,
			':email' => $this->email,
			':senha' => $this->senha
		];

		$stmt->execute($dados);

		$con->commit();
	}
}

$usuario = new Usuario('Rejane Grigolon', 'rejane.grigolon@gmail.com', '123');
$usuario->salvar();

echo "Usuário salvo no banco";