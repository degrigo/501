<?php

echo "<pre>";
// trata o objeto como string

// método mágico quando lidamos com um objeto com string.

class Aluno
{

	private $nome = '4linux';

	public function __toString()
	{
		return "Estou tentando mostrar a string do objeto";
	}

}

$a = new Aluno();
echo $a;