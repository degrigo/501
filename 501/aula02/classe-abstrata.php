<?php

echo "<pre>";

// Classe abstrata não pode ser instanciada
// Bloquear criação de objeto

// método abstrato só faz sentido de ser criada dentro de uma classe abstrata

// método abstrato obriga os filhos a declararem a mesma herança (método)

abstract Class Conta 
{
	
	abstract protected function depositar()
	{

	}

}