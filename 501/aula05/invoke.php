<?php

echo "<pre>";

// trata o objeto como função
// executa o objeto como uma função

class Aluno
{
	public function __invoke()
	{
		echo "Function: <br>";
		// pega os argumentos de uma função
		$params = func_get_args();
		print_r($params);
	}
}

$a = new Aluno();
$a('Olá', 'oi');