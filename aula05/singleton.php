<?php

echo "<pre>";

class Conexao
{

	private static $user = 'tadeu';
	private static $pass = '123';
	private static $dsn = 'pgsql:host=localhost;dbname=test';
	private static $instance = null;

	public static function getInstance()
	{
		if(!self::$instance)
		{
			self::$instance = new PDO(self::$dsn, self::$user, self::$pass);
		}

		return self::$instance;
	}


}