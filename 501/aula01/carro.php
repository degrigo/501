<?php

// Classe Carro
// Atributos privados cor, marca, velocidade, marcha;
// construtor que define uma cor e uma marca para o carro;
// Métodos públicos: verCor, verMarca, verVelocidade, verMarcha;
// Método público acelerar - aumenta a velocidade em 10
// Método público freiar - diminui a velocidade em 10
// Método público trocarMarcha - recebe uma marcha por parâmetro e altera;

echo "<pre>";

class Carro
{

	private $cor;
	private $marca;
	private $velocidade;
	private $marcha;

	public function __construct($cor, $marca)
	{
		$this->cor = $cor;
		$this->marca = $marca;
	}

	public function verCor()
	{
		return "A cor do carro é: " . $this->cor . "<hr>";
	}

	public function verMarca()
	{
		return "A marca do carro é: " . $this->marca . "<hr>";
	}

	public function verVelocidade()
	{
		return "A velocidade do carro é: " . $this->velocidade . "<hr>";
	}

	public function verMarcha()
	{
		return "A marcha do carro é: " . $this->marcha . "<hr>";
	}

	public function acelerar()
	{
		$this->velocidade += 20;
	}

	public function freiar()
	{
		$this->velocidade -= 5;
	}

	public function trocarMarcha($marcha)
	{
		$this->marcha = $marcha;
	}
}

$modelo = new Carro("Vermelho", "Renault");

echo $modelo->verCor();
echo $modelo->verMarca();
$modelo->acelerar();
$modelo->acelerar();
$modelo->acelerar();
$modelo->freiar();
echo $modelo->verVelocidade();
$modelo->trocarMarcha(5);
echo $modelo->verMarcha();

