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
		global $config;
		
		if (!self::$instance) {
			self::$instance = new PDO($config['dbdsn'],$config['dbuser'],$config['dbpass']);

			self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}

		return self::$instance;
	}
}