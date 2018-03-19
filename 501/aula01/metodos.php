<?php

class Carro 
{

	public $velocidade;

	public function acelerar() // Métodos são ações do objeto.
	{
		$this->velocidade += 10; // This é a representação do objeto dentro da ação. 								EX: Dentro do carro
	}

	public function freiar()
	{
		$this->velocidade -= 10;
	}

	public function buzinar()
	{
		echo "Estou buzinando <br>";
	}

}

$uno = new Carro();

$uno->buzinar();
$uno->acelerar();
$uno->acelerar();
$uno->acelerar();
echo "Velocidade atual: " . $uno->velocidade . "<br>";
$uno->freiar();
echo "Velocidade atual: " . $uno->velocidade . "<br>";

var_dump($uno);