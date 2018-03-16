<?php

// executo um método que não está definido na classe;

echo "<pre>";

class Aluno
{
	public function __call($metodo, array $parametros)
	{
		echo $metodo;
		echo "<hr>";
		print_r($parametros);
		echo "<br>";
	}
}

$a = new Aluno();

$a->getNome();
$a->setNome('4linux');