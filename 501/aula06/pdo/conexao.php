<?php

class Conexao
{

	private static $user = 'tadeu';
	private static $pass = '@da4linux';
	private static $dsn  =  'mysql:host=localhost;dbname=kanban';

	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	// para atributos de métodos estáticos, o $this não funciona.
	// utilize self::

	public static function getInstance()
	{
		if(!self::$instance){
			self::$instance = new PDO(self::$dsn, self::$user, self::$pass);
		}
		return self::$instance;
	}
}

var_dump(Conexao::getInstance());