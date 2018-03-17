<?php 

echo "<pre>";

// Inserindo dados na tabela via PDO

$conexao = new PDO('mysql:host=localhost;dbname=aula05','tadeu','@da4linux');

// $sql = "INSERT INTO tb_alunos(nome, email, senha, cpf, rg, dtNasc) VALUES ('Tadeu Grigolon', 'tadeu@webjump.com.br', '123', '32786521858', '442896785', '1984-05-05')";

$sql = "SELECT * FROM tb_alunos";

$result = $conexao->query($sql);

$alunos = $result->fetchAll(PDO::FETCH_ASSOC);

print_r($alunos);

// $conexao->exec($sql);

// var_dump($conexao);