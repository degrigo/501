<?php

// trait consegue ser usado em qualquer classe mesmo com métodos protegidos
// private não permite herança para os filhos de Classe X
//  não convem ter atributos na trait

trait Log
{

	public function escreverLog($msg)
	{
		echo "Log da $msg";
	}

}

// use copia o trait e implementa dentro da classe nova

class X
{
	use Log;

	public function salvar(){
		$this->escreverLog("trait");
	}

}

class Y extends X
{
	public function salvar(){
		$this->escreverLog("trait2");
	}
}

$x = new X();
$x->salvar();