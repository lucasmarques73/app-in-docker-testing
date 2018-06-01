<?php 

$config = [
	'basedir' => getenv('BASEDIR'),
	'dbuser'  => getenv('DBUSER'),
	'dbpass'  => getenv('DBPASS'),
	'dbname'  => getenv('DBNAME'),
	'dbhost'  => getenv('DBHOST'),
	'dbport'  => getenv('DBPORT'),
	'dbdriver'  => getenv('DBDRIVER'),
	'dbcharset'  => getenv('DBCHARSET'),
	'dbcollation'  => getenv('DBCOLLATION'),
	'dbtable_prefix'  => getenv('DBTABLEPREFIX'),
	'dbtable_suffix'  => getenv('DBTABLESUFFIX'),
];

//'pgsql:host='.DBHOST.';dbname='.DBNAME;
$config['dbdsn'] = $config['dbdriver'].':host='.$config['dbhost'].';dbname='.$config['dbname'];