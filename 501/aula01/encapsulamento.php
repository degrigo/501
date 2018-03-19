<?php

// Classe chamada Conta
// Propriedades numConta, saldo, titular
// Métodos sacar, depositar, verSaldo, verTitular

// Nunca nomear a ação. Ela precisa ser considerada genérica
// Ações sempre retornam ações

echo "<pre>";

class Conta
{

	public $numConta;
	private $saldo; // utilizando a propriedade somente dentro da classe
	private $titular; // utilizando a propriedade somente dentro da classe

	public function __construct($titular, $saldo = 0){
		$this->titular = $titular;
		$this->numConta = rand(100,999);
		$this->depositar($saldo);
	}

	public function setarTitular(string $nome){
		$nomeCompleto = $this->titular = $nome;
		return "O nome do titular é: " . $nomeCompleto . "<br>";
	}

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

	public function verConta()
	{
		return "O número da conta é: " . $this->numConta . "<br>" . "<hr>";
	}

}

$conta = new Conta("Tadeu Grigolon", 500);

// $conta->titular = "Tadeu Grigolon"; // Não funciona por ser privada.
// echo $conta->verTitular(); // Não funciona por ser propriedade privada.
// echo $conta->setarTitular("Tadeu Grigolon"); // setando valor String fora da classe propriedade
echo $conta->verTitular();
echo $conta->verConta();
$conta->sacar(10);
$conta->depositar(100);
$conta->depositar(100);
// echo $conta->verSaldo();

// print_r($conta);