<?php

echo "<pre>";

// Executa PSR em forma de método mágico para criar o require dos arquivos com namespace

function __autoload($classe)
{
	die('estou instanciando a classe' . $classe);
}

(new ClasseAluno);