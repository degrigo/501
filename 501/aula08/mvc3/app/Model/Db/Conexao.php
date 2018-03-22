<?php

namespace Model\Db;

use PDO;

class Conexao
{

	private static $instance = null;

	public static function getInstance()
	{

		if(!self::$instance) {
			self::$instance = new PDO(DSN, USER, PASS);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		return self::$instance;

	}

}