<?php

namespace Controller;

use Model\UsuariosModel;
use Lib\BaseView\BaseView;

class UsuariosController
{

	private $usuariosModel;
	private $baseView;

	public function __construct()
	{
		$this->usuariosModel = new UsuariosModel;
		$this->baseView = new BaseView;
	}

	public function index()
	{
		$usuarios = $this->usuariosModel->all();
		print_r($usuarios);
		die();
		$usuarios = $this->baseView->render('usuarios/index', ['usuarios' => $usuarios]);
	}
	public function new()
	{
		echo "NEW";
	}	
	public function edit($id)
	{
		echo "Edit {$id}";
	}

}