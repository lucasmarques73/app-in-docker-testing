<?php 

namespace Lib\Db;

use PDO;

class Connection
{
	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new PDO(DBDSN,DBUSER,DBPASS);

			self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}

		return self::$instance;
	}
}