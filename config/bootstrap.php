<?php 

require_once dirname(__DIR__).'/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv( dirname(__DIR__) ); 
$dotenv->load();

require_once 'config.php';