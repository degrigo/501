<?php

echo "<pre>";

// setando tipo Documento para a variável $doc

class Impressora
{
	public function imprimir(DocGenerico $doc)
	{
		echo $doc->getConteudo();
	}
}

abstract class DocGenerico
{
	abstract public function getConteudo();
}

class Documento extends DocGenerico
{

	private $Conteudo;

	public function __construct(string $conteudo)
	{
		$this->conteudo = $conteudo;
	}

	public function getConteudo()
	{
		return $this->conteudo;
	}

}

class Planilha extends DocGenerico
{
	private $conteudo;

	public function __construct(array $conteudo)
	{
		foreach ($conteudo as $linha) {
			$this->conteudo .= $linha . "<br>";
		}
	}

	public function getConteudo()
	{
		return $this->conteudo;
	}

}

$doc = new Documento('4linux');
$planilha = new Planilha(['oi','olá']);
$impressora = new Impressora();
$impressora->imprimir($doc);
echo "<hr>";
$impressora->imprimir($planilha);