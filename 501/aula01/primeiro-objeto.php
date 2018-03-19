<?php

// Classe é a modelagem

// Objeto é a instância

echo "<pre>";

class Carro 
{

	public $cor; // Propriedades do objeto
	public $marca;
	public $modelo;

}

$uno = new Carro(); //Objeto da classe carro

$uno->cor = "Azul";
$uno->marca = "Fiat";
$uno->modelo = "Uno 1.0";

var_dump($uno);

$gol = new Carro();

$gol->cor = "Preto";
$gol->marca = "Volkswagen";
$gol->modelo = "Gol 2.0";

var_dump($gol);