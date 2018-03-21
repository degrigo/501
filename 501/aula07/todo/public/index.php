<?php

echo "<pre>";

require '../config/config.php';
require '../autoload.php';

use Lib\Db\Conexao;
use Model\Entity\Usuarios;
use Model\Mapper\UsuariosMapper;

echo DSN . "<br>";

var_dump(Conexao::getInstance());

echo "<hr>";

$users = (new UsuariosMapper())->buscarTodos();

print_r($users);