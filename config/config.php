<?php 

$config = [
	'basedir' => getenv('PWD'),
	'dbuser'  => getenv('DBUSER'),
	'dbpass'  => getenv('DBPASS'),
	'dbname'  => getenv('DBNAME'),
	'dbhost'  => getenv('DBHOST'),
	'dbdriver'  => getenv('DBDRIVER')
];

//'pgsql:host='.DBHOST.';dbname='.DBNAME;
$config['dbdsn'] = $config['dbdriver'].':host='.$config['dbhost'].';dbname='.$config['dbname'];