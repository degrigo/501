<?php

namespace Lib\FrontController;

use Controller\UsuariosController;

class FrontController
{
	public function run(string $route, $action)
	{
		if($route == 'usuarios'){
			$usuariosController = new usuariosController();

			if($action == 'index'){
				$usuariosController->index();
			}			

			if($action == 'new'){
				$usuariosController->new();
			}

		}
	}
}