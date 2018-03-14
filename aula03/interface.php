<?php

echo "<pre>";

// usar implements para uso de interface
// minha classe conta precisa ter esses 3 métodos
// todo método de uma interface precisa ser público
// posso obrigar que uma classe implementa mais de uma interface

interface ContaInterface
{
	public function sacar();
	public function depositar();
	public function verSaldo();
}

class Conta implements ContaInterface
{

	public function sacar()
	{
		
	}	

	public function depositar()
	{

	}

	public function verSaldo()
	{

	}

}