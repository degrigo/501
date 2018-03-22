<?php

require '../config/config.php';
require '../autoload.php';

use Lib\FrontController\FrontController;

// Rotas
// usuarios 		-> lista de usuários
// usuarios/new 	-> criar usuários
// usuarios/edit 	-> editar usuários
// ?rota=usuarios&acao=index

$rota = $_GET['rota'];
$acao = $_GET['acao'];

(new FrontController())->run($rota, $acao);