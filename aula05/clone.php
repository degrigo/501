<?php

echo "<pre>";

// clona o objeto criado.

// utilizando os métodos mágicos que são executados dentro da criação de qualquer objeto

// podemos bloquear qualquer método mágico colocando como privado.

class Aluno
{

	public function __clone()
	{
		echo "Estou clonando";
	}

}

$a = new Aluno();

$b = clone $a;