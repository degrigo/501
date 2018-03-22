<?php

namespace Controller;

use Model\Model;
use View\View;

class Controller
{
	private $model;
	private $view;

	public function __construct()
	{
		// construindo nova instância
		$this->model = new Model();
		$this->view = new View();
	}

	public function run()
	{
		$this->view->render();
	}


}