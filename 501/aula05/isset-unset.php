<?php

// isset verifica se a variável ou valor está setado ou não
// muito utilizado com array.

// unset é usado quando tentamos destruir uma propriedade da classe

echo "<pre>";

class Aluno
{

	public function isset($name)
	{
		echo $name . "está setado?";
	}

	public function unset($name)
	{
		echo "apagando" . $name;
	}
}

$a = new Aluno();
// var_dump(isset($a->nome));

unset($a->nome);