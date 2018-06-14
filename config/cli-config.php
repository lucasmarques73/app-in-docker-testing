<?php

require_once "bootstrap.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$paths = [
   dirname( __DIR__) . '/app/Model/Entity'
];

$isDevMode = true;

$dbParams = [
    'driver' => 'pdo_'.getenv('DBDRIVER'),
    'user' => getenv('DBUSER'),
    'password' => getenv('DBPASS'),
    'dbname' => getenv('DBNAME'),
    'host' => getenv('DBHOST'),
    'port' => getenv('DBPORT')
];

$config = Setup::createAnnotationMetadataConfiguration($paths,$isDevMode);
$entityManager = EntityManager::create($dbParams,$config);

return ConsoleRunner::createHelperSet($entityManager);