<?php

// Herança se trata um nível acima de objetos
// Como nome diz, é herdado da classe pai para os filhos
// O que é um carro? Que é uma moto?
// Ambos são veículos, ou seja, existe uma categoria de descrição acima de carros e motos.

echo "<pre>";

class Animal 
{

	public $raca;
	public $genero;

	public function comer()
	{
		# code...
	}	

	public function dormir()
	{
		# code...
	}

}

class Cachorro extends Animal
{



}

class Gato extends Animal
{


	
}

$dog = new Cachorro();
$dog->raca = "Vira Lata";
var_dump($dog);


$cat = new Gato();