<?php

namespace View;

class View
{
	// passo um array de informações
	public function render(array $data)
	{
		// extract transforma um array em várias variáveis
		// ex: array['nome' => 'Lucas', 'empresa' => '4linux'];
		// ex: $nome = 'Lucas'; $empresa = '4linux';
		extract($data);
		include 'src/hello.php';
	}
}