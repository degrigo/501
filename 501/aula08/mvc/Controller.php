<?php

include 'Model.php';

class Controller
{

	private $model;

	// Quando new Controller
	// Instancia classe Model
	public function __construct()
	{
		$this->model = new Model();
	}

	// Quando rodar a aplicação
	// Vamos pegar os dados no model
	// Incluir nossa view
	public function run()
	{
		$string = $this->model->getString();
		include 'View.php';
	}

}