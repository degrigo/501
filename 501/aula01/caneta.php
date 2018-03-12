<?php

echo "<pre>";

class Caneta
{
	public $cor;
	public $marca;
	public $tampada;

	public function escrever()
	{
		echo "Escrevi algo na tela" . "<br>";
	}

}

$caneta1 = new Caneta();
$caneta1->cor = "Azul";
$caneta1->marca = "Bic";
$caneta1->escrever();
$caneta1->tampada = true;

var_dump($caneta1);

$caneta2 = new Caneta();
$caneta2->cor = "Vermelho";
$caneta2->marca = "Compacta";
$caneta2->escrever();
$caneta2->tampada = false;

var_dump($caneta2);