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
		$usuarios = $this->baseView->render(
			'usuarios/index', ['usuarios' => $usuarios]
			);
	}

	public function new()
	{
		$this->baseView->render('usuarios/new');
	}	

	public function create()
	{
		$this->usuariosModel->inserir($_POST);
		header('Location:?usuarios');
	}	

	public function edit($id)
	{
		echo "Edit {$id}";
	}

}