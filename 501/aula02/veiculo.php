<?php

// Classe pai - Veículo
// Classes Filhas - Moto, Carro e Bicicleta
// Criar na classe pai todas as característcias em comum das classes filhas

// Protected deixa público para as classes filhas e privado para fora

// Private seta atributos para uma classe de forma privada

// Quando privado, precisamos criar métodos set e get(return) para valores, os tornando reutilizáveis para os filhos (Manipular Valores)

// Nesses métodos, conseguimos realizar validações para ações.

// usar o construtor quando realmente os valores são fixos para construção

// parâmetros sempre são passados ao método set

// set = Setar valores

// get = Pegar valores

echo "<pre>";

class Veiculo 
{

	private $marca;
	private $cor;
	// private $motor;
	// private $aro;
	// private $chave;
	private $velocidade;

	public function setMarca($marca) {
		$this->marca = $marca;
	}

	public function getMarca(){
		return $this->marca;
	}

	public function setCor($cor) {
		$this->cor = $cor;
	}

	public function getCor() {
		return $this->cor;
	}

	public function setVelocidade($velocidade){
		$this->velocidade = $velocidade;
	}

	public function getVelocidade(){
		return $this->velocidade;
	}

	public function ligar()
	{

	}

	public function desligar()
	{

	}

	public function acelerar()
	{

	}

	public function freiar()
	{

	}

	// public function __construct($marca, $cor, $motor, $aro, $chave)
	// {
	// 	$this->marca = $marca;
	// 	$this->cor = $cor;
	// 	$this->motor = $motor;
	// 	$this->aro = $aro;
	// 	$this->chave = $chave;
	// }

}

class Carro extends Veiculo
{

	// é possível sobreescrever métodos da classe pai dentro dos filhos
	// possuem as mesmas características possuindo valores(ações) diferentes

	public function acelerar()
	{
		$this->setVelocidade($this->getVelocidade() + 20);
	}

}

class Moto extends Veiculo
{

	public function acelerar()
	{
		$this->velocidade += 10;
	}

}

// $carro = new Carro("VW", "Azul", 1.6, 14, "Eletrônica");
$carro = new Carro();
$carro->setCor("Azul");
$carro->setMarca("VW");
$carro->setVelocidade(30);

var_dump($carro);

// $moto = new Moto("VW", "Azul", 1.6, 14, "Eletrônica");
$moto = new Moto();

var_dump($moto);