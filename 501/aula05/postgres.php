<?php 

echo "<pre>";

$conexao = new PDO('pgsql:host=localhost;dbname=aula05','tadeu','123');

// var_dump($conexao);

// inserindo dados no banco
// $sql = "INSERT INTO tb_alunos(nome, email, senha, cpf, rg, dtNasc) VALUES ('Tadeu Grigolon', 'tadeu@webjump.com.br', '123', '32786521858', '442896785', '1984-05-05')";
// ----
// consultando dados no banco
// $sql = "SELECT * FROM tb_alunos";

// $result = $conexao->query($sql);

// $alunos = $result->fetchAll(PDO::FETCH_ASSOC);

// print_r($alunos);

// 

// $conexao->exec($sql);

// ----TRANSACTION
// usa try catch
// se cair na exceção, printo o erro

// Setattribute = setando atributos para ATTR_ERRMODE e ERRMODE_EXCEPTION

// beginTransaction = executa a query

// commit = salva a ação do sql

// PDOException Tipo da variácel $e setado como objeto

// rollback = não salva as informações no banco

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
	$conexao->beginTransaction();

	$sql = "INSERT INTO tb_alunos(nome, email, senha, cpf, rg, dtNasc) VALUES ('Tadeu Grigolon', 'tadeu@webjump.com.br', '123', '32786521858', '442896785', '1984-05-05')";

	$conexao->exec($sql);

	$sql = "INSERT INTO tb_alunos(nome, email, senha, cpf, rg, dtNasc) VALUES ('Tadeu Grigolon', 'tadeu@webjump.com.br', '123', '32786521858', '442896785',)";

	$conexao->exec($sql);

	$conexao->commit();
} catch (PDOException $e) {
	$conexao->rollback();
	die("Erro: " . $e->getMessage());
}