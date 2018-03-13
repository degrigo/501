<?php

// Classe chamada Conta
// Propriedades numConta, saldo, titular
// Métodos sacar, depositar, verSaldo, verTitular

// Nunca nomear a ação. Ela precisa ser considerada genérica

echo "<pre>";

class Conta
{

	public $numConta;
	public $saldo;
	public $titular;

	public function sacar($valor) 
	{
		$this->saldo -= $valor;
		return "Estou sacando R$ {$valor}";
	}

	public function depositar($valor)
	{
		$this->saldo += $valor;
		return "Estou depositando R$ {$valor}";
	}

	public function verSaldo()
	{
		return "O saldo da conta é: " . $this->saldo . "<hr>";
	}

	public function verTitular()
	{
		return "O titular da conta é: " . $this->titular . "<br>" . "<hr>";
	}

}

$conta = new Conta();

$conta->titular = "Tadeu Grigolon";
echo $conta->verTitular();
$conta->sacar(10);
$conta->depositar(100);
$conta->depositar(100);
echo $conta->verSaldo();

print_r($conta);