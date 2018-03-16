<?php

echo "<pre>";

class X
{

	public function __construct()
	{
		echo "Método mágico construtor";
	}

	public function __destruct()
	{
		echo "Método mágico destruidor";
	}

}

// executando o objeto => $x = new X();
// (new X);

$x = new X();
//  destruindo a variável e a classe
unset($x);