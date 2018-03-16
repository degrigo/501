<?php

// set cria a propriedade/atributo com propriedade e valor
// criou a propriedade email

// get pega o valor ou propriedade setado do objeto
// get retorna o valor

echo "<pre>";

class Aluno
{

	public $nome;

	public function __set($prop, $value)
	{
		echo $prop . ' - ' . $value;
	}

	public function __get($value)
	{
		echo $value;
	}

}

$nome = new Aluno();
// $nome->nome = "Tadeu";
$nome->email = "tadeu@webjump.com.br";

echo "<hr>";

print_r($nome);