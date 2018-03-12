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

	public function destampar() {
		$this->tampada = false;
	}

	public function tampar() {
		$this->tampada = true;
	}

}

$caneta1 = new Caneta();
$caneta1->cor = "Azul";
$caneta1->marca = "Bic";
$caneta1->escrever();
$caneta1->destampar();
$caneta1->tampar();


var_dump($caneta1);

$caneta2 = new Caneta();
$caneta2->cor = "Vermelho";
$caneta2->marca = "Compacta";
$caneta2->escrever();
$caneta2->destampar();
$caneta2->tampar();

var_dump($caneta2);